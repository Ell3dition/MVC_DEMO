<?php

require_once "Controladores/plantillaC.php";
require_once "Controladores/slideC.php";
require_once "Controladores/nosotrosC.php";

require_once "Modelos/slideM.php";
require_once "Modelos/nosotrosM.php";

$plantilla = new PlantillaC();
$plantilla -> LlamarPlantilla();