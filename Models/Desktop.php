<?php
class Desktop extends Computer{
    
    function __construct($price,private string $psu){
        parent::__construct($price);
        $this->psu = $psu;
    }
    public function get_components_as_array()
    {
        return [

            $this->get_price(),
            $this->psu,
            $this->get_mb_name(),
            $this->get_ssd_name(),
            $this->get_cpu_name(),
            $this->get_gpu_name(),
            $this->get_ram_name()
        ];
    }
    public function get_type()
    {
        return 'Desktop';
    }
}