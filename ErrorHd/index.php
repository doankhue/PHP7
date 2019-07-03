<?php  
	
	try {
		$error = 'Always throw this error';
		throw new Exception($error);

		// Code following an exception is not executed.
		echo 'Never executed';
	}catch (Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "<br/>";
		echo $e->getCode() , "<br/>";
		echo $e->getFile() , "<br/>";

		echo $e->getLine() , "<br/>";

		// echo $e->getTrace();

		echo $e->getTraceAsString();
	}

	// Continue execution
	echo 'Hello World';

	// function exception_handler($exception) {
 //      	echo "Uncaught exception: " , $exception->getMessage(), "\n";
	// }

	// set_exception_handler('exception_handler');
	// throw new Exception('Uncaught Exception');

	// echo "Not Executed\n";


	class Singleton {
		public static function getInstance() {
	 		static $instance = null;
		 	if (null === $instance) {
		    	$instance = new static();
		 	}
		 return $instance;
		}
		protected function __construct() {
		}

		private function __clone() {
		}

		private function __wakeup() {
		}
	}

	class SingletonChild extends Singleton {
	}

	$obj = Singleton::getInstance();
	var_dump($obj === Singleton::getInstance());

	$anotherObj = SingletonChild::getInstance();
	var_dump($anotherObj === Singleton::getInstance());
	var_dump($anotherObj === SingletonChild::getInstance()); 
?>