<?php

require_once ('clases/Miembro.php');
require_once ('clases/Asignatura.php');
require_once ('clases/Alumno.php');
require_once ('clases/Profesor.php');
require_once ('clases/TriangleGenerator.php');


// 1) Crear los datos de muestra (métodos estáticos: se llaman con el nombre de la clase)
$asignaturas = Asignatura::crearAsignaturasDeMuestra();
$alumnos = Alumno::crearAlumnosDeMuestra();
$profesores = Profesor::crearProfesoresDeMuestra();

// 2) Matricular a los alumnos (los que se piden en el enunciado)
$alumnos[0]->matricularEnAsignatura($asignaturas[0]);
$alumnos[1]->matricularEnAsignatura($asignaturas[0]);
$alumnos[1]->matricularEnAsignatura($asignaturas[1]);
$alumnos[2]->matricularEnAsignatura($asignaturas[0]);
$alumnos[2]->matricularEnAsignatura($asignaturas[2]);
$alumnos[3]->matricularEnAsignatura($asignaturas[0]);
$alumnos[4]->matricularEnAsignatura($asignaturas[0]);
$alumnos[4]->matricularEnAsignatura($asignaturas[1]);
$alumnos[4]->matricularEnAsignatura($asignaturas[2]);
$alumnos[5]->matricularEnAsignatura($asignaturas[0]);
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);
$alumnos[6]->matricularEnAsignatura($asignaturas[1]); // repetida: se ignora
$alumnos[7]->matricularEnAsignatura($asignaturas[2]);
$alumnos[8]->matricularEnAsignatura($asignaturas[1]);
$alumnos[9]->matricularEnAsignatura($asignaturas[0]);

// 3) Filtros con array_filter.
// array_filter recorre el array y se queda solo con los elementos
// para los que la función devuelve true.

// Alumnos de 23 años o menos
$alumnosMenores = array_filter($alumnos, function ($alumno) {
    return $alumno->getEdad() <= 23;
});

// Alumnos con al menos dos asignaturas
$alumnosConDosAsignaturas = array_filter($alumnos, function ($alumno) {
    return count($alumno->getAsignaturas()) >= 2;
});

// Asignaturas con algún alumno matriculado.
// Para cada asignatura, filtramos los alumnos que están en ella;
// si queda al menos uno, la asignatura se mantiene.
$asignaturasConAlumnos = array_filter($asignaturas, function ($asignatura) use ($alumnos) {
    $matriculados = array_filter($alumnos, function ($alumno) use ($asignatura) {
        return $alumno->estaMatriculadoEn($asignatura);
    });
    return count($matriculados) > 0;
});

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Centro educativo</title>
    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>

    <h2>Alumnos</h2>
    <ul>
        <?php foreach ($alumnos as $alumno): ?>
            <li><?= ((string) $alumno) ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Profesores</h2>
    <ul>
        <?php foreach ($profesores as $profesor): ?>
            <li><?= ((string) $profesor) ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Asignaturas</h2>
    <ul>
        <?php foreach ($asignaturas as $asignatura): ?>
            <li><?= ((string) $asignatura) ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Alumnos &lt;= 23</h2>
    <ul>
        <?php foreach ($alumnosMenores as $alumno): ?>
            <li><?= ((string) $alumno) ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Alumnos con al menos dos asignaturas</h2>
    <ul>
        <?php foreach ($alumnosConDosAsignaturas as $alumno): ?>
            <li><?= ((string) $alumno) ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Asignaturas con algún alumno matriculado</h2>
    <ul>
        <?php foreach ($asignaturasConAlumnos as $asignatura): ?>
            <li><?= ((string) $asignatura) ?></li>
        <?php endforeach; ?>
    </ul>

    
</body>
</html>
