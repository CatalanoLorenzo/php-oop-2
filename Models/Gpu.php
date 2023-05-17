<?php
class GpuD extends Desktop{
    function __construct($price,$psu,public string $name){
        parent:: __construct($price,$psu);
        $this->name = $name;

    }
}
class GpuL  extends Laptop {
    function __construct($price,$battery,public string $name){
        parent:: __construct($price,$battery);
        $this->name = $name;

    }
}