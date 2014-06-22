<?php

namespace RedcartClient\Resources\Products;

use RedcartClient\Resources\Resource;

class Product extends Resource {

    /**
     * @var string
     */
    private $productsId;

    /**
     * @var string
     */
    private $productsName;

    /**
     * @var string
     */
    private $productsDescriptionShort;

    /**
     * @var string
     */
    private $productsDescription;

    /**
     * @var float
     */
    private $productsPrice;

    /**
     * @var float
     */
    private $productsPriceBrutto;

    /**
     * @var float
     */
    private $promotionsPrice;

    /**
     * @var float
     */
    private $promotionsPriceBrutto;

    /**
     * @var string
     */
    private $promotionsDateFrom;

    /**
     * @var string
     */
    private $promotionsDateTo;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var float
     */
    private $buyPrice;

    /**
     * @var float
     */
    private $buyPriceBrutto;

    /**
     * @var float
     */
    private $suggestPrice;

    /**
     * @var int
     */
    private $producerId;

    /**
     * @var int
     */
    private $delivererId;

    /**
     * @var string
     */
    private $productsModel;

    /**
     * @var string
     */
    private $productsSymbol;

    /**
     * @var string
     */
    private $ean;

    /**
     * @var string
     */
    private $delivererCode;

    /**
     * @var int
     */
    private $statusId_18;

    /**
     * @var int
     */
    private $productsStatus;

    /**
     * @var string
     */
    private $metaTitle;

    /**
     * @var string
     */
    private $metaDesc;

    /**
     * @var string
     */
    private $metaKeywords;

    /**
     * @var float
     */
    private $taxValue;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var string
     */
    private $fkSymbol;

    /**
     * @var int
     */
    private $warranty;

    /**
     * @var float
     */
    private $warrantyValue;

    /**
     * @var int
     */
    private $productsTime;

    /**
     * @var int
     */
    private $productsTimeType;

    /**
     * @var string
     */
    private $producersCode;

    /**
     * @var string
     */
    private $dateEdit;

    /**
     * @var int
     */
    private $taxId;

    /**
     * @var int
     */
    private $promotionsType;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var int
     */
    private $quantityAll;

    /**
     * @var int
     */
    private $inventory;

