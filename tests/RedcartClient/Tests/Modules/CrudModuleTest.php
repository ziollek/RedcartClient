<?php

namespace RedcartClient\Tests\Modules;

use RedcartClient\Api\Client;
use RedcartClient\Mapper\RawToResourceMapper;
use RedcartClient\Tests\Stub\SampleResource;

class CrudModuleTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return array
     */
    public function possibleDeleteInputVariants()
    {
        $firstResource = $this->getSampleResource(1, 'item');
        $secondResource = $this->getSampleResource(2, 'item');
        return array(
            array(array($firstResource, $secondResource), array(1, 2), 2),
            array($firstResource, array(1), 1),
            array(array(1, 2), array(1, 2), 2),
            array(5, array(5), 1)
        );
    }

    /**
     * @return array
     */
    public function possibleAddInputVariants()
    {
        //resource cleared shouldn't be added
        $emptyResource = $this->getSampleResource(3, 'item');

        $firstResourceAdded = $this->getSampleResource(666, 'item');
        $secondResourceAdded = $this->getSampleResource(777, 'item');
        return array(
            array(
                $this->getSampleResource(1, 'item', false),
                array(666),
                array(array('name' => 'item')),
                $firstResourceAdded
            ),
            array(
                array($this->getSampleResource(1, 'item', false), $this->getSampleResource(2, 'item', false), $emptyResource),
                array(666, 777),
                array(array('name' => 'item'), array('name' => 'item')),
                array($firstResourceAdded, $secondResourceAdded)
            )
        );
    }

    /**
     * @return array
     */
    public function possibleUpdateInputVariants()
    {
        //resource cleared shouldn't be added
        $emptyResource = $this->getSampleResource(3, 'item');

        $firstResourceAdded = $this->getSampleResource(666, 'item');
        $secondResourceAdded = $this->getSampleResource(777, 'item');
        return array(
            array(
                $this->getSampleResource(666, 'item', false),
                array(array('name' => 'item', 'id' => 666)),
                $firstResourceAdded
            ),
            array(
                array($this->getSampleResource(666, 'item', false), $this->getSampleResource(777, 'item', false), $emptyResource),
                array(array('name' => 'item', 'id' => 666) , array('name' => 'item', 'id' => 777)),
                array($firstResourceAdded, $secondResourceAdded)
            )
        );
    }

    /**
     * @test
     */
    public function shouldReturnCountOfResourcesInModule()
    {
        $expectedCount = 10;

        $clientMock = $this->getClientMock();
        $clientMock->expects($this->once())
            ->method('call')
            ->will($this->returnValue(array('count' => $expectedCount)));

        $module = new \RedcartClient\Tests\Stub\Sample\Crud\Module($clientMock);

        $this->assertSame($expectedCount, $module->count());
    }

    /**
     * @test
     */
    public function shouldReturnMappedResourcesByIds()
    {
        $jsonResponse = array(
            array(
                'id'   => 1,
                'name' => 'first item'
            ),
            array(
                'id'   => 2,
                'name' => 'second item'
            )
        );

        $ids = array(1,2);

        $expectedCollection = array(
            $this->getSampleResource(1, 'first item'),
            $this->getSampleResource(2, 'second item')
        );

        $clientMock = $this->getClientMock();
        $clientMock->expects($this->once())
            ->method('call')
            ->with($this->equalTo(
                    array(
                        'viewType' => 'json',
                        'module' => 'crud',
                        'method' => 'selectIds',
                        'parameters' => array(
                            'crud_id' => $ids
                        )
                    )
                ))
            ->will($this->returnValue(array('crud' => $jsonResponse)));

        $module = new \RedcartClient\Tests\Stub\Sample\Crud\Module($clientMock);
        $module->setRawToResourceMapper(new RawToResourceMapper());

        $this->assertEquals($expectedCollection, $module->selectByIds($ids));
    }

    /**
     * @test
     */
    public function shouldReturnPagedMappedResourcesFilters()
    {
        $jsonResponse = array(
            array(
                'id'   => 1,
                'name' => 'item'
            ),
            array(
                'id'   => 2,
                'name' => 'item'
            )
        );

        $expectedCollection = array(
            $this->getSampleResource(1, 'item'),
            $this->getSampleResource(2, 'item')
        );

        $clientMock = $this->getClientMock();
        $clientMock->expects($this->once())
            ->method('call')
            ->with($this->equalTo(
                    array(
                        'viewType' => 'json',
                        'module' => 'crud',
                        'method' => 'select',
                        'parameters' => array(
                            'name' => 'item'
                        ),
                        'options'=> array(
                            'offset' => 0,
                            'limit'  => 10
                        )
                    )
                ))
            ->will($this->returnValue(array('crud' => $jsonResponse)));

        $module = new \RedcartClient\Tests\Stub\Sample\Crud\Module($clientMock);
        $module->setRawToResourceMapper(new RawToResourceMapper());

        $this->assertEquals($expectedCollection, $module->select(array('name' => 'item'), 0, 10));
    }

    /**
     * @param mixed $input
     * @param array $resultIds
     * @param array $expectedCallData
     * @param array $expectedOutput
     *
     * @test
     * @dataProvider possibleAddInputVariants
     */
    public function shouldAddResources($input, $resultIds, $expectedCallData, $expectedOutput)
    {
        $options = array('test_option' => 1);
        $clientMock = $this->getClientMock();
        $clientMock->expects($this->once())
            ->method('call')
            ->with($this->equalTo(
                    array(
                        'viewType'   => 'json',
                        'module'     => 'crud',
                        'method'     => 'add',
                        'parameters' => $expectedCallData,
                        'options'    => $options
                    )
                ))
            ->will($this->returnValue(array('id' => $resultIds)));

        $module = new \RedcartClient\Tests\Stub\Sample\Crud\Module($clientMock);

        $this->assertEquals($expectedOutput, $module->add($input, $options));
    }

    /**
     * @param mixed $input
     * @param array $expectedCallData
     * @param array $expectedOutput
     *
     * @test
     * @dataProvider possibleUpdateInputVariants
     */
    public function shouldUpdateResources($input, $expectedCallData, $expectedOutput)
    {
        $options = array('test_option' => 1);
        $clientMock = $this->getClientMock();
        $clientMock->expects($this->once())
            ->method('call')
            ->with($this->equalTo(
                    array(
                        'viewType'   => 'json',
                        'module'     => 'crud',
                        'method'     => 'update',
                        'parameters' => $expectedCallData,
                        'options'    => $options
                    )
                ));

        $module = new \RedcartClient\Tests\Stub\Sample\Crud\Module($clientMock);

        $this->assertEquals($expectedOutput, $module->update($input, $options));

    }

    /**
     *
     * @param mixed $input
     * @param array $crudIds
     * @param int   $count
     *
     * @test
     * @dataProvider possibleDeleteInputVariants
     */
    public function shouldDeleteResources($input, $crudIds, $count)
    {
        $clientMock = $this->getClientMock();
        $clientMock->expects($this->once())
            ->method('call')
            ->with($this->equalTo(
                    array(
                        'viewType' => 'json',
                        'module' => 'crud',
                        'method' => 'delete',
                        'parameters' => array(
                            'crud_id' => $crudIds
                        )
                    )
                ))
            ->will($this->returnValue(array('count' => $count)));

        $module = new \RedcartClient\Tests\Stub\Sample\Crud\Module($clientMock);

        $this->assertEquals($count, $module->delete($input));
    }

    /**
     * @test
     */
    public function shouldThrowExceptionIfMapperIsNeededButNotSet()
    {
        $jsonResponse = array(
            array(
                'id'   => 1,
                'name' => 'first item'
            )
        );

        $clientMock = $this->getClientMock();
        $clientMock->expects($this->once())
            ->method('call')
            ->will($this->returnValue(array('crud' => $jsonResponse)));

        $module = new \RedcartClient\Tests\Stub\Sample\Crud\Module($clientMock);

        $this->setExpectedException('RuntimeException');
        $module->selectByIds(array(1, 2));
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|Client
     */
    public function getClientMock()
    {
        return $this->getMockBuilder('\\RedcartClient\\Api\\Client')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @param int    $id
     * @param string $name
     *
     * @return SampleResource
     */
    private function getSampleResource($id, $name, $clear = true)
    {
        $sampleResource = new SampleResource();
        $sampleResource->setId($id);
        $sampleResource->setName($name);

        if ($clear) {
            $sampleResource->clearDirty();
        }

        return $sampleResource;
    }
}
