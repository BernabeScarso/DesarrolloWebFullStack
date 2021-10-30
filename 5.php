<?php
/*Utilizando el concepto de ARRAY, dados 50 números enteros,
informar el promedio de los mayores que 100 y la suma de los
menores que –10.*/
$numeros = array();
for ($i=0;$i<50;$i++)
{
  $numeros[] = random_int(-100,200);
}
sort($numeros);
$promMayoresA100 = 0;
$contadorPromedio = 0;
$sumaMenores10Neg = 0;
for($i=0;$i<50;$i++)
{
  if($numeros[$i] < -10)
  {
    $sumaMenores10Neg = $sumaMenores10Neg + $numeros[$i];
  }
  if($numeros[$i] > 100)
  {
    $promMayoresA100 = $promMayoresA100 + $numeros[$i];
    $contadorPromedio++;
  }
}
echo "La suma de los valores menores a -10 es ".$sumaMenores10Neg;
echo "\n";
if($contadorPromedio > 0)
    echo "El promedio de los valores mayores a 100 es ".round($promMayoresA100/$contadorPromedio);
else
    echo "El promedio de los valores mayores a 100 es ".$promMayoresA100;
?>