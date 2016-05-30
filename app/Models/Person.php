<?php
namespace Learn\Models;

/**
 * Created by PhpStorm.
 * User: antony
 * Date: 5/30/16
 * Time: 11:24 AM
 */

class Person
{
    protected $_name;

    public function __construct($name='')
    {
        $this->_name = $name;
    }

    /**
     * @return string _name
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }
}