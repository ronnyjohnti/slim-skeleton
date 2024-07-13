<?php

use Slim\Routing\RouteCollectorProxy;

if (!isset($container)) {
    $container =  new \DI\Container();
}
if (!isset($app)) {
    $app = Slim\Factory\AppFactory::createFromContainer($container);
}

$app->addRoutingMiddleware();

$app->group('/api', function (RouteCollectorProxy $group) {
    $group->get('/checkins', [\App\Controllers\Checkin::class, 'index']);
});
