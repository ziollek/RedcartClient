<?php


namespace RedcartClient;

use RedcartClient\Api\Client;
use RedcartClient\Api\Redcart;
use RedcartClient\Locator\ModuleLocator;
use RedcartClient\Mapper\RawToResourceMapper;


/**
 * This class is using only for demo purposes, i highly recommend using dependency injection (ie. Symfony2 container)
 */
class Setup {

    /**
     * @return Redcart
     */
    public static function getRedcart($apiKey, $https = false)
    {
        $moduleLocator = new ModuleLocator(self::getClient($apiKey, $https), new RawToResourceMapper());
        return new Redcart($moduleLocator->getAllSupportedModules());
    }

    public static function getClient($apiKey, $https = false)
    {
        $baseUri = $https ? 'https://api2.redcart.pl' : 'http://api2.redcart.pl';
        return new Client(new \Guzzle\Http\Client($baseUri), $apiKey);
    }
}