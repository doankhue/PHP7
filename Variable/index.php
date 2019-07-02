<?php  

	$x = 10;
	$y = 100;
	function my_Test($x =93){
		var_dump($x);
		global $x;
		var_dump($x);
	}
	my_Test();



	//static variable

	static $st = array();

	function transformArr(){
		global $st;
		var_dump($st);
		array_push($st, '1zz');
	}
	transformArr();
	transformArr();
	transformArr();

?>