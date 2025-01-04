<?php

require_once __DIR__ . "../controladores/plantilla.controlador.php";

require_once __DIR__ . "../controladores/usuarios.controlador.php";

require_once __DIR__ . "../modelos/usuarios.modelo.php";




$plantilla = new ControladorPlantilla();
$plantilla ->cargarPlantilla();


