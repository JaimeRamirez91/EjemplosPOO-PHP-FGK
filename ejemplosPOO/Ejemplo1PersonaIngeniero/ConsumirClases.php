<?php
/**
 * Consumir clase Ingeniero
 * @author Jaime Ramírez
 */

require 'Ingeniero.php';

//Crear el objeto para poder instanciar la clase Ingeniero
$ingeniero = new Ingeniero();

//Accceso a metodos y atributos

//Envio de datos
$ingeniero->setEdad(14);
$ingeniero->setNombre("Jaime Ramírez");
$ingeniero->setEspecialidad("Sistemas Computacionales");
$ingeniero->setalmAMater("Universidad de Sonsonate");

//Peticiones
echo "Edad: ".$ingeniero->getNombre()."<br>";
echo "Mombre: ".$ingeniero->getedad()."<br>";
echo "Especialidad: ".$ingeniero->getEspecialidad()."<br>";
echo "Alma Mater: ".$ingeniero->getAlmaMater()."<br>";






