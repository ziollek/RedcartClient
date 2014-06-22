<?php

namespace RedcartClient\Modules\Orders;

use RedcartClient\Modules\CrudModule;

class Module extends CrudModule {
    /**
     * @return string
     */
    protected function getResourceClass()
    {
        return '\\RedcartClient\\Resources\\Orders\\Order';
    }

    /**
     * @return string
     */
    protected function getPkField()
    {
        return 'orders_id';
    }

    protected function getCollectionResultField()
    {
        return 'customers';
    }


}