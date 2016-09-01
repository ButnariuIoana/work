<?php 
use Doctrine\ORM\Tools\Console\ConsoleRunner;
try {
    /**
     * Read the configuration
     */
    include __DIR__ . "/../app/config/config.php";
    /**
     * Read auto-loader
     */
    include __DIR__ . "/../app/config/loader.php";
    /**
     * Read services
     */
    include __DIR__ . "/../app/config/services.php";
    /**
     * Doctrine entity manager
     */
    $isDevMode = true;
    $doctrine_config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/' . $config->application->modelsDir), $isDevMode);

    $conn = array(
    	'driver' => 'pdo_sql',
    	'path' => __DIR__ . '/../' . $config->database->dbname,
    	);

    $entityManager = Doctrine\ORM\EntityManager::create($conn, $doctrine_config);

    return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
} catch (\Exception $e) {
	echo $e->getMessage();
}