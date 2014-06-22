<?php

namespace RedcartClient\Tests\Api;

use RedcartClient\Api\Redcart;

class RedcartTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function shouldReturnModuleByModuleName()
    {
        $moduleMock = $this->getMockBuilder('\\RedcartClient\\Modules\\BaseModule')
            ->disableOriginalConstructor()
            ->getMock();

        $moduleMock->expects($this->any())
            ->method('getModuleName')
            ->will($this->returnValue('unitTests'));

        $redcart = new Redcart(array($moduleMock));

        $this->assertSame($moduleMock, $redcart->getModule('unitTests'));
    }


    /**
     * @test
     */
    public function shouldThrowExceptionWhileGetNonExistentModule()
    {
        $redcart = new Redcart(array());

        $this->setExpectedException('RuntimeException');
        $redcart->getModule('nonExistentModule');
    }

}
