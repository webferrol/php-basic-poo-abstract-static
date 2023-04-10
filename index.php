<?php
declare(strict_types = 1);
// Cargamos variables/constantes globales del sistema
require_once('config.php');

require_once(MODELS.'Profesor.php');

// Lógica
$fechaActual = new DateTime();
$xurxo = new Profesor("Xurxo", "González", new DateTime('1993-04-06'));
// $xurxo->setNombre("David");

// echo "<pre>";
// print_r($xurxo);
// echo "<pre>";

// Cargar vista
require_once(VIEWS.'alumno-view.php');