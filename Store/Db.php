<?php

	namespace App\Store;
	
 	use Illuminate\Database\Capsule\Manager as Capsule;


	class Db{

		static private $connection = false;

		public function __construct(){
			if(!self::$connection){

				$capsule = new Capsule;
				$capsule->addConnection([
   				 	'driver'    => 'mysql',
   				 	'host'      => 'localhost',
   				 	'database'  => 'Briefcase',
   				 	'username'  => 'root',
   				 	'password'  => '',
   				 	'charset'   => 'utf8',
   				 	'collation' => 'utf8_unicode_ci',
   				 	'prefix'    => '',
				]);			

				$capsule->setAsGlobal();
				
				$capsule->bootEloquent();
				self::$connection = true;
			}


				
		}		
	}
