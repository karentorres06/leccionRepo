<?php

include_once('Formulario.php');
include_once('collector.php');

class FormularioCollector extends collector
{
  
  function showNotas() {
    $rows = self::$db->getRows("SELECT * FROM nota ");        
    ##echo "linea 1";
    $arrayNota= array();        
    foreach ($rows as $c){
      $aux = new nota($c{'id'},$c{'nombre'},$c{'parcial'},$c{'finals'},$c{'mejoramiento'},$c{'aprueba'});
      array_push($arrayNota, $aux);
    }
    return $arrayNota;        
  }
    
   
  
 }
?>

