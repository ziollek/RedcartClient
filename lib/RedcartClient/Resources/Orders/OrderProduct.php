<?php

namespace RedcartClient\Resources\Orders;

use RedcartClient\Resources\Resource;

class OrderProduct extends Resource {

    /**
     * @var int
     */
    private $productsId;

    /**
     * @var int
     */
    private $ordersId;

    /**
     * @var string
     */
    private $productsName;

    /**
     * @var string
     */
    private $productsModel;

    /**
     * @var float
     */
    private $productsPrice;

    /**
     * @var float
     */
    private $discount;

    /**
     * @var float
     */
    private $profit;

    /**
     * @var float
     */
    private $productsTax;

    /**
     * @var int
     */
    private $productsItems;

    /**
     * @var string
     */
    private $productsSymbol;

    /**
     * @var int
     */
    private $confirmStatus;

    /**
     * @var float
     */
    private $basePrice;

    /**
     * @var string
     */
    private $options;

    /**
     * @return float
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * @return int
     */
    public function getConfirmStatus()
    {
        return $this->confirmStatus;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @return int
     */
    public function getOrdersId()
    {
        return $this->ordersId;
    }

    /**
     * @return int
     */
    public function getProductsId()
    {
        return $this->productsId;
    }

    /**
     * @return int
     */
    public function getProductsItems()
    {
        return $this->productsItems;
    }

    /**
     * @return string
     */
    public function getProductsModel()
    {
        return $this->productsModel;
    }

    /**
     * @return string
     */
    public function getProductsName()
    {
        return $this->productsName;
    }

    /**
     * @return float
     */
    public function getProductsPrice()
    {
        return $this->productsPrice;
    }

    /**
     * @return string
     */
    public function getProductsSymbol()
    {
        return $this->productsSymbol;
    }

    /**
     * @return float
     */
    public function getProductsTax()
    {
        return $this->productsTax;
    }

    /**
     * @return float
     */
    public function getProfit()
    {
        return $this->profit;
    }

    /**
     * @return string
     */
    public function getOptions()
    {
        return $this->options;
    }


    /**
     * @param float $basePrice
     */
    public function setBasePrice($basePrice)
    {
        $this->updateState();
        $this->basePrice = $basePrice;
    }

    /**
     * @param int $confirmStatus
     */
    public function setConfirmStatus($confirmStatus)
    {
        $this->updateState();
        $this->confirmStatus = $confirmStatus;
    }

    /**
     * @param float $discount
     */
    public function setDiscount($discount)
    {
        $this->updateState();
        $this->discount = $discount;
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
     * @param int $productsItems
     */
    public function setProductsItems($productsItems)
    {
        $this->updateState();
        $this->productsItems = $productsItems;
    }

    /**
     * @param string $productsModel
     */
    public function setProductsModel($productsModel)
    {
        $this->updateState();
        $this->productsModel = $productsModel;
    }

    /**
     * @param string $productsName
     */
    public function setProductsName($productsName)
    {
        $this->updateState();
        $this->productsName = $productsName;
    }

    /**
     * @param float $productsPrice
     */
    public function setProductsPrice($productsPrice)
    {
        $this->updateState();
        $this->productsPrice = $productsPrice;
    }

    /**
     * @param string $productsSymbol
     */
    public function setProductsSymbol($productsSymbol)
    {
        $this->updateState();
        $this->productsSymbol = $productsSymbol;
    }

    /**
     * @param float $productsTax
     */
    public function setProductsTax($productsTax)
    {
        $this->updateState();
        $this->productsTax = $productsTax;
    }

    /**
     * @param float $profit
     */
    public function setProfit($profit)
    {
        $this->updateState();
        $this->profit = $profit;
    }

    /**
     * @param int $ordersId
     */
    public function setOrdersId($ordersId)
    {
        $this->updateState();
        $this->ordersId = $ordersId;
    }

    /**
     * @param string $options
     */
    public function setOptions($options)
    {
        $this->updateState();
        $this->options = $options;
    }



}