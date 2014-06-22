<?php

namespace RedcartClient\Resources\Products;

use RedcartClient\Resources\Resource;

class ProductImage extends Resource {

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $productsId;

    /**
     * base64 encoded
     * @var string
     */
    private $imageData;

    /**
     * @var string
     */
    private $imageExt;

    /**
     * @var int
     */
    private $ordering;

    /**
     * @var string
     */
    private $image;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getImageData()
    {
        return $this->imageData;
    }

    /**
     * @return string
     */
    public function getImageExt()
    {
        return $this->imageExt;
    }

    /**
     * @return int
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * @return int
     */
    public function getProductsId()
    {
        return $this->productsId;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @param string $imageData
     */
    public function setImageData($imageData)
    {
        $this->updateState();
        $this->imageData = $imageData;
    }

    /**
     * @param string $imageExt
     */
    public function setImageExt($imageExt)
    {
        $this->updateState();
        $this->imageExt = $imageExt;
    }

    /**
     * @param int $ordering
     */
    public function setOrdering($ordering)
    {
        $this->updateState();
        $this->ordering = $ordering;
    }

    /**
     * @param int $productsId
     */
    public function setProductsId($productsId)
    {
        $this->updateState();
        $this->productsId = $productsId;
    }

}