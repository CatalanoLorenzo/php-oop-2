<?php
include_once __DIR__ . "/Cpu.php";
include_once __DIR__ . "/Gpu.php";
include_once __DIR__ . "/Ram.php";
include_once __DIR__ . "/Ssd.php";
include_once __DIR__ . "/Motherboard.php";
class Laptop extends Computer{
    public $cpu;
    public $gpu;
    public $ram;
    public $ssd;
    public $mb;
    function __construct($price,public string $battery,CpuL $cpuname,GpuL $gpuname ,RamL $ramname , SsdL $ssdname ,MotherboardL $mbname){
        parent::__construct($price);
        $this->battery = $battery;
        $this->cpu = $cpuname;
        $this->gpu = $gpuname;
        $this->ram = $ramname;
        $this->ssd = $ssdname;
        $this->mb = $mbname;
    }
}