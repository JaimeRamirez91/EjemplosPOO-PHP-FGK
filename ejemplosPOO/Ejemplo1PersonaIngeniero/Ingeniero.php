<?php
/**
 * Description of Ingeniero
 *
 * @author Jaime Ramírez
 */
//Importamos la libreria
require 'Persona.php';
              //herencia de Perosna CLASS
class Ingeniero extends Persona{
    //Atributos
    public $especialidad;
    public $almaMater;
    
    //Metodos
    public function setEspecialidad($especialidad){
        $this->especialidad = $especialidad;
    }
    public function getEspecialidad(){
        return $this->especialidad;
    }
    public function setAlmaMater($almaMater){
        $this->almaMater = $almaMater;
    }
    public function getAlmaMater(){
        return $this->almaMater;
    }
}
