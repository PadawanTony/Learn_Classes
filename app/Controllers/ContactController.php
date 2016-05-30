<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 5/30/16
 * Time: 1:58 PM
 */
namespace Learn\Controllers;

use Learn\Models\User;

class ContactController
{
    private $_user;

    public function __construct($name)
    {
        $this->_user = new User($name);
    }
    
    public function contactDetails()
    {
        include __DIR__ . '/../Views/contact.php';
    }
}