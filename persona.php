<?php
class persona 
{
    private $nombre;
    private $apellido;
    private $edad;

    public function getFullName(){
        return "el nombre completo es:" . $this->nombre. "" .$this->apellido;
    }
}