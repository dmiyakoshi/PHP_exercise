<?php

class Person
{
    private $family_name;
    private $first_name;

    public function __construct($family_name, $first_name)
    {
        $this->first_name = $first_name;
        $this->family_name = $family_name;
    }

    public function getFamily()
    {
        return $this->family_name;
    }

    public function getFirst()
    {
        return $this->first_name;
    }

    public function setFamily($family_name)
    {
        $this->family_name = $family_name;
    }

    public function setFirst($first_name)
    {
        $this->first_name = $first_name;
    }

    public function selfIntroduction()
    {
        return "私の名前は" . $this->getFullName() . "です\n";
    }

    protected function getFullName()
    {
        return $this->family_name . ' ' . $this->first_name;
    }
}