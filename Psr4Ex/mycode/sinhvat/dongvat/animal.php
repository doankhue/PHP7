<?php

namespace myvendor\sinhvat\dongvat;


/**
 * 
 */
class Animal
{
	public $animal;
	public function __construct($animal){
		$this->animal = $animal;
	}
	public function run(){
		echo $this->animal." Run";
	}
}