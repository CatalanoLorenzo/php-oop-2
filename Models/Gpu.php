<?php
trait Gpu{
    private $gpu_name;
    public function get_gpu_name(){
        return $this->gpu_name;
    }
    public function set_gpu_name(string $_name){
        $this->gpu_name = $_name;
    }
    }

