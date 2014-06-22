<?php

namespace RedcartClient\Resources\Customers;

use RedcartClient\Resources\Resource;

class CustomerAddress extends Resource {

    /**
     * @var int
     */
    private $customersAddressId;

    /**
     * @var int
     */
    private $customersId;

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
    private $customersStreet;

    /**
     * @var string
     */
    private $customersHome;

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
    private $customersCountries;

    /**
     * @return mixed
     */
    public function getCustomersAddressId()
    {
        return $this->customersAddressId;
    }

    /**
     * @return mixed
     */
    public function getCustomersCity()
    {
        return $this->customersCity;
    }

    /**
     * @return mixed
     */
    public function getCustomersCountries()
    {
        return $this->customersCountries;
    }

    /**
     * @return mixed
     */
    public function getCustomersFirstName()
    {
        return $this->customersFirstName;
    }

    /**
     * @return mixed
     */
    public function getCustomersHome()
    {
        return $this->customersHome;
    }

    /**
     * @return mixed
     */
    public function getCustomersId()
    {
        return $this->customersId;
    }

    /**
     * @return mixed
     */
    public function getCustomersLastName()
    {
        return $this->customersLastName;
    }

    /**
     * @return mixed
     */
    public function getCustomersStreet()
    {
        return $this->customersStreet;
    }

    /**
     * @return mixed
     */
    public function getCustomersZipCode()
    {
        return $this->customersZipCode;
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
     * @param string $customersFirstName
     */
    public function setCustomersFirstName($customersFirstName)
    {
        $this->updateState();
        $this->customersFirstName = $customersFirstName;
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
     * @param int $customersAddressId
     */
    public function setCustomersAddressId($customersAddressId)
    {
        $this->customersAddressId = $customersAddressId;
    }

}