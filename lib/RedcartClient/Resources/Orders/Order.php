<?php

namespace RedcartClient\Resources\Orders;

use RedcartClient\Resources\Resource;

class Order extends Resource {

    /**
     * @var int
     */
    private $ordersId;

    /**
     * @var int
     */
    private $customersId;

    /**
     * @var float
     */
    private $ordersSubtotal;

    /**
     * @var float
     */
    private $ordersTotal;

    /**
     * @var float
     */
    private $ordersDiscountValue;

    /**
     * @var float
     */
    private $ordersDiscountPercent;

    /**
     * @var string
     */
    private $customersFirstName;

    /**
     * @var string
     */
    private $customersLastName;

    /**
     * @var string
     */
    private $customersCountries;

    /**
     * @var string
     */
    private $customersZipCode;

    /**
     * @var string
     */
    private $customersCity;

    /**
     * @var string
     */
    private $customersStreet;

    /**
     * @var string
     */
    private $customersHome;

    /**
     * @var string
     */
    private $customersPhone;

    /**
     * @var int
     */
    private $customersGg;

    /**
     * @var string
     */
    private $customersMail;

    /**
     * @var string
     */
    private $customersFirms;

    /**
     * @var string
     */
    private $iCustomersFirms;

    /**
     * @var string
     */
    private $iCustomersNip;

    /**
     * @var string
     */
    private $iCustomersCity;

    /**
     * @var string
     */
    private $iCustomersZipCode;

    /**
     * @var string
     */
    private $iCustomersStreet;

    /**
     * @var string
     */
    private $iCustomersHome;

    /**
     * @var float
     */
    private $ordersTaxValue;


    /**
     * @var string
     */
    private $ordersDate;

    /**
     * @var string
     */
    private $cartAddInfo;

    /**
     * @var string
     */
    private $shippingName;

    /**
     * @var float
     */
    private $shippingValue;

    /**
     * @var string
     */
    private $paymentName;

    /**
     * @var string
     */
    private $currencyName;

    /**
     * @var string
     */
    private $bankAccount;

    /**
     * @var int
     */
    private $ordersStatusId;

    /**
     * @var string
     */
    private $ordersStatusDate;

    /**
     * @var int
     */
    private $confirm;

    /**
     * @var string
     */
    private $confirmDate;

    /**
     * @var string
     */
    private $couriers;

    /**
     * @var string
     */
    private $couriersNr;

    /**
     * @var string
     */
    private $blacklist;

    /**
     * @var string
     */
    private $langCode;

    /**
     * @var string
     */
    private $paymentId;

    /**
     * @var string
     */
    private $shippingId;

    /**
     * @var string
     */
    private $aid;

    /**
     * @var float
     */
    private $paymentsAdd;


    /**
     * @return string
     */
    public function getCustomersZipCode()
    {
        return $this->customersZipCode;
    }

    /**
     * @return string
     */
    public function getCustomersStreet()
    {
        return $this->customersStreet;
    }

    /**
     * @return string
     */
    public function getCustomersPhone()
    {
        return $this->customersPhone;
    }

    /**
     * @return string
     */
    public function getCustomersMail()
    {
        return $this->customersMail;
    }

    /**
     * @return string
     */
    public function getCustomersLastName()
    {
        return $this->customersLastName;
    }

    /**
     * @return int
     */
    public function getCustomersId()
    {
        return $this->customersId;
    }

    /**
     * @return string
     */
    public function getCustomersHome()
    {
        return $this->customersHome;
    }

    /**
     * @return int
     */
    public function getCustomersGg()
    {
        return $this->customersGg;
    }

    /**
     * @return string
     */
    public function getCustomersFirstName()
    {
        return $this->customersFirstName;
    }

    /**
     * @return string
     */
    public function getCustomersFirms()
    {
        return $this->customersFirms;
    }

    /**
     * @return string
     */
    public function getCustomersCountries()
    {
        return $this->customersCountries;
    }

    /**
     * @return string
     */
    public function getCustomersCity()
    {
        return $this->customersCity;
    }

    /**
     * @return string
     */
    public function getICustomersCity()
    {
        return $this->iCustomersCity;
    }

    /**
     * @return string
     */
    public function getICustomersFirms()
    {
        return $this->iCustomersFirms;
    }

    /**
     * @return string
     */
    public function getICustomersHome()
    {
        return $this->iCustomersHome;
    }

    /**
     * @return float
     */
    public function getOrdersTotal()
    {
        return $this->ordersTotal;
    }

    /**
     * @return float
     */
    public function getOrdersSubtotal()
    {
        return $this->ordersSubtotal;
    }

    /**
     * @return int
     */
    public function getOrdersId()
    {
        return $this->ordersId;
    }

    /**
     * @return float
     */
    public function getOrdersDiscountValue()
    {
        return $this->ordersDiscountValue;
    }

    /**
     * @return float
     */
    public function getOrdersDiscountPercent()
    {
        return $this->ordersDiscountPercent;
    }

