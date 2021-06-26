  
<?php

class UsuariosController{



public function Alta($request, $response, $args){

    $usr=  new Usuarios();

    

    return $response;
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
     
    $listabody = $request->getParseBody();

    $response->getBody()->Write($listabody['pass']);
     

 
    return $response;

    
}



}


?>