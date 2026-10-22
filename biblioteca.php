<?php

$libros = [
    "libro1" => [
        "titulo" => "PHP para Principiantes",
        "autor" => "Carlos Ruiz",
        "precio" => 19.99,
        "categoria" => "Desarrollo web"
    ],
    "libro2" => [
        "titulo" => "JavaScript Avanzado",
        "autor" => "Laura García",
        "precio" => 25.99,
        "categoria" => "Desarrollo web"
    ],
    "libro3" => [
        "titulo" => "Algoritmos en Python",
        "autor" => "Miguel Fernández",
        "precio" => 29.99,

        "categoria" => "Algoritmos"
    ]
];
$filtredLibros = array_filter($libros, function ($libro) {
    return $libro['categoria'] === 'Desarrollo web';
});

$discountedlibros = array_map(function ($libro) {
    $libro['precio'] *= 0.85; 
    return $libro;
}, $filtredLibros);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2> listado de todos los libros</h2>
        <table border="1" cellpadding="10" cellspacing="10">
            <tr>


                <th>Título</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Categoría</th>

            </tr>
            <?php foreach ($libros as $libro) { ?>
                <tr>
                  
                    <td><?php echo $libro['titulo']; ?></td>
                    <td><?php echo $libro['autor']; ?></td>
                    <td><?php echo $libro['precio']; ?></td>
                    <td><?php echo $libro['categoria']; ?></td>
                </tr>
            <?php } ?>
    
        </table>
        <h2>Libros de la categoría Desarrollo Web</h2>
        <ol>
            <?php foreach ($filtredLibros as $libro) { ?>
                <li><?php echo $libro['titulo']; ?></li>
            <?php } ?>
        </ol>

</body>

</html>