    /**
     * @return string
     */
    public function getICustomersZipCode()
    {
        return $this->iCustomersZipCode;
    }

    /**
     * @return string
     */
    public function getICustomersStreet()
    {
        return $this->iCustomersStreet;
    }

    /**
     * @return string
     */
    public function getICustomersNip()
    {
        return $this->iCustomersNip;
    }

    /**
     * @param string $customersCity
     */
    public function setCustomersCity($customersCity)
    {
        $this->updateState();
        $this->customersCity = $customersCity;
    }

    /**
     * @param string $customersCountries
     */
    public function setCustomersCountries($customersCountries)
    {
        $this->updateState();
        $this->customersCountries = $customersCountries;
    }

    /**
     * @param string $customersFirms
     */
    public function setCustomersFirms($customersFirms)
    {
        $this->updateState();
        $this->customersFirms = $customersFirms;
    }

    /**
     * @param string $customersFirstName
     */
    public function setCustomersFirstName($customersFirstName)
    {
        $this->updateState();
        $this->customersFirstName = $customersFirstName;
    }

    /**
     * @param int $customersGg
     */
    public function setCustomersGg($customersGg)
    {
        $this->updateState();
        $this->customersGg = $customersGg;
    }

    /**
     * @param string $customersHome
     */
    public function setCustomersHome($customersHome)
    {
        $this->updateState();
        $this->customersHome = $customersHome;
    }

    /**
     * @param int $customersId
     */
    public function setCustomersId($customersId)
    {
        $this->updateState();
        $this->customersId = $customersId;
    }

    /**
     * @param string $customersLastName
     */
    public function setCustomersLastName($customersLastName)
    {
        $this->updateState();
        $this->customersLastName = $customersLastName;
    }

    /**
     * @param string $customersMail
     */
    public function setCustomersMail($customersMail)
    {
        $this->updateState();
        $this->customersMail = $customersMail;
    }

    /**
     * @param string $customersPhone
     */
    public function setCustomersPhone($customersPhone)
    {
        $this->updateState();
        $this->customersPhone = $customersPhone;
    }

    /**
     * @param string $customersStreet
     */
    public function setCustomersStreet($customersStreet)
    {
        $this->updateState();
        $this->customersStreet = $customersStreet;
    }

    /**
     * @param string $customersZipCode
     */
    public function setCustomersZipCode($customersZipCode)
    {
        $this->updateState();
        $this->customersZipCode = $customersZipCode;
    }

    /**
     * @param string $iCustomersCity
     */
    public function setICustomersCity($iCustomersCity)
    {
        $this->updateState();
        $this->iCustomersCity = $iCustomersCity;
    }

    /**
     * @param string $iCustomersFirms
     */
    public function setICustomersFirms($iCustomersFirms)
    {
        $this->updateState();
        $this->iCustomersFirms = $iCustomersFirms;
    }

    /**
     * @param string $iCustomersHome
     */
    public function setICustomersHome($iCustomersHome)
    {
        $this->updateState();
        $this->iCustomersHome = $iCustomersHome;
    }

    /**
     * @param string $iCustomersNip
     */
    public function setICustomersNip($iCustomersNip)
    {
        $this->updateState();
        $this->iCustomersNip = $iCustomersNip;
    }

    /**
     * @param string $iCustomersStreet
     */
    public function setICustomersStreet($iCustomersStreet)
    {
        $this->updateState();
        $this->iCustomersStreet = $iCustomersStreet;
    }

    /**
     * @param string $iCustomersZipCode
     */
    public function setICustomersZipCode($iCustomersZipCode)
    {
        $this->updateState();
        $this->iCustomersZipCode = $iCustomersZipCode;
    }

    /**
     * @param float $ordersDiscountPercent
     */
    public function setOrdersDiscountPercent($ordersDiscountPercent)
    {
        $this->updateState();
        $this->ordersDiscountPercent = $ordersDiscountPercent;
    }

    /**
     * @param float $ordersDiscountValue
     */
    public function setOrdersDiscountValue($ordersDiscountValue)
    {
        $this->updateState();
        $this->ordersDiscountValue = $ordersDiscountValue;
    }

    /**
     * @param float $ordersSubtotal
     */
    public function setOrdersSubtotal($ordersSubtotal)
    {
        $this->updateState();
        $this->ordersSubtotal = $ordersSubtotal;
    }

    /**
     * @param float $ordersTotal
     */
    public function setOrdersTotal($ordersTotal)
    {
        $this->updateState();
        $this->ordersTotal = $ordersTotal;
    }

    /**
     * @param int $ordersId
     */
    public function setOrdersId($ordersId)
    {
        $this->ordersId = $ordersId;
    }

    /**
     * @param float $ordersTaxValue
     */
    public function setOrdersTaxValue($ordersTaxValue)
    {
        $this->updateState();
        $this->ordersTaxValue = $ordersTaxValue;
    }

