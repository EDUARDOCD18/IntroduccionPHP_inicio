<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'tablet',
        'precio' => '200',
        'disponible' => true
    ],
    [
        'nombre' => 'tv',
        'precio' => '2000',
        'disponible' => false
    ],
    [
        'nombre' => 'ipod',
        'precio' => '1500',
        'disponible' => true
    ]
];

foreach ($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto["nombre"]; ?></p>
        <p>Precio: <?php echo "$" . $producto["precio"]; ?> </p>
        <p><?php echo ($producto["disponible"]) ? "Disponible" : "No Disponible"; ?></p>
    </li>
<?php

}


include 'includes/footer.php';
