<?php

namespace RedcartClient\Modules\Producers;

use RedcartClient\Modules\CrudModule;

class Module extends CrudModule {
    /**
     * @return string
     */
    protected function getResourceClass()
    {
        return '\\RedcartClient\\Resources\\Producers\\Producer';
    }

    /**
     * @return string
     */
    protected function getPkField()
    {
        return 'id';
    }


}