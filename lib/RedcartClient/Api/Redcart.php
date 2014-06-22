<?php

namespace RedcartClient\Api;

use RedcartClient\Modules\BaseModule;

class Redcart {

    /**
     * @var BaseModule[]
     */
    private $modules = array();

    /**
     * @param BaseModule[] $modules
     */
    public function __construct($modules)
    {
        foreach($modules as $module) {
            $this->modules[$module->getModuleName()] = $module;
        }
    }

    /**
     * @param string $moduleName
     *
     * @return BaseModule
     * @throws \RuntimeException
     */
    public function getModule($moduleName) {
        if (!isset($this->modules[$moduleName])) {
            throw new \RuntimeException("Cannot find module {$moduleName}");
        }

        return $this->modules[$moduleName];
    }
}