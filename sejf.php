<?php

class Sejf {
    public $brand = 'Tajniaki';
    public $model = 'Tajniaki 2.0';
    public $lock = 'double lock';

    private $isLocked = true;

    protected $password = '123';
    protected $content = "super tajny content";

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

    public function getContent(){
        return $this -> content;
    }

    public function setContent($newContent){
        $this -> content = $newContent;
    }


    public function lock(){
        $isLocked = true;
        header('Location: index.php');
        return $isLocked;
    }
}
?>