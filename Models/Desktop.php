<?php
class Desktop extends Computer{
    function __construct($price,public string $psu){
        parent::__construct($price);
        $this->psu = $psu;
    }
}