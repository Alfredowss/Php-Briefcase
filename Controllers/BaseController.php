<?php

	namespace App\Controllers;


	class BaseController {
		
		protected $twig; 

		public function __construct(){

			$loader = new \Twig\Loader\FilesystemLoader('../Views');
			$this->twig = new \Twig\Environment($loader, [
    				'cache' => false,
				'debug' => true
			]);	
		}

		protected function renderTemplate($name, $data = []){
			var_dump($name);
			echo $this->twig->render($name, $data);
		}

		protected function getAll($tabla){
			return $tabla::all();		
		}

		protected function setData(){
		
		} 
	}	
