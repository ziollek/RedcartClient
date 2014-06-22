<?php

namespace RedcartClient\Modules;

use RedcartClient\Api\Client;

class BaseModule {

    private $module = null;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $method
     *
     * @return array
     */
    protected function getPostData($method)
    {
        return array(
            'viewType' => 'json',
            'module'   => $this->getModuleName(),
            'method'   => $method
        );
    }

    /**
     * @return string
     */
    public function getModuleName()
    {
        if (is_null($this->module)) {
            $nameParts = explode("\\", get_class($this));
            $this->module = lcfirst($nameParts[count($nameParts) - 2]);
        }

        return $this->module;
    }


}