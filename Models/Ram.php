<?php
trait Ram
{
    private $ram_name;
    public function get_ram_name()
    {
        return $this->ram_name;
    }
    public function set_ram_name(string $_name)
    {
        $this->ram_name = $_name;
    }
}
