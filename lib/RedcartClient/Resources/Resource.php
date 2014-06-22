<?php

namespace RedcartClient\Resources;

class Resource {

    /**
     * @var array
     */
    protected $dirtyColumns = array();

    protected function updateState()
    {
        $callers=debug_backtrace();
        $callFunction = $callers[1]['function'];
        $field = lcfirst(str_replace('set', '', $callFunction));

        $this->dirtyColumns[$field] = 1;
    }

    /**
     * @return array
     */
    public function getDirtyValues()
    {
        $response = array();
        foreach($this->dirtyColumns as $column => $dirty) {
            $response[$this->getUnderscoredField($column)] = $this->{'get'.ucfirst($column)}();
        }

        return $response;
    }

    public function clearDirty()
    {
        $this->dirtyColumns = array();
    }

    /**
     * @return string
     */
    private function getUnderscoredField($fieldName)
    {
        return strtolower(preg_replace('/([a-z])([A-Z0-9])/', '$1_$2', $fieldName));
    }
}