<?php


namespace RedcartClient\Tests\Resources;


use RedcartClient\Tests\Stub\SampleResource;

class ResourceTest extends \PHPUnit_Framework_TestCase {

    /**
     * @tests
     */
    public function shouldNotReturnAnyDirtyDataForBrandNewInstances()
    {
        $sampleResource = new SampleResource();
        $this->assertCount(0, $sampleResource->getDirtyValues());
    }

    /**
     * @tests
     */
    public function shouldSetDirtyStateForSetterWithUpdateState()
    {
        $sampleResource = new SampleResource();
        $sampleResource->setId(123);

        $this->assertCount(0, $sampleResource->getDirtyValues());

        $sampleResource->setName('sampleName');
        $this->assertCount(1, $sampleResource->getDirtyValues());

    }

    /**
     * @tests
     */
    public function shouldReturnDirtyDataFromLastUpdate()
    {
        $sampleResource = new SampleResource();

        $sampleResource->setName('sampleName');
        $this->assertEquals(array('name' => 'sampleName'), $sampleResource->getDirtyValues());

        $sampleResource->setName('anotherName');
        $this->assertEquals(array('name' => 'anotherName'), $sampleResource->getDirtyValues());
    }

    /**
     * @tests
     */
    public function shouldReturnEmptyDirtyDataAfterClear()
    {
        $sampleResource = new SampleResource();

        $sampleResource->setName('sampleName');
        $sampleResource->clearDirty();
        $this->assertCount(0, $sampleResource->getDirtyValues());
    }
}
