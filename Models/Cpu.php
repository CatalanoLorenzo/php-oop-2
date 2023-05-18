<?php
trait Cpu{

    private $cpu_name;
    public function get_cpu_name(){
        return $this->cpu_name;
    }
    public function set_cpu_name(string $_name){
        $this->cpu_name = $_name;
    }
}
