<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Learn\Models\User;

$antony = new User('Antony Kalogeropoulos');
echo "Hello " . $antony->getName();
echo "<br/>";

echo "You are " . $antony->login();
echo "<br/>";
echo "You are " . $antony->logout();
