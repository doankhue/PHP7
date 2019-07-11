<?php
/*
* class Tree
* create by William
* 
*/
abstract class Tree{
	// 
	public $name;
	// 
	private $price;
	// 
	public $typeTree;

	public function __construct($name, $typeTree, $amount)
	{
		$this->name = $name;
		$this->typeTree = $typeTree;
		$this->amount = $amount;
	}

	public function set_price($price)
	{
		$this->price = $price;
	}

	public function get_price()
	{
		return $this->price;
	}
}

/**
 * 
 */
class Rose extends Tree
{
	
}

$rose1 = new Rose('rose', 'flower', 20);
$rose1->set_price(2000);
echo $rose1->get_price().'$$';
echo $rose1->name;

/**
 * 
 */
class Tulip extends Tree
{
	
}

$tulip1 = new Tulip('tulip', 'flower', 100);
$tulip1->set_price(2500);
echo $tulip1->name;
echo $tulip1->get_price();