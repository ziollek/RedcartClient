<?php

namespace RedcartClient\Tests\Locator;

use RedcartClient\Locator\ModuleLocator;
use RedcartClient\Mapper\RawToResourceMapper;

class ModuleLocatorTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function shouldReturnAllSupportedModules()
    {
        $supportedModulesNames = array(
            'hello',
            'products',
            'customers',
            'customersAddress',
            'orders',
            'ordersToProducts',
            'categories',
            'productsToCategories',
            'producers',
            'gallery'
        );

        sort($supportedModulesNames);

        $clientMock = $this->getMockBuilder('\\RedcartClient\\Api\\Client')
            ->disableOriginalConstructor()
            ->getMock();

        $moduleLocator = new ModuleLocator();
        $modules = $moduleLocator->getAllSupportedModules($clientMock, new RawToResourceMapper());

        $modulesNames = array();
        foreach ($modules as $module) {
            $modulesNames[] = $module->getModuleName();
        }
        sort($modulesNames);

        $this->assertEquals($supportedModulesNames, $modulesNames);
    }
}
