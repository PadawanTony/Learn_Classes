<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Learn\Controllers\HelloController;

$hc = new HelloController();
echo $hc->hello();
