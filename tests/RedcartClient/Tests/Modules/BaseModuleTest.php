<?php


namespace RedcartClient\Tests\Modules;

use RedcartClient\Tests\Stub\Sample\Module;

class BaseModuleTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function shouldRetrieveModuleNameFromClassNamespace()
    {
        $clientMock = $this->getMockBuilder('\\RedcartClient\\Api\\Client')
            ->disableOriginalConstructor()
            ->getMock();

        $module = new \RedcartClient\Tests\Stub\Sample\Module($clientMock);

        $this->assertSame('sample', $module->getModuleName());
    }

    /**
     * @test
     */
    public function shouldConstructProperPostData()
    {
        $clientMock = $this->getMockBuilder('\\RedcartClient\\Api\\Client')
            ->disableOriginalConstructor()
            ->getMock();

        $module = new \RedcartClient\Tests\Stub\Sample\Module($clientMock);

        $this->assertSame(
            array(
            'viewType' => 'json',
            'module'   => 'sample',
            'method'   => 'test'
            ),
            $module->showPostData('test')
        );
    }
}
