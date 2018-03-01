<?php

// Ham an danh

$lamda = function () {
    return 'lamda function is assign to variable';
};

echo $lamda() . '<br>';

function getRole($role)
{
    return $role();
}

echo getRole(function (){
   return 'Using lamda function as a paramatter in method';
});

echo '<br>';

class Role
{
    public $role;

    public function __construct($role)
    {
        $this->role = $role;
    }

    public function getRole($role)
    {
        return $role();
    }
}

// Khoi tao class Role
$role = new Role(function (){
   return 'Class role has been initialized';
});

$data = $role->role;

var_dump($data) ;

echo $role->getRole(function (){
   return '<br>Bien hoc menh mong, quay dau la bo';
});

