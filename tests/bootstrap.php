<?php
$classLoader = include(__DIR__ . '/../vendor/autoload.php');

/* @var $classLoader \Composer\Autoload\ClassLoader */
$classLoader->add('RedcartClient\\Tests\\', __DIR__ . '/');
unset($classLoader);