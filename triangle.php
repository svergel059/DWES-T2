<?php

require_once ('clases/TriangleGenerator.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Triángulo</title>
    <style>
        /* Establecer la fuente predeterminada como monospace */
        body {
            font-family: monospace;
        }
        p {
            margin: 0;
        }
    </style>
</head>
<body>
    <?= TriangleGenerator::generateTriangle(6) ?>
</body>
</html>
