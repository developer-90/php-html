<?php

$fecha = date('d-m-Y');
print("<p style='text-align: center;margin-top: 2rem'>Fecha actual: $fecha</p>");

//incluimos el header html
include("header.html");

// verifica formulario enviado
if(isset($_POST["fecha"])) {
    // obtiene la fecha
    $fecha=$_POST['fecha'];
    // Obtener el número del día del mes
    $dia = date('j', strtotime($fecha));
    // Evaluar y muestra mensaje
    switch ($dia) {
        case 1:
        case 3:
        case 5:
        case 12:
            print("<h3>Horario de mañana</h3>");
            break;

        case 10:
        case 14:
        case 24:
        case 28:
            print("<h3>Horario de tarde</h3>");
            break;

        case 2:
        case 8:
        case 15:
            print("<h3>No hay clase</h3>");
            break;

        default:
            print("<h3>No hay nada definido</h3>");
            break;
    }
}
// incluimos footer html
include("footer.html");
?>