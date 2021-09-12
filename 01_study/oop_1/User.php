<?php

class User
{
    public $name = 'Bob';
    public $age = 21;

    public function __construct()
    {
        //none
    }

    public function selfIntroduction()
    {
        echo "私の名前は" . $this->name . "です\n";
        echo "年齢は" . $this->age . "です\n";
    }
}