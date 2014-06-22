<?php

namespace RedcartClient\Tests\Mapper;

use RedcartClient\Mapper\RawToResourceMapper;
use RedcartClient\Resources\Products\Product;

class RawToResourceMapperTest extends \PHPUnit_Framework_TestCase {

    /**
     * @tests
     */
    public function shouldReturnNullIfPassedNotArrayData()
    {
        $mapper = new RawToResourceMapper();
        $this->assertNull($mapper->map('someString', ''));
    }

    /**
     * @tests
     */
    public function shouldReturnSingleInstanceOfResourceForAssociatedArray()
    {
        $mapper  = new RawToResourceMapper();
        $productClass = '\\RedcartClient\\Resources\\Products\\Product';

        /** @var Product $product */
        $product = $mapper->map(
            array(
                'products_id'   => 123,
                'status_id_18'  => 1,
                'products_name' => 'Sample name'
            ),
            $productClass
        );


        $this->assertInstanceOf($productClass, $product);
        $this->assertSame(123, $product->getProductsId());
        $this->assertSame(1, $product->getStatusId18());
        $this->assertSame('Sample name', $product->getProductsName());
    }

    /**
     * @tests
     */
    public function shouldClearDirtyDataForPreparedInstance()
    {
        $mapper  = new RawToResourceMapper();

        /** @var Product $product */
        $product = $mapper->map(
            array(
                'products_id'   => 123,
                'products_name' => 'Sample name'
            ),
            '\\RedcartClient\\Resources\\Products\\Product'
        );

        $this->assertEquals(array(), $product->getDirtyValues());
    }

    /**
     * @tests
     */
    public function shouldReturnCollectionOfInstanceOfResourceForNonAssociatedArray()
    {
        $mapper  = new RawToResourceMapper();
        $productClass = '\\RedcartClient\\Resources\\Products\\Product';

        /** @var Product[] $product */
        $products = $mapper->map(
            array(
                array(
                    'products_id'   => 123,
                    'products_name' => 'Sample name'
                ),
                array(
                    'products_id'   => 124,
                    'products_name' => 'Another sample name'
                )
            ),
            $productClass
        );


        $this->assertCount(2, $products);

        /** @var Product $firstProduct */
        $firstProduct = $products[0];
        $this->assertInstanceOf($productClass, $firstProduct);
        $this->assertSame(123, $firstProduct->getProductsId());
        $this->assertSame('Sample name', $firstProduct->getProductsName());

        /** @var Product $secondProduct */
        $secondProduct = $products[1];
        $this->assertInstanceOf($productClass, $secondProduct);
        $this->assertSame(124, $secondProduct->getProductsId());
        $this->assertEquals('Another sample name', $secondProduct->getProductsName());
    }

    /**
     * @tests
     */
    public function shouldThrowRuntimeExceptionIfDataContainsNotDefinedFields()
    {
        $mapper  = new RawToResourceMapper();
        $productClass = '\\RedcartClient\\Resources\\Products\\Product';

        $this->setExpectedException('RuntimeException');

        /** @var Product $product */
        $mapper->map(
            array(
                'products_id'       => 123,
                'not_defined_field' => 'some value'
            ),
            $productClass
        );
    }

}
