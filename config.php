<?php

// Ver fichero actual: 
//echo __FILE__; // Ej: C:\Users\alumno\Desktop\php-basic-poo-abstract-static\config.php

// Ver la directorio actual de trabajo
// echo dirname(__FILE__);

define('DIRNAME', dirname(__FILE__));
define('MODELS', DIRNAME.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR);
define('VIEWS', DIRNAME.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);