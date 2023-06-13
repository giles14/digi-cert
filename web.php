<?php
$router = new \Bramus\Router\Router();

$router->get('/autori', function() { 
    echo $templates->render("autorizacion");
    //return 'Hello World!';
 });

 $router->get('/test2', function() { 
    echo "Hello World";
    return 'Hello World!';
 });

 $router->run();