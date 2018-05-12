<?php

class Sejf {
    public $brand = 'Tajniaki';
    public $model = 'Tajniaki 2.0';
    public $material = ['tytan', 'stal'];
    public $lock = 'double lock';

    private $isLocked = true;
    private $isOpened = true;

    protected $password = '123456';
    protected $content = [
        'Alex' => '415-235-789',
        'Jessica' => '147-852-852',
    ];

    public function checkIsLocked(){
        return $this -> isLocked;
    }
}
?>