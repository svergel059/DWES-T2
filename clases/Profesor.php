<?php

require_once ('Miembro.php');

class Profesor extends Miembro
{
    private $asignatura;
    private bool $titular = false;

    public function __construct($id, $nombre, $apellidos, $email, $asignatura)
    {
        parent::__construct($nombre, $apellidos, $email, $id);
        $this->asignatura = $asignatura;
        $this->titular = false;
    }

    public function getAsignatura()
    {
        return $this->asignatura;
    }

    public function setAsignatura($asignatura)
    {
        $this->asignatura = $asignatura;
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    public static function crearProfesoresDeMuestra()
    {
        $profesores = [
            new Profesor(1, "Steve", "Wozniak", "steve@apple.com", "DWES"),
            new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", "DIW"),
            new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", "DWEC"),
            new Profesor(4, "Rasmus", "Lerdoff", "rasmus@php.com", "DAW"),
        ];
        return $profesores;
    }
}