<?php

namespace RedcartClient\Tests\Stub\Sample\Crud;

use RedcartClient\Modules\CrudModule;

class Module extends CrudModule {


    /**
     * @return string
     */
    protected function getResourceClass()
    {
        return '\\RedcartClient\\Tests\\Stub\\SampleResource';
    }

    /**
     * @return string
     */
    protected function getPkField()
    {
        return "id";
    }


}