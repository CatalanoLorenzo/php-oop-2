<?php
class Laptop extends Computer{
    function __construct($motherboard,$cpu,$gpu,$ram,$ssd,public string $battery){
        parent::__construct($motherboard,$cpu,$gpu,$ram,$ssd);
        $this->battery = $battery;
    }
}