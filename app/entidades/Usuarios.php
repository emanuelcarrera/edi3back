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
    $consulta = $objAccesoDatos->prepararConsulta("INSERT INTO `usuarios`(`NumbreUsuario`, `pass`, `nombre`, `Apellido`, `edad` ,`Descripcion`) VALUES ('$usr->nombreUsuario', '$usr->pass', '$usr->nombre', '$usr->papellido',$usr->edad ,'$usr->Descripcion')");
    
    $this->autor;
    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_CLASS, 'Usuarios');
}
   
public function TodosLosUsaurios()
{


    $objAccesoDatos = AccesoDatos::obtenerInstancia();
    $consulta = $objAccesoDatos->prepararConsulta("select * from `usuarios`");
    
    $this->autor;
    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_CLASS, 'Usuarios');
}


}





$usuarios = new Usuarios;
?>