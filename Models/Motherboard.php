<?php
trait Motherboard
{
    private $mbname;
    public function get_mb_name()
    {
        return $this->mbname;
    }
    public function set_mb_name(string $_name)
    {
        $this->mbname = $_name;
    }
}
