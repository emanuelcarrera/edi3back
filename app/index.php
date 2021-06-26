<?php

error_reporting(-1);
ini_set('display_errors', 1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;
use Slim\Routing\RouteContext;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/accesoADatos/Archivos.php';
require __DIR__ . '/accesoADatos/AccesoDatos.php';
require __DIR__ . '/controllers/usuariosController.php';
require __DIR__ . '/entidades/Usuarios.php';



// Instantiate App
$app = AppFactory::create();
// Add error middleware
$app->addErrorMiddleware(true, true, true);
//header('Access-Control-Allow-Origin:*');
// Enable CORS
$app->add(function (Request $request, RequestHandlerInterface $handler): Response {
    // $routeContext = RouteContext::fromRequest($request);
    // $routingResults = $routeContext->getRoutingResults();
    // $methods = $routingResults->getAllowedMethods();
    
    $response = $handler->handle($request);

    $requestHeaders = $request->getHeaderLine('Access-Control-Request-Headers');

    $response = $response->withHeader('Access-Control-Allow-Origin', '*');
    $response = $response->withHeader('Access-Control-Allow-Methods', 'get,post');
    $response = $response->withHeader('Access-Control-Allow-Headers', $requestHeaders);

    // Optional: Allow Ajax CORS requests with Authorization header
    // $response = $response->withHeader('Access-Control-Allow-Credentials', 'true');

    return $response;
});

$app->get('[/]', \usuariosController::class . ':Listar' );
$app->get('/Usuarios[/]', \usuariosController::class . ':Listar' );
$app->group('/Usuarios', function (RouteCollectorProxy $group) {
    $group->post('/Login', \usuariosController::class . ':Login' );
    $group->post('/Alta', \usuariosController::class . ':Alta' );
    $group->post('/Baja', \usuariosController::class . ':LeerJSONPost' );
    $group->post('/Modificacion', \usuariosController::class . ':LeerJSONPost' );
    //$group->get('/Listar', \usuariosController::class . ':Listar' );
});

$app->run();