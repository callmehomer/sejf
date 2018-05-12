<?php

class Sejf {
    public $brand = 'Tajniaki';
    public $model = 'Tajniaki 2.0';
    public $material = ['tytan', 'stal'];
    public $lock = 'double lock';

    private $isLocked = true;

    protected $password = '1';
    protected $content = [
        'Sabina' => '415-235-789',
        'Jessica' => '147-852-852',
    ];

    public function checkIsLocked(){
        return $this -> isLocked;
    }

    public function getPassword(){
        return $this -> password;
    }

    public function unlock(){
        $isLocked = false;
        return $isLocked;
    }
}
?>