  
<?php

class UsuariosController{



public function Alta($request, $response, $args){

    $usr=  new Usuarios();

    $listaDeParametros = $request->getParsedBody();
    $usr->nombreUsuario =  $listaDeParametros['NUsuario'];
    $usr->pass =  $listaDeParametros['pass'];
    $usr->nombre =  $listaDeParametros['Nombre'];
    $usr->papellido =  $listaDeParametros['Apellido'];
    $usr->edad =  $listaDeParametros['Edad'];
    $usr->Descripcion =  $listaDeParametros['Descripcion'];

     $response =  $usr->CrearUsuario($usr);

    return $response ;
}

public function Baja($request, $response, $args){

    $usr=  new Usuarios();

    

    return $response;
}

public function Modificacion($request, $response, $args){

    $usr=  new Usuarios();

    

    return $response;
}
public function Listar($request, $response, $args){

    $response->getBody()->Write("get");
    //$nombre = $args['nombre'];
    //$pass = $args['pass'];

    // $valido =  json_decode(Archivos::leerArchivo('uploads/Dpto'.$provinciaId.'.json'));

    return $response;
}

public function Login($request, $response, $args){
     
    //$listabody = $request->getParseBody();

     $listaDeParametros = $request->getParsedBody();
     $response->getBody()->Write($listaDeParametros['pass']);

    return $response;

    
}



}


?>