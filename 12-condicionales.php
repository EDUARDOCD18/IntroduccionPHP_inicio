<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

if ($autenticado && $admin) {
    echo 'Usuario autenticado correctamente!';
} else {
    echo 'Usuario no autenticado. Inicie sesión';
}
echo "<br>";

/* if anidado */
$cliente = [
    'nombre' => 'Javier',
    'saldo' => 300,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

if (!empty($cliente)) {
    echo 'El arreglo no está vacío';
    echo "<br>";

    if ($cliente['saldo'] > 0) {
        echo 'Saldo positivo';
        echo "<br>";
    } else {
        echo 'Saldo insuficiente';
        echo "<br>";
    }
} else {
    echo 'El arreglo no exitste';
    echo "<br>";
}

/* else if */
if ($cliente['saldo'] > 200) {
    echo 'Saldo positivo';
    echo "<br>";
} elseif ($cliente['informacion']['tipo'] === 'premium') {
    echo 'Cliente premium';
    echo "<br>";
} else {
    echo "Cliente no definido";
    echo "<br>";
}

/* Switch case */
$tecnologia = "js";

switch ($tecnologia) {
    case 'PHP':
        echo 'PHP. Un excelente lenguaje';
        echo "<br>";
        break;

    case strtolower('JS'):
        echo 'El lenguaje de la web';
        echo '<br>';
        break;

    case 'html':
        echo 'HTML no es un lenguaje';
        echo "<br>";
        break;

    default:
        echo "Lenguaje no reconocido";
        break;
}


include 'includes/footer.php';
