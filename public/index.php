<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Learn\Controllers;
use Learn\Router;

$router = new Router\Router();

/**
 * Trying with objects
 */
//$router->add('/', new Controllers\HelloController('Antony From Home Router'));
//$router->add('/about', new Controllers\HelloController('Antony From About Router'));
//$router->add('/contact', new Controllers\ContactController('Antony From Contact Router'));

/**
 * Trying with Strings
 */
$router->get('/', 'HelloController', 'hello');
$router->get('/about', 'HelloController', 'about');
$router->get('/contact', 'ContactController', 'contactDetails');
$router->post('/contact', 'ContactController', 'contactDetails');

//See inside $router
echo "<pre>";
print_r($router);

$router->submit();

