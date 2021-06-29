<?php
class Articulos {
    public $idArticulo;
    public $nombreArticulo;
    public $Descripcion;
    public $idUsuario;
    public $foto;


    
public function CrearArticulo($art)
{


    $objAccesoDatos = AccesoDatos::obtenerInstancia();
    $consulta = $objAccesoDatos->prepararConsulta("INSERT INTO `usuarios`(`NumbreUsuario`, `pass`, `nombre`, `Apellido`, `edad` ,`Descripcion`) VALUES ('$usr->nombreUsuario', '$usr->pass', '$usr->nombre', '$usr->papellido',$usr->edad ,'$usr->Descripcion')");
    
    $this->autor;
    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_CLASS, 'Usuarios');
}


public function UpdateUsuario($usr)
{


    $objAccesoDatos = AccesoDatos::obtenerInstancia();
    $consulta = $objAccesoDatos->prepararConsulta("UPDATE `usuarios` SET `NumbreUsuario` =  '$usr->nombreUsuario'  , `pass` = '$usr->pass' , `nombre` = '$usr->nombre' , `Apellido` = '$usr->papellido', `edad` = $usr->edad  ,`Descripcion` = '$usr->Descripcion' WHERE `idUsuario` = $usr->idUsuario");
    
    $this->autor;
    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_CLASS, 'Usuarios');
}
   
public function TodosLosUsaurios()
{


    $objAccesoDatos = AccesoDatos::obtenerInstancia();
    $consulta = $objAccesoDatos->prepararConsulta("select * from `usuarios`");
    
    // $this->autor;
    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_CLASS,'Usuarios');
}

    
public function EliminarUsuario($usr)
{


    $objAccesoDatos = AccesoDatos::obtenerInstancia();
    $consulta = $objAccesoDatos->prepararConsulta("DELETE FROM `usuarios` WHERE `idUsuario` = $usr->idUsuario  ");
    
    $this->autor;
    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_CLASS, 'Usuarios');
}




}




$artuculo = new Articulos;
?>