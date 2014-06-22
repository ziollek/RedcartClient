<?php

namespace RedcartClient\Modules\ProductsToCategories;

use RedcartClient\Modules\CrudModule;

class Module extends CrudModule {
    /**
     * @return string
     */
    protected function getResourceClass()
    {
        return '\\RedcartClient\\Resources\\Products\\ProductCategory';
    }

    /**
     * @return string
     */
    protected function getPkField()
    {
        return 'products_id';
    }

    /**
     * @param Resource|\Resource[] $resources
     * @param array $options
     * @return Resource|\Resource[]|void
     *
     * @throws \InvalidArgumentException
     */
    public function update($resources, $options = array())
    {
        throw new \InvalidArgumentException('Operation not permitted');
    }


}