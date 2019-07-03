<?php  

/**
 * 
 */
class Hero
{
	
	public $name;
	public $power;

	public function kick($someone){
		return "Kick ".$someone;
	}
}

$ironMan = new Hero();
$ironMan->name = "Iron Man";
$ironMan->power = 120;

echo $ironMan->name;
echo "<br/>";
echo $ironMan->kick("Daisy");
?>