    /**
     * @return mixed
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * @return mixed
     */
    public function getBuyPriceBrutto()
    {
        return $this->buyPriceBrutto;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return mixed
     */
    public function getDateEdit()
    {
        return $this->dateEdit;
    }

    /**
     * @return mixed
     */
    public function getDelivererCode()
    {
        return $this->delivererCode;
    }

    /**
     * @return mixed
     */
    public function getDelivererId()
    {
        return $this->delivererId;
    }

    /**
     * @return mixed
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @return mixed
     */
    public function getFkSymbol()
    {
        return $this->fkSymbol;
    }

    /**
     * @return mixed
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * @return mixed
     */
    public function getMetaDesc()
    {
        return $this->metaDesc;
    }

    /**
     * @return mixed
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @return mixed
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @return mixed
     */
    public function getProducerId()
    {
        return $this->producerId;
    }

    /**
     * @return mixed
     */
    public function getProducersCode()
    {
        return $this->producersCode;
    }

    /**
     * @return string
     */
    public function getProductsDescription()
    {
        return $this->productsDescription;
    }

    /**
     * @return string
     */
    public function getProductsDescriptionShort()
    {
        return $this->productsDescriptionShort;
    }

    /**
     * @return string
     */
    public function getProductsId()
    {
        return $this->productsId;
    }

    /**
     * @return mixed
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
     * @return mixed
     */
    public function getProductsPrice()
    {
        return $this->productsPrice;
    }

    /**
     * @return mixed
     */
    public function getProductsPriceBrutto()
    {
        return $this->productsPriceBrutto;
    }

    /**
     * @return mixed
     */
    public function getProductsStatus()
    {
        return $this->productsStatus;
    }

    /**
     * @return mixed
     */
    public function getProductsSymbol()
    {
        return $this->productsSymbol;
    }

    /**
     * @return mixed
     */
    public function getProductsTime()
    {
        return $this->productsTime;
    }

    /**
     * @return mixed
     */
    public function getProductsTimeType()
    {
        return $this->productsTimeType;
    }

    /**
     * @return mixed
     */
    public function getPromotionsDateFrom()
    {
        return $this->promotionsDateFrom;
    }

    /**
     * @return mixed
     */
    public function getPromotionsDateTo()
    {
        return $this->promotionsDateTo;
    }

    /**
     * @return mixed
     */
    public function getPromotionsPrice()
    {
        return $this->promotionsPrice;
    }

    /**
     * @return mixed
     */
    public function getPromotionsPriceBrutto()
    {
        return $this->promotionsPriceBrutto;
    }

    /**
     * @return mixed
     */
    public function getPromotionsType()
    {
        return $this->promotionsType;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return mixed
     */
    public function getQuantityAll()
    {
        return $this->quantityAll;
    }

    /**
     * @return mixed
     */
    public function getStatusId18()
    {
        return $this->statusId_18;
    }

    /**
     * @return mixed
     */
    public function getSuggestPrice()
    {
        return $this->suggestPrice;
    }

    /**
     * @return mixed
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * @return mixed
     */
    public function getTaxValue()
    {
        return $this->taxValue;
    }

    /**
     * @return mixed
     */
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * @return mixed
     */
    public function getWarrantyValue()
    {
        return $this->warrantyValue;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $buyPrice
     */
    public function setBuyPrice($buyPrice)
    {
        $this->updateState();
        $this->buyPrice = $buyPrice;
    }

    /**
     * @param float $buyPriceBrutto
     */
    public function setBuyPriceBrutto($buyPriceBrutto)
    {
        $this->updateState();
        $this->buyPriceBrutto = $buyPriceBrutto;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->updateState();
        $this->currency = $currency;
    }

    /**
     * @param string $delivererCode
     */
    public function setDelivererCode($delivererCode)
    {
        $this->updateState();
        $this->delivererCode = $delivererCode;
    }

    /**
     * @param int $delivererId
     */
    public function setDelivererId($delivererId)
    {
        $this->updateState();
        $this->delivererId = $delivererId;
    }

    /**
     * @param mixed $dirtyColumns
     */
    public function setDirtyColumns($dirtyColumns)
    {
        $this->updateState();
        $this->dirtyColumns = $dirtyColumns;
    }

    /**
     * @param string $ean
     */
    public function setEan($ean)
    {
        $this->updateState();
        $this->ean = $ean;
    }

    /**
     * @param string $fkSymbol
     */
    public function setFkSymbol($fkSymbol)
    {
        $this->updateState();
        $this->fkSymbol = $fkSymbol;
    }

    /**
     * @param int $inventory
     */
    public function setInventory($inventory)
    {
        $this->inventory = $inventory;
    }

    /**
     * @param string $metaDesc
     */
    public function setMetaDesc($metaDesc)
    {
        $this->updateState();
        $this->metaDesc = $metaDesc;
    }

    /**
     * @param string $metaKeywords
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->updateState();
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * @param string $metaTitle
     */
    public function setMetaTitle($metaTitle)
    {
        $this->updateState();
        $this->metaTitle = $metaTitle;
    }

    /**
     * @param int $producerId
     */
    public function setProducerId($producerId)
    {
        $this->updateState();
        $this->producerId = $producerId;
    }

    /**
     * @param string $producersCode
     */
    public function setProducersCode($producersCode)
    {
        $this->updateState();
        $this->producersCode = $producersCode;
    }

    /**
     * @param string $productsDescription
     */
    public function setProductsDescription($productsDescription)
    {
        $this->updateState();
        $this->productsDescription = $productsDescription;
    }

    /**
     * @param string $productsDescriptionShort
     */
    public function setProductsDescriptionShort($productsDescriptionShort)
    {
        $this->updateState();
        $this->productsDescriptionShort = $productsDescriptionShort;
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
     * @param float $productsPriceBrutto
     */
    public function setProductsPriceBrutto($productsPriceBrutto)
    {
        $this->updateState();
        $this->productsPriceBrutto = $productsPriceBrutto;
    }

    /**
     * @param int $productsStatus
     */
    public function setProductsStatus($productsStatus)
    {
        $this->updateState();
        $this->productsStatus = $productsStatus;
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
     * @param int $productsTime
     */
    public function setProductsTime($productsTime)
    {
        $this->updateState();
        $this->productsTime = $productsTime;
    }

    /**
     * @param int $productsTimeType
     */
    public function setProductsTimeType($productsTimeType)
    {
        $this->updateState();
        $this->productsTimeType = $productsTimeType;
    }

    /**
     * @param string $promotionsDateFrom
     */
    public function setPromotionsDateFrom($promotionsDateFrom)
    {
        $this->updateState();
        $this->promotionsDateFrom = $promotionsDateFrom;
    }

    /**
     * @param string $promotionsDateTo
     */
    public function setPromotionsDateTo($promotionsDateTo)
    {
        $this->updateState();
        $this->promotionsDateTo = $promotionsDateTo;
    }

    /**
     * @param float $promotionsPrice
     */
    public function setPromotionsPrice($promotionsPrice)
    {
        $this->updateState();
        $this->promotionsPrice = $promotionsPrice;
    }

    /**
     * @param float $promotionsPriceBrutto
     */
    public function setPromotionsPriceBrutto($promotionsPriceBrutto)
    {
        $this->updateState();
        $this->promotionsPriceBrutto = $promotionsPriceBrutto;
    }

    /**
     * @param int $promotionsType
     */
    public function setPromotionsType($promotionsType)
    {
        $this->updateState();
        $this->promotionsType = $promotionsType;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->updateState();
        $this->quantity = $quantity;
    }

    /**
     * @param int $quantityAll
     */
    public function setQuantityAll($quantityAll)
    {
        $this->updateState();
        $this->quantityAll = $quantityAll;
    }

    /**
     * @param int $statusId_18
     */
    public function setStatusId18($statusId_18)
    {
        $this->updateState();
        $this->statusId_18 = $statusId_18;
    }

    /**
     * @param float $suggestPrice
     */
    public function setSuggestPrice($suggestPrice)
    {
        $this->updateState();
        $this->suggestPrice = $suggestPrice;
    }

    /**
     * @param int $taxId
     */
    public function setTaxId($taxId)
    {
        $this->updateState();
        $this->taxId = $taxId;
    }

    /**
     * @param float $taxValue
     */
    public function setTaxValue($taxValue)
    {
        $this->updateState();
        $this->taxValue = $taxValue;
    }

    /**
     * @param int $warranty
     */
    public function setWarranty($warranty)
    {
        $this->updateState();
        $this->warranty = $warranty;
    }

    /**
     * @param float $warrantyValue
     */
    public function setWarrantyValue($warrantyValue)
    {
        $this->updateState();
        $this->warrantyValue = $warrantyValue;
    }

    /**
     * @param string $weight
     */
    public function setWeight($weight)
    {
        $this->updateState();
        $this->weight = $weight;
    }

    /**
     * @param string $dateEdit
     */
    public function setDateEdit($dateEdit)
    {
        $this->dateEdit = $dateEdit;
    }

    /**
     * @param string $productsId
     */
    public function setProductsId($productsId)
    {
        $this->productsId = $productsId;
    }

}