<?php
/*Dado un valor numérico X, imprimir los X primeros múltiplos de 3
que no sean múltiplos de 5.*/
echo "Ingrese un valor:\n";
$numeros[] = array();
$x = readline();
echo "Los primeros ".$x." multiplos de 3 que no son multiplos de 5 son: \n";
for ($i=0;$i<=$x;$i++)
{
   if((($i % 3) == 0) && ($i % 5 != 0))
   {
     echo $i."\n";
   }
}
?>