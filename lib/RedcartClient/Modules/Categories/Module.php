<?php

namespace RedcartClient\Modules\Categories;

use RedcartClient\Modules\CrudModule;

class Module extends CrudModule {
    /**
     * @return string
     */
    protected function getResourceClass()
    {
        return '\\RedcartClient\\Resources\\Categories\\Category';
    }

    /**
     * @return string
     */
    protected function getPkField()
    {
        return 'id';
    }


}