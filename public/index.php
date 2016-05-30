<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Learn\Models\User;

$antony = new User('Kalos');
echo $antony->getName();