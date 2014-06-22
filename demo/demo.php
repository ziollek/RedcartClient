<?php

require __DIR__.'/../vendor/autoload.php';

if ($argc != 2) {
    echo "usage php demo.php API_KEY".PHP_EOL;
    exit;
}

$redcart = \RedcartClient\Setup::getRedcart($argv[1]);


/** @var \RedcartClient\Modules\Hello\Module $helloModule */
$helloModule = $redcart->getModule('hello');
echo "hello response is: " . $helloModule->hello('test').PHP_EOL;

$supportedModules = array(
    'products',
    'customers',
    'customersAddress',
    'orders',
    'ordersToProducts',
    'categories',
    'productsToCategories',
    'producers',
    'gallery'
);

foreach ($supportedModules as $moduleName) {
    try {
        echo PHP_EOL.PHP_EOL.PHP_EOL;
        /** @var \RedcartClient\Modules\CrudModule $module */
        $module = $redcart->getModule($moduleName);
        echo "[{$moduleName}] count of resources: {$module->count()}".PHP_EOL;
        echo "[{$moduleName}] first resource: ".PHP_EOL;
        print_r($module->select(array(), 0, 1));
        echo PHP_EOL.'========================'.PHP_EOL."[{$moduleName}] ok".PHP_EOL;
    } catch (RuntimeException $runtimeException) {
        echo "[{$moduleName}] fail - {$runtimeException->getMessage()}".PHP_EOL;
    }
}

