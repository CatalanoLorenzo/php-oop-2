<?php
require_once __DIR__ ."/../Models/Computer.php";
require_once __DIR__ ."/../Models/Desktop.php";
require_once __DIR__ ."/../Models/Laptop.php";
$computers=[
    new Desktop(999,'Cooler MasterXXX'),
    new Laptop(1333,'3.7v 8800mha'),
    new Computer(656)
];
$computers[0]->set_components('PSQ-int-584','Sata 2.5 kingstore','Q9400','Nvidea GTS 8800','DDR3 1200mhz');
$computers[1]->set_components('PSQ-int-584','Sata 2.5 kingstore','Q9400','Nvidea GTS 8800','DDR3 1200mhz');
$computers[2]->set_components('PSQ-int-584','Sata 2.5 kingstore','Q9400','Nvidea GTS 8800','DDR3 1200mhz');
