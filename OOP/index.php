<?php  

/**
 * 
 */
// class Hero
// {
	
// 	public $name;
// 	public $power;

// 	public function kick($someone){
// 		return "Kick ".$someone;
// 	}
// }

// $ironMan = new Hero();
// $ironMan->name = "Iron Man";
// $ironMan->power = 120;

// echo $ironMan->name;
// echo "<br/>";
// echo $ironMan->kick("Daisy");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



class TotalBalance{
	public $totalbalance;
	function __construct($totalbalance){
		$this->totalbalance = $totalbalance;
	}
	public function getPercentFromTotal($money){
		return ($money/$this->totalbalance) ;
	}
}

$trade = new TotalBalance(11520);
// echo $trade->totalbalance;
 $amount =   767676*0.21;

// 200000 * $trade->getPercentFromTotal(8000);
echo $amount;

$sql = "INSERT INTO MyGuests (firstname, lastname, amount)
VALUES ('dasd', 'asd', $amount)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
