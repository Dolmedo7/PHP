<?php
/*
 Creamos 3 variables en PHP y luego lo mostramos al final en el HTML
 */
$nombre='David Olmedo';
$fecha='date'("D d/M/Y");
$hora='date'('H:i:s');
$precio=5;
$cantidad=10;
define('APELLIDO'," Navarro");
const RESIDENCIA=" Tomelloso";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Hola <?=$nombre,APELLIDO;?></p>
<p>Hoy es <?=$fecha;?></p>
<p>Son las <?=$hora;?></p>
<p>El total es <?=$precio*$cantidad;?> Euros</p>
<?php
echo "Mi segundo apellido es ",APELLIDO;
?>
<br>
<br>
<?php
echo "Vivo en ",RESIDENCIA;
?>
</body>

</html>