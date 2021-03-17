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
			$query = $this->getAll($this->model);
			$query= $query[0];			
			$this->renderTemplate('about.twig', [

				'name' => $query['name'],
				'experience' => $query['experience'],
				'age' => $query['age']	

			]);	
		}
	} 
