<?php
/*Dado un número ingresado en una variable determinar si el mismo es IMPAR.*/
echo "Ingrese un número\n";
$numero = readline();
if(is_numeric($numero))
{
  if(($numero % 2) != 0)
      echo "El número ".$numero." es impar";
  else
      echo "El número ".$numero." es par";
}
else
{
  echo "No ha ingresado un número, reinicie la aplicación y reintentelo";
}
?>