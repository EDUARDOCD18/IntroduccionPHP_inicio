<?php include 'includes/header.php';

$nombreCliente = " Javier Eduardo ";

/* Conocer la extensión de un string */
echo "Extensión de ", strlen($nombreCliente), " caracteres.";
echo "<br>";
var_dump($nombreCliente);
echo "<br>";

/* Eliminar espacios en blanco al principio y al final */
$texto = trim($nombreCliente);
echo strlen($texto);
echo "<br>";

/* Texto a mayúsculas */
echo strtoupper($texto);
echo "<br>";

/* Texto a minúscula */
echo strtolower($texto);
echo "<br>";

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";
var_dump($mail1 === $mail2);
echo "<br>";
var_dump(strtolower($mail1) === strtolower($mail2));
echo "<br>";

/* Reemplazar valores en cadenas de texto */
echo str_replace("Javier", "Javi", $nombreCliente);
echo "<br>";

/* Revisar sin un string existe o no */
echo strpos($nombreCliente, "Javi");
echo "<br>";

/* Templates string */
$tipoCliente = "Premium";
echo "El cliente " .  $nombreCliente .  " es " . $tipoCliente;
echo "<br>";

echo "El cliente {$nombreCliente} es del tipo {$tipoCliente}";

include 'includes/footer.php';
