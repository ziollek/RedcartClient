<?php


namespace RedcartClient\Modules\Customers;


use RedcartClient\Modules\CrudModule;

class Module extends CrudModule{
    /**
     * @return string
     */
    protected function getResourceClass()
    {
        return '\\RedcartClient\\Resources\\Customers\\Customer';
    }

    /**
     * @return string
     */
    protected function getPkField()
    {
        return 'customers_id';
    }


}