<?php
require_once __DIR__ . "/Motherboard.php";
require_once __DIR__ . "/Cpu.php";
require_once __DIR__ . "/Gpu.php";
require_once __DIR__ . "/Ram.php";
require_once __DIR__ . "/Ssd.php";
class Computer
{
    use Motherboard;
    use Cpu;
    use Gpu;
    use Ram;
    use Ssd;


    function __construct(private int $price)
    {
        $this->price = $price;
    }
    public function get_price()
    {
        return $this->price;
    }
    public function set_components(string $mb_name , string $ssd_name , string $cpu_name , string $gpu_name ,string $ram_name){
        $this->set_cpu_name($cpu_name);
        $this->set_mb_name($mb_name);
        $this->set_ssd_name($ssd_name);
        $this->set_gpu_name($gpu_name);
        $this->set_ram_name($ram_name);
    }
    public function get_components_as_array()
    {
        return [
            $this->price,
            $this->get_mb_name(),
            $this->get_ssd_name(),
            $this->get_cpu_name(),
            $this->get_gpu_name(),
            $this->get_ram_name()
        ];
    }
    public function get_type()
    {
        return 'Computer';
    }
}
