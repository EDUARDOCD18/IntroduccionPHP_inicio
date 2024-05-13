<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array("Pedro", "javier", "Katara");
$cliente = [
    "nombre" => "javier",
    "saldo" => 200
];

/* Función empty - Revisa si el array está vació */
var_dump(empty($clientes));
echo "<br>";
var_dump(empty($clientes2));
echo "<br>";
var_dump(empty($clientes3));
echo "<br>";

/* Isset - Revisa si un arreglo ha sido creado o una propiedad ha sido definada */
var_dump(isset($clientes));
echo "<br>";
var_dump(isset($clientes4));
echo "<br>";
var_dump(isset($cliente["nombre"]));
echo "<br>";
var_dump(isset($cliente["cod"]));

include 'includes/footer.php';
