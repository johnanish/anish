<?php

require( 'bootstrap.php' );

//var_dump( $_SERVER );

$router = new RouterController();
$route = $router->route( "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}" );
//var_dump( $route );

$controllerName = $route['controller'].'Controller';
$controller = new $controllerName;

$actionName = $route['action'].'Action';
$controller->$actionName();
