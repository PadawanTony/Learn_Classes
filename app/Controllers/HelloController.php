<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 5/30/16
 * Time: 1:03 PM
 */
namespace Learn\Controllers;

use Learn\Models\User;

class HelloController
{
    private $_user;

    public function __construct($name)
    {
        $this->_user = new User($name);
    }

    public function hello()
    {
        include __DIR__ . '/../Views/hello.php';
    }
}