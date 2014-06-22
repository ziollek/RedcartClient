<?php


namespace RedcartClient\Tests\Modules\Hello;


use RedcartClient\Modules\Hello\Module;

class ModuleTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function shouldReturnHelloString()
    {
        $hello = 'Hello world!';
        $jsonResponse = array(
            'hello' => $hello
        );


        $clientMock = $this->getMockBuilder('\\RedcartClient\\Api\\Client')
            ->disableOriginalConstructor()
            ->getMock();

        $clientMock->expects($this->once())
            ->method('call')
            ->with($this->equalTo(
                    array(
                        'viewType' => 'json',
                        'module' => 'hello',
                        'method' => 'hello',
                        'parameters' => array(
                            'name' => $hello
                        )
                    )
                ))
            ->will($this->returnValue($jsonResponse));

        $module = new Module($clientMock);

        $this->assertEquals($hello, $module->hello($hello));
    }
}
