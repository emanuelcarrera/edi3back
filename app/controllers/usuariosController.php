  
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
    $valor =  $args['param'];
   
    //$response->getBody()->Write($valor);
    //objeto enviado via FormData
     //$listaDeParametros = $request->getParsedBody();
     //$response->getBody()->Write($listaDeParametros['pass']);
    //El dato llega por el body como texto
  
    $ObjetoProvenienteDelFront =  json_decode($request->getBody());
    //var_dump($ObjetoProvenienteDelFront);

        //recorro los valores del objeto
        $MiUsuario = new Usuarios();
        foreach ($ObjetoProvenienteDelFront as $atr => $valueAtr) {
            $MiUsuario->{$atr} = $valueAtr;
        }


    $response->getBody()->Write(json_encode($MiUsuario));
    $response= $valor ;
    return $response;

    
}



}


?>