<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

/* Mayor que */
var_dump($numero1 > $numero2);
echo "<br>";

/* Menor que */
var_dump($numero1 < $numero2);
echo "<br>";

/* Mayor o igual que */
var_dump($numero1 > $numero2);
echo "<br>";

/* Menor o igual que */
var_dump($numero1 > $numero2);
echo "<br>";

/* Igualdad de valores */
var_dump($numero2 == $numero4);
echo "<br>";

/* Igualdad de valores y tipo de dato */
var_dump($numero2 === $numero4);
echo "<br>";

/* Izquierda menor a derecha */
var_dump($numero1 <=> $numero2);
echo "<br>";

/* Ambos iguales */
var_dump($numero2 <=> $numero2);
echo "<br>";

/* Izquierda mayor a derecha */
var_dump($numero2 <=> $numero1);
echo "<br>";

include 'includes/footer.php';
