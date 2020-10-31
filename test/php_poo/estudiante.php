<?php

class Estudiante extends Persona{


    public $codigoMatricula = "0011";

    public function __construct($nombre,$codigoMatricula){
        parent::__construct($nombre);

        $this->codigoMatricula = $codigoMatricula;
    }

    public function getDataStudent(){
        return $this->nombre." - ".$this->codigoMatricula;
    }
}

?>