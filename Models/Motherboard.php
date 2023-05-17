<?php
class MotherboardD extends Desktop{
    function __construct($price,$psu,public string $name){
        parent:: __construct($price,$psu);
        $this->name = $name;

    }
}
class MotherboardL  extends Laptop {
    function __construct($price,$battery,public string $name){
        parent:: __construct($price,$battery);
        $this->name = $name;

    }
}