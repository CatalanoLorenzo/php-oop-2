<?php
class Laptop extends Computer{

    function __construct($price,private string $battery,){
        parent::__construct($price);
        $this->battery = $battery;
    }
    public function get_components_as_array()
    {
        return [

            $this->get_price(),
            $this->battery,
            $this->get_mb_name(),
            $this->get_ssd_name(),
            $this->get_cpu_name(),
            $this->get_gpu_name(),
            $this->get_ram_name()
        ];
    }
    public function get_type()
    {
        return 'Laptop';
    }
}