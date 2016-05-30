<?php
namespace Learn\Models;

/**
 * Created by PhpStorm.
 * User: antony
 * Date: 5/30/16
 * Time: 11:19 AM
 */
class User extends Person
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function login()
    {
        return "Logged in!";
    }

    public function logout()
    {
        return "Logged Out!";
    }
}