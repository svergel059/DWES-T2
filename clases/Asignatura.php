<?php
class Asignatura
{
    protected int $id;
    protected string $nombre;
    protected int $creditos;

    public function __construct($id, $nombre, $creditos)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCreditos()
    {
        return $this->creditos;
    
    
    
    
        }
 public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;
    }

    public function __toString()
    {
        return "Nombre: " . $this->nombre . ", Créditos: " . $this->creditos;
    }


public static function crearAsignaturasDeMuestra()
    {
        $asignaturas = [
            new Asignatura(1, "DWES", 7),
            new Asignatura(2, "DWEC", 6),
            new Asignatura(3, "DIW", 4),
            new Asignatura(4, "DAW", 4)
        ];
        return $asignaturas;
    }
}

?>