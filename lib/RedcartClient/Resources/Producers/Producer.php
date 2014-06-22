<?php

namespace RedcartClient\Resources\Producers;

use RedcartClient\Resources\Resource;

class Producer extends Resource {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $prName;

    /**
     * @var string
     */
    private $prLogo;

    /**
     * @var string
     */
    private $prHref;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $title;

    /**
     * base64 encoded image
     * @var string
     */
    private $imageData;

    /**
     * @var string
     */
    private $imageExt;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

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
    public function getPrHref()
    {
        return $this->prHref;
    }

    /**
     * @return string
     */
    public function getPrName()
    {
        return $this->prName;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->updateState();
        $this->description = $description;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $prHref
     */
    public function setPrHref($prHref)
    {
        $this->updateState();
        $this->prHref = $prHref;
    }

    /**
     * @param string $prName
     */
    public function setPrName($prName)
    {
        $this->updateState();
        $this->prName = $prName;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->updateState();
        $this->title = $title;
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
     * @return string
     */
    public function getPrLogo()
    {
        return $this->prLogo;
    }

    /**
     * @param string $prLogo
     */
    public function setPrLogo($prLogo)
    {
        $this->prLogo = $prLogo;
    }

}