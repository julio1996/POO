<?php
class Persona { 
    public $nombre; 
    public $apellido; 

    public function hablar(){ 
	
	}
}


$p= new Persona();
$p->nombre="Micaela";
$p->apellido="Martinez";

$p1= new Persona();
$p1->nombre="Juan";
$p1->apellido="Perez";

echo $p->nombre;
?>