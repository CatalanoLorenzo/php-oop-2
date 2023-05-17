<?php
class Computer{
    function __construct(public string $motherboard,public string $cpu,public string $gpu,public string $ram,public string $ssd,)
    {
        $this->motherboard = $motherboard;
        $this->cpu = $cpu;
        $this->gpu = $gpu;
        $this->ram = $ram;
        $this->ssd = $ssd;
        
    }
}