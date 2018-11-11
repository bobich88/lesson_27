<?php

class User
{
    public $name;
    private $role;


    public function __construct($name, $role = 1)
    {
        $this->name = $name;
        

        if ($role == 1 || $role == 2) {
            $this->role = $role;
        } else {
            $this->role = 1;
        }
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
    if ($role == 1 || $role == 2) {
        $this->role = $role;
    } else {
        $this->role = 1;
    }
}


}