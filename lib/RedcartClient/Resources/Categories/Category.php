<?php

namespace RedcartClient\Resources\Categories;

use RedcartClient\Resources\Resource;

class Category extends Resource {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $ordering;

    /**
     * @var string
     */
    private $info;

    /**
     * @var string
     */
    private $treepath;

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
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * @return string
     */
    public function getTreepath()
    {
        return $this->treepath;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $info
     */
    public function setInfo($info)
    {
        $this->updateState();
        $this->info = $info;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->updateState();
        $this->name = $name;
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
     * @param string $treepath
     */
    public function setTreepath($treepath)
    {
        $this->treepath = $treepath;
    }


}