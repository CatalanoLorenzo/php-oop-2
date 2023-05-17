<?php
include_once __DIR__ ."/../Models/Computer.php";
include_once __DIR__ ."/../Models/Desktop.php";
include_once __DIR__ ."/../Models/Laptop.php";

/* $mb = 'PSQ-int-584';
$cpu = 'Q9400';
$gpu = 'Nvidea GTS 8800';
$ram = 'DDR3 1200mhz';
$ssd = 'Sata 2.5 kingstore'; */
$computers=[

    new Desktop(999,'Cooler MasterXXX',new CpuD('Q9400'),new GpuD('Nvidea GTS 8800'),new RamD('DDR3 1200mhz'),new SsdD('Sata 2.5 kingstore'),new MotherboardD('PSQ-int-584')),
    new Laptop(1333,'3.7v 8800mha',new CpuL('Q9400m'),new GpuL('Intel HD'),new RamL('SoDimm DDR3 1200mhz'),new SsdL('M.2 kingstore'),new MotherboardL('PS2-int-854')),

];