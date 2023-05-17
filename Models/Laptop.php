<?php
class Laptop extends Computer{
    function __construct($price,public string $battery){
        parent::__construct($price);
        $this->battery = $battery;
    }
}