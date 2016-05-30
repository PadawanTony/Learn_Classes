<?php
require_once __DIR__ . '/../vendor/autoload.php';

//use Learn\Controllers\HelloController;

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path == '/public/'){
    $hc = new Learn\Controllers\HelloController('Antony Kalogeropoulos');
    $hc->hello();
}

if ($path == '/public/contact'){
    $cc = new Learn\Controllers\ContactController('Antony Kalogeropoulos');
    $cc->contactDetails();
}


