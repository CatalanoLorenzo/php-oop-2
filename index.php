<!-- Immaginiamo le classi per modellizzare un personal computer.
Un computer desktop é un computer.
Un computer portatile é un computer.
Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse.
BONUS:
pensate a cosa compone un pc: 'ha un' monitor? 'ha una' mbo? 'ha una' keyboard? usate la composizione per indicare costruire appropriatamente le istanze.
aggiungere un metodo che stampi la stringa con tutte le info del dispositivo (oltre ai getter/setters necessari). -->
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
class Desktop extends Computer{
    function __construct($motherboard,$cpu,$gpu,$ram,$ssd,public string $psu){
        parent::__construct($motherboard,$cpu,$gpu,$ram,$ssd);
        $this->psu = $psu;
    }
}
class Laptop extends Computer{
    function __construct($motherboard,$cpu,$gpu,$ram,$ssd,public string $battery){
        parent::__construct($motherboard,$cpu,$gpu,$ram,$ssd);
        $this->battery = $battery;
    }
}