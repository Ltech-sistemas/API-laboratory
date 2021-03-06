<?php

use Slim\Factory\AppFactory;

require __DIR__.'/vendor/autoload.php';

$app = AppFactory::create();

$app->addErrorMiddleware(true, true, true);

require __DIR__.'/routes.php';

$app->run();
