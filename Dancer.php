<?php


class Dancer
{
    public $name;
    public $gender;

    public function __construct($gender, $name){
        $this->name = $name;
        $this->gender = $gender;
    }

}