<?php

require __DIR__ . '/shortcuts.php';
require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;

if (($debug = getenv('NETTE_DEBUG')) !== FALSE) { // https://forum.nette.org/cs/26561-configurator-a-detekce-prostredi-v-dockeru#p176044
	$configurator->setDebugMode($debug === '1');
}

//$configurator->setDebugMode('23.75.345.200'); // enable for your remote IP
$configurator->enableDebugger(__DIR__ . '/../log');

$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

$container = $configurator->createContainer();

return $container;
