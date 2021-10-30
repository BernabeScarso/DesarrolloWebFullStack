<?php
/*Se tiene tres variables con valores numéricos, estas representan
las notas de un alumno. Se necesita obtener el promedio de un
estudiante a partir de sus tres notas parciales.*/
$arrayNotas = array(7,5,9);
echo "El promedio de las notas es ".sacarPromedio($arrayNotas);

function sacarPromedio($notas)
{
  return array_sum($notas) / count($notas);
}
?>