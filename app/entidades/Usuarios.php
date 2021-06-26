<?php
class Usuarios {
    public $idUsuario;
    public $nombreUsuario;
    public $pass;
    public $nombre;
    public $apellido;
    public $edad;
    public $Descripcion;
    
public function CrearUsuario()
{
    

    $objAccesoDatos = AccesoDatos::obtenerInstancia();
    $consulta = $objAccesoDatos->prepararConsulta("INSERT INTO `usuarios`( `NumbreUsuario`, `pass`, `nombre`, `Apellido`, `edad`, `Descripcion`) VALUES ('Usuario1','1234','Primer','Usario','29','Primer usaurio de prueba')");
    
    $this->autor;
    $consulta->execute();

    return 'crago';
}
   

}





$usuarios = new Usuarios;
?>