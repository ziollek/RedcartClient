<?php


namespace RedcartClient\Locator;


use RedcartClient\Api\Client;
use RedcartClient\Mapper\RawToResourceMapper;
use RedcartClient\Modules\BaseModule;

class ModuleLocator {

    /**
     * @var Client
     */
    private $client;

    /**
     * @var RawToResourceMapper
     */
    private $mapper;


    /**
     * @param Client              $client
     * @param RawToResourceMapper $mapper
     */
    public function __construct(Client $client, RawToResourceMapper $mapper)
    {
        $this->client = $client;
        $this->mapper = $mapper;
    }


    /**
     * @return BaseModule[]
     */
    public function getAllSupportedModules() {
        $modules = array();
        foreach (glob(__DIR__.'/../Modules/*') as $entry) {
            if (strpos($entry, '.php') === false) {
                $nameParts = explode('/', $entry);
                $moduleName = end($nameParts);
                $moduleClass = "\\RedcartClient\\Modules\\{$moduleName}\\Module";
                $module = new $moduleClass($this->client);
                if (is_callable(array($module, 'setRawToResourceMapper'))) {
                    $module->setRawToResourceMapper($this->mapper);
                }
                $modules[] = $module;
            }
        }

        return $modules;
    }
}