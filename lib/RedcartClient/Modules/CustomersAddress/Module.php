<?php

namespace RedcartClient\Modules\CustomersAddress;

use RedcartClient\Modules\CrudModule;

class Module extends CrudModule {
    /**
     * @return string
     */
    protected function getResourceClass()
    {
        return '\\RedcartClient\\Resources\\Customers\\CustomerAddress';
    }

    /**
     * @return string
     */
    protected function getPkField()
    {
        return 'customers_address_id';
    }

    protected function getCollectionResultField()
    {
        return 'customers_addresses';
    }


}