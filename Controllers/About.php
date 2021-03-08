<?php


	namespace App\Controllers;

	use App\Models\Users;

	class About extends BaseController{

		private $model;

		public function __construct(){
			parent::__construct();
			$this->model = 	new Users();
		}
		
		public function getView(){
			var_dump($this->getAll($this->model));
			$this->renderTemplate('about.twig', []);	
		}
	} 
