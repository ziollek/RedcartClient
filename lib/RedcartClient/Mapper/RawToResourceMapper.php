<?php

namespace RedcartClient\Mapper;

use RedcartClient\Resources\Resource;

class RawToResourceMapper {


    /**
     * @param $rawData
     * @param $resourceClass
     * @return null|Resource|Resource[]
     */
    public function map($rawData, $resourceClass) {
        $result = null;
        if (is_array($rawData) && count($rawData) > 0) {
            if (is_numeric(key($rawData))) {
                $result = array();
                foreach ($rawData as $resourceData) {
                    $result[] = $this->fillObject($resourceData, new $resourceClass);
                }
            } else {
                $result = $this->fillObject($rawData, new $resourceClass);
            }
        }

        return $result;
    }

    /**
     * @param array    $resourceData
     * @param Resource $resource
     *
     * @throws \RuntimeException
     */
    private function fillObject($resourceData, Resource $resource)
    {
        foreach($resourceData as $field => $value) {
            $setter = $this->getSetterName($field);

            if (!is_callable(array($resource, $setter))) {
                throw new \RuntimeException('Cannot set unknown field: ' . $field);
            }
            $resource->{$setter}($value);
        }

        $resource->clearDirty();

        return $resource;
    }

    /**
     * @param string $name
     *
     * @return string
     */
    private function getSetterName($name)
    {
        return 'set'.ucfirst(preg_replace('/(_)([a-z0-9])/e', 'strtoupper($2)', $name));
    }
}