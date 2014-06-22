<?php


namespace RedcartClient\Locator;


use RedcartClient\Api\Client;
use RedcartClient\Mapper\RawToResourceMapper;
use RedcartClient\Modules\BaseModule;

class ModuleLocator {

    /**
     * @param Client              $client
     * @param RawToResourceMapper $mapper
     *
     * @return BaseModule[]
     */
    public function getAllSupportedModules(Client $client, RawToResourceMapper $mapper) {
        $modules = array();
        foreach (glob(__DIR__.'/../Modules/*') as $entry) {
            if (strpos($entry, '.php') === false) {
                $nameParts = explode('/', $entry);
                $moduleName = end($nameParts);
                $moduleClass = "\\RedcartClient\\Modules\\{$moduleName}\\Module";
                $module = new $moduleClass($client);
                if (is_callable(array($module, 'setRawToResourceMapper'))) {
                    $module->setRawToResourceMapper($mapper);
                }
                $modules[] = $module;
            }
        }

        return $modules;
    }
}