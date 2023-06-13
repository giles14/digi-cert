<?php
require 'vendor/autoload.php';
use Bramus\Router\Router;
use League\Plates\Engine;


include_once('db.php');



$router = new Router();
$templates = new Engine(__DIR__ . '/templates');
$templates->loadExtension(new League\Plates\Extension\Asset('.' , false));

$router->get('/login', function() use ($templates) { 
    echo $templates->render("login");
    //return 'Hello World!';
 });
$router->post("/verifica", function() use ($templates) {
   $req = $_POST["codigo"]; 
   $resultado = checa_codigo($req);

   $fecha = explode(' ', $resultado["f_inicio"]);
   $resultado['f_inicio'] = $fecha[0];

   //print_r($resultado);
   echo $templates->render("certificados", ["resultado" => $resultado]);
   //echo $req;
});
$router->get('/autorizacion', function() use ($templates) { 
    echo $templates->render("autorizacion");
    
 });

 $router->get('/test2', function() { 
    echo "Hello World";
    return 'Hello World!';
 });

 $router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    echo "<h1>404 Not Found</h1>";
});

 $router->run();
//require_once "web.php";

// Crea una nueva instancia de Plates

