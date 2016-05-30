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

    public function __construct()
    {
        $this->_user = new User('Antony'); //Get name from $_POST
    }

    public function hello()
    {
        include __DIR__ . '/../Views/hello.php';
    }
    
    public function about() 
    {
        include __DIR__ . '/../Views/about.php';
    }
}