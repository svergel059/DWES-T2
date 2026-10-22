
<?php
abstract class Miembro
{
    private int $id;
    protected $nombre;
    protected $apellidos;
    protected $email;


    public function __construct($nombre, $apellidos, $email, $id)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getid()
    {
        return $this->id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setid($id)
    {
        $this->id = $id;
    }

    public function __toString()
    {
        return "Nombre: " . $this->nombre . ", Apellidos: " . $this->apellidos . ", Email: " . $this->email . ", ID: " . $this->id;
    }
}
?>