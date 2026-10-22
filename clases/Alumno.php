<?php

require_once ('Miembro.php');

class Alumno extends Miembro
{
    protected int $edad;
    protected array $asignaturas = [];
    protected bool $cursoAbonado = false;

    public function __construct($id, $nombre, $apellidos, $email, $edad)
    {
        parent::__construct($nombre, $apellidos, $email, $id);
        $this->edad = $edad;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function abonarCurso()
    {
        $this->cursoAbonado = true;
    }

    
    public function getAsignatura()
    {
       return  $this -> asignaturas;

    }

    // Nombre usado en index.php y en el enunciado
    public function matricularEnAsignatura(Asignatura $asignatura)
    {
        $this->matricularseEnAsignatura($asignatura);
    }

    public function getAsignaturas()
    {
        return $this->asignaturas;
    }

    public function estaMatriculadoEn(Asignatura $asignatura)
    {
        foreach ($this->asignaturas as $asig) {
            if ($asig->getId() === $asignatura->getId()) {
                return true;
            }
        }
        return false;
    }

    public function matricularseEnAsignatura(Asignatura $asignatura)
    {
        foreach ($this->asignaturas as $asig) {
            if ($asig->getid() === $asignatura->getid()) {
                return; // El alumno ya está matriculado en esta asignatura, no se hace nada
            }
        }
        $this->asignaturas[] = $asignatura;
    }

    public static function crearAlumnosDeMuestra()
    {
        $alumnos = [
            new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22),
            new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25),
            new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24),
            new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23),
            new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21),
            new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26),
            new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20),
            new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22),
            new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23),
            new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24),
        ];

        return $alumnos;
    }

        public function __toString()
{
    return "Nombre: " . $this->nombre . ", Apellidos: " . $this->apellidos . ", Email: " . $this->email . ", Edad: " . $this->edad;
}
}