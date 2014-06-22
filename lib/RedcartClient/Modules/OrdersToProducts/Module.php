<?php

namespace RedcartClient\Modules\OrdersToProducts;

use RedcartClient\Modules\CrudModule;

class Module extends CrudModule {
    /**
     * @return string
     */
    protected function getResourceClass()
    {
        return '\\RedcartClient\\Resources\\Orders\\OrderProduct';
    }

    /**
     * @return string
     */
    protected function getPkField()
    {
        return 'orders_id';
    }


}