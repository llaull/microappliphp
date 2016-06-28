<?php
use Doctrine\ORM\Tools\Setup;

require_once "vendor/autoload.php";

$classLoader = new \Doctrine\Common\ClassLoader('DoctrineExtensions', '/path/to/extensions');
$classLoader->register();

// Create a simple "default" Doctrine ORM configuration for XML Mapping
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    'dbname' => 'gac_technology_eval',
);

// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);
