<?php

class User
{
    public $name;
    private $role;
    public static $roles = [1, 2];


    public function __construct($name, $role = 1)
    {
        $this->name = $name;
        $this->setRole($role);
        
    }

    public function getRole()
    {
        // return $this->role;
    
    if ($this->role == 1) {
        return 'админ';
    } else {
        return 'пользователь';
    }  
} 

public function setRole($role)
{

    if (in_array($role, self::$roles)) {
        $this->role = $role;
    } else {
        $this->role = 1;
    }
}


}