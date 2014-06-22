<?php

namespace RedcartClient\Modules;

use RedcartClient\Mapper\RawToResourceMapper;

abstract class CrudModule extends BaseModule {

    /**
     * @var RawToResourceMapper
     */
    private $rawToResourceMapper;

    /**
     * @param \RedcartClient\Mapper\RawToResourceMapper $rawToResourceMapper
     */
    public function setRawToResourceMapper(RawToResourceMapper $rawToResourceMapper)
    {
        $this->rawToResourceMapper = $rawToResourceMapper;
    }


    public function count()
    {
        $response = $this->client->call($this->getPostData('count'));

        return $response['count'];
    }

    /**
     * @param $idsArray
     *
     * @return Resource[]
     */
    public function selectByIds($idsArray)
    {
        $postData = $this->getPostData('selectIds');
        $idsKeyName = $this->getModuleUnderscoredName().'_id';
        $postData['parameters'] = array(
            $idsKeyName => $idsArray
        );
        $response = $this->client->call($postData);

        return $this->mapResponse($response);
    }

    /**
     * @param array $filters
     * @param int   $offset
     * @param int   $limit
     *
     * @return Resource[]
     */
    public function select($filters = array(), $offset = 0, $limit = 30)
    {
        $postData = $this->getPostData('select');
        $postData['parameters'] = $filters;
        $postData['options'] = array(
            'offset' => $offset,
            'limit'  => $limit
        );

        $response = $this->client->call($postData);

        return $this->mapResponse($response);
    }

    /**
     * Return collection or instance of added resources
     *
     * @param Resource|Resource[] $resources
     * @param array               $options
     *
     * @return Resource[]|Resource
     */
    public function add($resources, $options = array())
    {
        $postData = $this->getPostData('add');

        list($single, $data, $resultCollection) = $this->prepareNormalizedData($resources, false);

        if (count($data) > 0) {
            $postData['parameters'] = $data;
            $postData['options'] = $options;
            $result = $this->client->call($postData);
            foreach ($result[$this->getUnderscoreString($this->getPkField())] as $no => $id) {
                $resultCollection[$no]->{'set' . ucfirst($this->getPkField())}($id);
                $resultCollection[$no]->clearDirty();
            }
        }

        return $this->conditionalReturn($single, $resultCollection);
    }

    /**
     * Return collection or instance of updated resources
     *
     * @param Resource|Resource[] $resources
     * @param array               $options
     *
     * @return Resource[]|Resource
     */
    public function update($resources, $options = array())
    {
        $postData = $this->getPostData('update');
        list($single, $data, $resultCollection) = $this->prepareNormalizedData($resources, true);

        if (count($data) > 0) {
            $postData['parameters'] = $data;
            $postData['options'] = $options;
            $this->client->call($postData);
            foreach($resultCollection as $resource) {
                $resource->clearDirty();
            }
        }
        return $this->conditionalReturn($single, $resultCollection);
    }

    /**
     * Return count of deleted resources
     *
     * @param array|int|Resource $resources
     *
     * @return int
     */
    public function delete($resources)
    {
        $toDelete = array();
        if (!is_array($resources)) {
            $resources = array($resources);
        }

        foreach ($resources as $resource) {
            if (is_object($resource)) {
                $toDelete[] = $resource->{'get' . ucfirst($this->getPkField())}();
            } else {
                $toDelete[] = $resource;
            }
        }

        if (count($toDelete) > 0) {
            $postData = $this->getPostData('delete');
            $idsKeyName = $this->getModuleUnderscoredName().'_id';
            $postData['parameters'] = array($idsKeyName => $toDelete);

            $response = $this->client->call($postData);

            return $response['count'];
        }

        return 0;
    }


    /**
     * @param $data
     * @return null|Resource|\Resource[]
     * @throws \RuntimeException
     */
    private function mapResponse($data)
    {
        if (is_null($this->rawToResourceMapper)) {
            throw new \RuntimeException('Cannot map response to object or collection, missing dependency RawToResourceMapper');
        }

        return $this->rawToResourceMapper->map(
            $data[$this->getCollectionResultField()],
            $this->getResourceClass()
        );
    }

    /**
     * @return string
     */
    private function getModuleUnderscoredName()
    {
        return $this->getUnderscoreString($this->getModuleName());
    }

    /**
     * @param string $string
     *
     * @return string
     */
    private function getUnderscoreString($string)
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $string));
    }

    /**
     * @param Resource[] $resources
     * @param bool       $addPrimaryKey
     *
     * @return array
     */
    public function prepareNormalizedData($resources, $addPrimaryKey)
    {
        $single = false;
        if (is_object($resources)) {
            $resources = array($resources);
            $single = true;
        }

        $data = array();
        $resultCollection = array();

        foreach ($resources as $resource) {
            $resourceData = $resource->getDirtyValues();
            if (count($resourceData) > 0) {
                if ($addPrimaryKey){
                    $resourceData[$this->getUnderscoreString($this->getPkField())] =
                        $resource->{'get' . ucfirst($this->getPkField())}();
                }
                $data[] = $resourceData;
                $resultCollection[] = $resource;
            }
        }
        return array($single, $data, $resultCollection);
    }

    /**
     * @param $single
     * @param $resultCollection
     * @return Resource[]|Resource
     */
    public function conditionalReturn($single, $resultCollection)
    {
        if ($single) {
            reset($resultCollection);
            return current($resultCollection);
        }
        return $resultCollection;
    }

    /**
     * @return string
     */
    abstract protected function getResourceClass();

    /**
     * @return string
     */
    abstract protected function getPkField();

    /**
     * @return string
     */
    protected function getCollectionResultField()
    {
        return $this->getModuleUnderscoredName();
    }
}