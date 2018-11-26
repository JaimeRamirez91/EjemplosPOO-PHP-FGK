<?php
/**
 * Description of Persona
 *
 * @author Jaime Ramírez
 */
abstract class Persona {
    //atributos
    private $nombre;
    private $genero;
    private $edad;
    
    //metodos
    public function setNombre($nombre){//Asignar valos
        //this-> Se accede a una propiedad/atributo o metodo
        $this->nombre = $nombre;
    }
    public function getNombre(){//Consultar valor
        return $this->nombre;
    }
    
    public function setgenero($genero){
        $this->genero = $genero;
    }
    public function getGenero(){
        return $this->genero;
    }
    
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function getedad(){
        return $this->edad;
    }
}
