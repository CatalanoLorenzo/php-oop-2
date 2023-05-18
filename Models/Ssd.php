<?php
trait Ssd
{
    private $ssd_name;
    public function get_ssd_name()
    {
        return $this->ssd_name;
    }
    public function set_ssd_name(string $_name)
    {
        $this->ssd_name = $_name;
    }
}
