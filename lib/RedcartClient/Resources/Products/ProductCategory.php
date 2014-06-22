<?php

namespace RedcartClient\Resources\Products;

use RedcartClient\Resources\Resource;

class ProductCategory extends Resource {

    /**
     * @var int
     */
    private $productsId;

    /**
     * @var int
     */
    private $categoriesId;

    /**
     * @param int $categoriesId
     */
    public function setCategoriesId($categoriesId)
    {
        $this->updateState();
        $this->categoriesId = $categoriesId;
    }

    /**
     * @return int
     */
    public function getCategoriesId()
    {
        return $this->categoriesId;
    }

    /**
     * @param int $productsId
     */
    public function setProductsId($productsId)
    {
        $this->updateState();
        $this->productsId = $productsId;
    }

    /**
     * @return int
     */
    public function getProductsId()
    {
        return $this->productsId;
    }
}