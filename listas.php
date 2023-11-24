<?php
$list = array();
array_push($list, "hello");
array_splice($list, 1, 0, "world"); // Inserta "world" en la posición 1
echo json_encode($list)."\n";