    /**
     * @return float
     */
    public function getOrdersTaxValue()
    {
        return $this->ordersTaxValue;
    }

    /**
     * @return string
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @return string
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @return string
     */
    public function getBlacklist()
    {
        return $this->blacklist;
    }

    /**
     * @return string
     */
    public function getCartAddInfo()
    {
        return $this->cartAddInfo;
    }

    /**
     * @return int
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * @return string
     */
    public function getConfirmDate()
    {
        return $this->confirmDate;
    }

    /**
     * @return string
     */
    public function getCouriers()
    {
        return $this->couriers;
    }

    /**
     * @return string
     */
    public function getCouriersNr()
    {
        return $this->couriersNr;
    }

    /**
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->currencyName;
    }

    /**
     * @return string
     */
    public function getLangCode()
    {
        return $this->langCode;
    }

    /**
     * @return string
     */
    public function getOrdersDate()
    {
        return $this->ordersDate;
    }

    /**
     * @return string
     */
    public function getOrdersStatusDate()
    {
        return $this->ordersStatusDate;
    }

    /**
     * @return int
     */
    public function getOrdersStatusId()
    {
        return $this->ordersStatusId;
    }

    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @return string
     */
    public function getPaymentName()
    {
        return $this->paymentName;
    }

    /**
     * @return float
     */
    public function getPaymentsAdd()
    {
        return $this->paymentsAdd;
    }

    /**
     * @return string
     */
    public function getShippingId()
    {
        return $this->shippingId;
    }

    /**
     * @return string
     */
    public function getShippingName()
    {
        return $this->shippingName;
    }

    /**
     * @return float
     */
    public function getShippingValue()
    {
        return $this->shippingValue;
    }

    /**
     * @param string $aid
     */
    public function setAid($aid)
    {
        $this->updateState();
        $this->aid = $aid;
    }

    /**
     * @param string $bankAccount
     */
    public function setBankAccount($bankAccount)
    {
        $this->updateState();
        $this->bankAccount = $bankAccount;
    }

    /**
     * @param string $blacklist
     */
    public function setBlacklist($blacklist)
    {
        $this->updateState();
        $this->blacklist = $blacklist;
    }

    /**
     * @param string $cartAddInfo
     */
    public function setCartAddInfo($cartAddInfo)
    {
        $this->updateState();
        $this->cartAddInfo = $cartAddInfo;
    }

    /**
     * @param int $confirm
     */
    public function setConfirm($confirm)
    {
        $this->updateState();
        $this->confirm = $confirm;
    }

    /**
     * @param string $confirmDate
     */
    public function setConfirmDate($confirmDate)
    {
        $this->updateState();
        $this->confirmDate = $confirmDate;
    }

    /**
     * @param string $couriers
     */
    public function setCouriers($couriers)
    {
        $this->updateState();
        $this->couriers = $couriers;
    }

    /**
     * @param string $couriersNr
     */
    public function setCouriersNr($couriersNr)
    {
        $this->updateState();
        $this->couriersNr = $couriersNr;
    }

    /**
     * @param string $currencyName
     */
    public function setCurrencyName($currencyName)
    {
        $this->updateState();
        $this->currencyName = $currencyName;
    }

    /**
     * @param string $langCode
     */
    public function setLangCode($langCode)
    {
        $this->updateState();
        $this->langCode = $langCode;
    }

    /**
     * @param string $ordersDate
     */
    public function setOrdersDate($ordersDate)
    {
        $this->updateState();
        $this->ordersDate = $ordersDate;
    }

    /**
     * @param string $ordersStatusDate
     */
    public function setOrdersStatusDate($ordersStatusDate)
    {
        $this->updateState();
        $this->ordersStatusDate = $ordersStatusDate;
    }

    /**
     * @param int $ordersStatusId
     */
    public function setOrdersStatusId($ordersStatusId)
    {
        $this->updateState();
        $this->ordersStatusId = $ordersStatusId;
    }

    /**
     * @param string $paymentId
     */
    public function setPaymentId($paymentId)
    {
        $this->updateState();
        $this->paymentId = $paymentId;
    }

    /**
     * @param string $paymentName
     */
    public function setPaymentName($paymentName)
    {
        $this->updateState();
        $this->paymentName = $paymentName;
    }

    /**
     * @param float $paymentsAdd
     */
    public function setPaymentsAdd($paymentsAdd)
    {
        $this->updateState();
        $this->paymentsAdd = $paymentsAdd;
    }

    /**
     * @param string $shippingId
     */
    public function setShippingId($shippingId)
    {
        $this->updateState();
        $this->shippingId = $shippingId;
    }

    /**
     * @param string $shippingName
     */
    public function setShippingName($shippingName)
    {
        $this->updateState();
        $this->shippingName = $shippingName;
    }

    /**
     * @param float $shippingValue
     */
    public function setShippingValue($shippingValue)
    {
        $this->updateState();
        $this->shippingValue = $shippingValue;
    }

}