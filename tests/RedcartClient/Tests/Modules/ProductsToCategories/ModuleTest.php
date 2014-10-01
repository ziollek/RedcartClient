<?php


namespace RedcartClient\Tests\Modules\ProductsToCategories;


use RedcartClient\Modules\ProductsToCategories\Module;
use RedcartClient\Resources\Products\ProductCategory;

class ModuleTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function shouldDeleteCollectionOfProductsCategories()
    {
        $productsCategoriesCollection = array(
            $this->getProductCategoryResource(1, 10),
            $this->getProductCategoryResource(2, 10),
            $this->getProductCategoryResource(3, 11),
        );

        $clientMock = $this->getClientMock();

        $clientMock->expects($this->at(0))
            ->method('call')
            ->with($this->equalTo(
                    array(
                        'viewType' => 'json',
                        'module' => 'productsToCategories',
                        'method' => 'delete',
                        'parameters' => array(
                            'categories_id' => 10,
                            'products_id' => array(1, 2)
                        )
                    )
                ))
            ->will($this->returnValue(array('count' => 2)));

        $clientMock->expects($this->at(1))
            ->method('call')
            ->with($this->equalTo(
                    array(
                        'viewType' => 'json',
                        'module' => 'productsToCategories',
                        'method' => 'delete',
                        'parameters' => array(
                            'categories_id' => 11,
                            'products_id' => array(3)
                        )
                    )
                ))
            ->will($this->returnValue(array('count' => 1)));

        $module = new Module($clientMock);

        $this->assertEquals(3, $module->delete($productsCategoriesCollection));
    }

    /**
     * @test
     */
    public function shouldThrowExceptionOnUpdate()
    {
        $module = new Module($this->getClientMock());

        $this->setExpectedException('\InvalidArgumentException', 'Operation not permitted');
        $module->update(array());
    }

    /**
     * @param int $productId
     * @param int $categoryId
     *
     * @return ProductCategory
     */
    public function getProductCategoryResource($productId, $categoryId)
    {
        $productCategory = new ProductCategory();
        $productCategory->setProductsId($productId);
        $productCategory->setCategoriesId($categoryId);
        return $productCategory;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function getClientMock()
    {
        return $this->getMockBuilder('\\RedcartClient\\Api\\Client')
            ->disableOriginalConstructor()
            ->getMock();
    }


}
