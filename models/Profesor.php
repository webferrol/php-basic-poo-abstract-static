<?php

$config = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php';

if (!file_exists($config)) {
  die('No se ha encontrado el fichero de configuración. Consulte con su administrador');
}
require_once($config);
require_once(MODELS.'Persona.php');

class Profesor extends Persona{
  
  function tratamientoPersona(string $genero = 'f'): string {
    if ($genero === 'f') 
      return 'Doña';
    else 
      return 'Don';
  }

}