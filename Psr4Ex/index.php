<?php
use myvendor\sinhvat\dongvat\Cat;
use myvendor\sinhvat\dongvat\Dog;
include './vendor/autoload.php';
$cat = new Cat('Cat');
$cat->run();
$dog = new Dog('Dog');
$dog->run();