<?php
require_once "data/Person.php";

$person = new Person();
$person->name = "Syafiq";
$person->age = 20;
$person->address = "solo";
var_dump($person);
echo "Tahun kelahiran $person->name adalah tahun " . $person->tahunLahir() . PHP_EOL;

$fulan = new Person();
$fulan->name = "Ghivari";
$fulan->age = 18;
$fulan->address = "Cibitung";
var_dump($fulan);
echo "Tahun kelahiran $fulan->name adalah tahun " . $person->tahunLahir() . PHP_EOL;


// $fulanah = new Person();
// var_dump($fulanah);
