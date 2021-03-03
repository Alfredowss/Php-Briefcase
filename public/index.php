<?php

	ini_set('display_errors', 1);
	ini_set('display_starup_error', 1);
	error_reporting(E_ALL);
	
	require_once '../vendor/autoload.php';
		
	//router
	use Aura\Router\RouterContainer;

	$routerContainer = new RouterContainer();
	
	$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
	    $_SERVER,
	    $_GET,
	    $_POST,
	    $_COOKIE,
	    $_FILES
	);	


	//making the routes
	$map = $routerContainer->getMap();

	$map->get('about', '/about', [
		'App\Controllers\About' => 'getView'
	]);
	



	//get the matcher and match the request to a route
	$matcher = $routerContainer->getMatcher();
	
	$route = $matcher->match($request);

	if(!$route){
		echo 'No route for the request';	
	}else{
		foreach($route->handler as $view => $action){
			$controller = new $view;
			$controller->$action();
		}	
	}
		

