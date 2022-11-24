<?php

//horas
echo "<h4>HORAS</h4>";

echo "La hora es " . time();
echo "<br>La hora en un mes es " . strtotime("+1 month");


//Fecha: Date, Datetime
echo "<h4>FECHA: DATE, DATETIME</h4>";
echo "La fecha es " . date("d/F/y");
$fecha = new DateTime("now");//Objeto de tipo DateTime
echo "<br>Fecha actual:<br>";
var_dump($fecha);
echo "<br>Extraer fecha formateada del DateTime: " . $fecha->format("d-m-y");

$fecha = new DateTime("+11 weeks");//Objeto de tipo DateTime
echo "<br>Fecha dentro de 11 semanas:<br>";
var_dump($fecha);

echo "<h4>FECHA CON CreateFromFormat</h4>";
$mifecha = DateTime::createFromFormat("d-m-Y", "09-07-2018");
var_dump($mifecha);
echo "<br>Fecha en español: " . $mifecha->format("j-n-Y");