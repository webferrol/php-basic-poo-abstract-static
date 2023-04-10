<?php
declare(strict_types = 1);
// Cargamos variables/constantes globales del sistema
require_once('config.php');

require_once(MODELS.'Alumno.php');

// Lógica
$fechaActual = new DateTime();
$xurxo = new Alumno("Xurxo", "González", new DateTime('1993-04-06'));

// echo "<pre>";
// print_r($xurxo);
// echo "<pre>";

// Cargar vista
require_once(VIEWS.'alumno-view.php');