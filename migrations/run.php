<?php

use Nextras\Migrations\Bridges;
use Nextras\Migrations\Controllers;
use Nextras\Migrations\Drivers;
use Nextras\Migrations\Extensions;

$container = require __DIR__ . '/../app/bootstrap.php';

$conn = $container->getByType('LeanMapper\Connection');
$dbal = new Bridges\Dibi\DibiAdapter($conn);
$driver = new Drivers\MySqlDriver($dbal);

$controller = new Controllers\HttpController($driver);

$baseDir = __DIR__;
$controller->addGroup('structures', "$baseDir/structures");
$controller->addGroup('basic-data', "$baseDir/basic-data", array('structures'));
$controller->addGroup('dummy-data', "$baseDir/dummy-data", array('basic-data'));
$controller->addExtension('sql', new Extensions\SqlHandler($driver));

$controller->run();
