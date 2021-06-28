  
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

        
   $arrayUsuarios = Usuarios::TodosLosUsaurios();
   $response->getBody()->Write(json_encode($arrayUsuarios));
 

  return $response ->withHeader('Content-Type', 'application/json');
}

public function Login($request, $response, $args){
     
    //$listabody = $request->getParseBody();

     $listaDeParametros = $request->getParsedBody();
     $response->getBody()->Write($listaDeParametros['pass']);

    return $response;

    
}



}


?>