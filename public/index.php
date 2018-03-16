<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/

$app = require __DIR__.'/../bootstrap/app.php';

$app->run();
/*$a = new Redis();
$a->connect('127.0.0.1','6379');
$a->set('a','sds');
echo $a->get('a');*/