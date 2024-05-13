<?php include 'includes/header.php';

$carrito = ["TV", "Tablet", "ps5", "cartera"];

/* in_array - Buscar elementos dentro de un arreglo */
var_dump(in_array("tv", $carrito));
echo "<br>";
var_dump(in_array("ps5", $carrito));
echo "<br>";
var_dump(in_array("ps5", $carrito));

/* Ordenar elementos de un array */
$numeros = [3, 46, 2, 8, 1, 6, 8];
sort($numeros); // De menor a mayor

echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<br>";

rsort($numeros); // De mayor a menor
echo "<pre>";
var_dump($numeros);
echo "</pre>";

/* Ordenar array asociativo */
$cliente = array(
    "saldo" => 400,
    "nombre" => "Helen",
    "tipo" => "corriente"
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

arsort($cliente); // Ordena por valores (orden alfabetico)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

ksort($cliente); // Ordena por llaves (orden alfabetico, A-Z)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

krsort($cliente); // Ordena por llaves (orden alfabetico, Z-A)
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
