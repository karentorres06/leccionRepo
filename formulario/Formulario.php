<?php

class Usuario
{
    private $id;
    private $nombre;
    private $parcial;
    private $finals;
    private $mejoramiento;
    private $aprueba;

   
     function __construct($id, $nombre, $parcial, $finals, $mejoramiento, $aprueba) {
       $this->id = $id;
       $this->nombre = $nombre;
       $this->parcial = $parcial;
       $this->finals = $finals;
       $this->mejoramiento = $mejoramiento;
        $this->aprueba = $aprueba;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 

     function setParcial($parcial){
       $this->parcial = $parcial;
     } 
     function getParcial(){
       return $this->parcial;
     }
    
     function setFinals($finals){
       $this->finals = $finals;
     } 
     function getFinals(){
       return $this->finals;
     } 

     function setMejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
     function getMejoramiento(){
       return $this->mejoramiento;
     }

     function setAprueba($aprueba){
       $this->aprueba = $aprueba;
     } 
     function getAprueba(){
       return $this->aprueba;
     }
}

?> 
