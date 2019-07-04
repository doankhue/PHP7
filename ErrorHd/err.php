<?php

function func2($number) {
	throw new Exception('Check1' . $number);

}
function func3() {
	throw new Exception('Check3');

}
function checkNum($number) {
	func2(2);
	func3(2);
	$number > 0;
}

//trigger exception in a "try" block
try {
	checkNum(2);
	//If the exception is thrown, this text will not be shown
	// echo 'If you see this, the number is 1 or below';
}

//catch exception
 catch (Exception $e) {
	echo 'Message: ' . $e->getMessage();
}