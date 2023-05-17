<?php
include_once __DIR__ . "/Cpu.php";
include_once __DIR__ . "/Gpu.php";
include_once __DIR__ . "/Ram.php";
include_once __DIR__ . "/Ssd.php";
include_once __DIR__ . "/Motherboard.php";
class Desktop extends Computer{
    public $cpu;
    public $gpu;
    public $ram;
    public $ssd;
    public $mb;
    function __construct($price,public string $psu,CpuD $cpuname,GpuD $gpuname ,RamD $ramname , SsdD $ssdname ,MotherboardD $mbname){
        parent::__construct($price);
        $this->psu = $psu;
        $this->cpu = $cpuname;
        $this->gpu = $gpuname;
        $this->ram = $ramname;
        $this->ssd = $ssdname;
        $this->mb = $mbname;
    }
}