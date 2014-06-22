<?php

namespace RedcartClient\Resources\Customers;

use RedcartClient\Resources\Resource;

class Customer extends Resource {

    /**
     * @var int
     */
    private $customersId;

    /**
     * @var string
     */
    private $customersEmail;

    /**
     * @var string
     */
    private $customersPhone;

    /**
     * @param string $customersEmail
     */
    public function setCustomersEmail($customersEmail)
    {
        $this->updateState();
        $this->customersEmail = $customersEmail;
    }

    /**
     * @return string
     */
    public function getCustomersEmail()
    {
        return $this->customersEmail;
    }

    /**
     * @param int $customersId
     */
    public function setCustomersId($customersId)
    {
        $this->customersId = $customersId;
    }

    /**
     * @return int
     */
    public function getCustomersId()
    {
        return $this->customersId;
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
     * @return string
     */
    public function getCustomersPhone()
    {
        return $this->customersPhone;
    }

}