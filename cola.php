<?php

$cola = array();

array_push($cola, "Elemento1");
array_push($cola, "Elemento2");
array_push($cola, "Elemento3");


echo "Cola actual: ";
print_r($cola);


$elementoEliminado = array_shift($cola);


echo "Elemento eliminado: $elementoEliminado\n";
echo "Cola después de eliminar: ";
print_r($cola);

?>