<?php
/*Dados 10 valores numéricos en variables separadas, informar cual
es el mayor. Investigar el concepto de ARRAY, como puede
cambiar el ejercicio con la utilización del mismo.*/
$numeros = array();
for ($i=0;$i<10;$i++)
{
  $numeros[] = random_int(0,100);
}
echo "El número máximo es ".max($numeros);
?>