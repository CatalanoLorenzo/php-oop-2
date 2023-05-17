<?php
include_once __DIR__ . '/Models/Computer.php';
include_once __DIR__ . '/Models/Destop.php';
include_once __DIR__ . '/Models/Laptop.php';
include_once __DIR__ . '/Models/Cpu.php';
include_once __DIR__ . '/Models/Gpu.php';
include_once __DIR__ . '/Models/Ram.php';
include_once __DIR__ . '/Models/Ssd.php';
include_once __DIR__ . '/Models/Motherboard.php';

$computers=[

    new Computer(999,new Desktop('Cooler MasterXXX',new MotherboardD('PSQ-int-584'),new CpuD('Q9400'),new GpuD('Nvidea GTS 8800'),new RamD('DDR3 1200mhz'),new SsdD('Sata 2.5 kingstore'))),
    new Computer(999,new Desktop('3.7v 8800mha',new MotherboardL('PS2-int-854'),new CpuL('Q9400m'),new GpuL('Intel HD'),new RamL('SoDimm DDR3 1200mhz'),new SsdL('M.2 kingstore'))),

];