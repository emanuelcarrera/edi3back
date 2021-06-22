  
<?php

class UsuariosController{

public function CargarUsuario($nombre,$pass,$apellido,$telefono){

    $usr=  new Usuarios();

    

    return $response;
}

public function Login($request, $response, $args){
    
    $nombre = $args['nombre'];
    $pass = $args['pass'];

    $valido =  json_decode(Archivos::leerArchivo('uploads/Dpto'.$provinciaId.'.json'));

    return $response;
}



}


?>