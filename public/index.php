<?php
declare(strict_types=1);

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$container = require __DIR__ . '/../app/container.php';
$app = AppFactory::createFromContainer($container);

require __DIR__ . '/../app/routes.php';

$app->addErrorMiddleware(true, true, true);

$app->run();
