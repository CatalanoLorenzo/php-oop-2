<?php
class RamD extends Desktop{
    function __construct($price,$psu,public string $name){
        parent:: __construct($price,$psu);
        $this->name = $name;

    }
}
class RamL  extends Laptop {
    function __construct($price,$battery,public string $name){
        parent:: __construct($price,$battery);
        $this->name = $name;

    }
}