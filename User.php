<?php

class User
{
    public $name;
    public $role;


    function __construct($name, $role)
    {
        $this->name = $name;
        $this->role = $role;
    }
}