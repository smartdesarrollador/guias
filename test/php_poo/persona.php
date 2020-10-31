<?php 

class Persona{
    public $nombre = "Juan";
    private $clave = "clave";
    protected $direccion = "Lince";

    public function __construct($nombre){
        return $this->nombre = $nombre;
    }

    public function getName(){
        return $this->nombre;
    }
}

?>