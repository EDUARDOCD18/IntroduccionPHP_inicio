<?php include 'includes/header.php';

$carrito = ['tablet', 'tv', 'pc'];
var_dump($carrito);

/* Para ver los contenidos de un array */
echo "<pre>";
var_dump($carrito);
echo "</pre>";

/* Acceder a los elementos de un array */
echo "$carrito[2]";
echo "<br>";

/* Agregar al array de manera manual por el número de índice */
$carrito[3] = "Phone";
echo ($carrito[3]);

/* Agregar elementos al final del array */
array_push($carrito, "Head");
echo "<pre>";
var_dump($carrito);
echo "</pre>";

/* Añadir elementos el inicio del arreglo */
array_unshift($carrito, "Smart watch");
echo "<pre>";
var_dump($carrito);
echo "</pre>";

include 'includes/footer.php';
