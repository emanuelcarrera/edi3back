<?php
class Usuarios {
    public $idUsuario;
    public $nombreUsuario;
    public $pass;
    public $nombre;
    public $apellido;
    public $edad;
    public $Descripcion;
    
public function CrearUsuario($usr)
{


    $objAccesoDatos = AccesoDatos::obtenerInstancia();
    $consulta = $objAccesoDatos->prepararConsulta("INSERT INTO `usuarios`(`NumbreUsuario`, `pass`, `nombre`, `Apellido`, `Descripcion`) VALUES ('`$usr->nombreUsuario`', '`$usr->pass`', '`$usr->nombre`', '`$usr->papellido`', '`$usr->Descripcion`')");
    
    $this->autor;
    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_CLASS, 'Usuarios');
}
   

}





$usuarios = new Usuarios;
?>