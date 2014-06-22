<?php

namespace RedcartClient\Modules\Products;

use RedcartClient\Modules\CrudModule;

class Module extends CrudModule {

    /**
     * @return string
     */
    protected function getResourceClass()
    {
        return '\\RedcartClient\\Resources\\Products\\Product';
    }

    /**
     * @return string
     */
    protected function getPkField()
    {
        return "productsId";
    }

}