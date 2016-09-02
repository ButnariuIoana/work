<?php 
use Doctrine\ORM\Tools\Console\ConsoleRunner;
try {
    /**
     * Read the configuration
     */
    include __DIR__ . "/config.php";
    /**
     * Read auto-loader
     */
    include __DIR__ . "/loader.php";
    /**
     * Read services
     */
    include __DIR__ . "/services.php";
    /**
     * Doctrine entity manager
     */
    $isDevMode = true;
    $doctrine_config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/' . $config->application->modelsDir), $isDevMode);

    $conn = array(
         'driver'  =>'pdo_mysql',
        'user' => 'root',
        'password' => '',
        'host'     => 'localhost',
        'dbname'   => 'moi',
        'port'     =>'3306',
        );
    // var_dump($doctrine_config);
// die();

    $entityManager = Doctrine\ORM\EntityManager::create($conn, $doctrine_config);
    $di->set('entityManager', function () use ($entityManager) {
    	return $entityManager;
    });

    return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
} catch (\Exception $e) {
	echo $e->getMessage();
}