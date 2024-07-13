<?php
declare(strict_types=1);

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$container = require __DIR__ . '/../config/container.php';
$app = AppFactory::createFromContainer($container);

require __DIR__ . '/../config/routes.php';

$app->run();
