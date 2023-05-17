<?php
class Desktop extends Computer{
    function __construct($motherboard,$cpu,$gpu,$ram,$ssd,public string $psu){
        parent::__construct($motherboard,$cpu,$gpu,$ram,$ssd);
        $this->psu = $psu;
    }
}