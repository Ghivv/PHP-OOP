<?php
require_once "data/Person.php";

// new Person () adalah class
// $person adalah objek
// $person->name = "Syafiq";
// $person->age = 20;
// $person->address = "solo";
$person = new Person( "Syafiq", "solo", 20, "Indonesia" );
var_dump($person);
echo "Tahun kelahiran $person->name adalah tahun " . $person->tahunLahir() . PHP_EOL;
echo "Jumlah Kaki $person->name adalah " . Person::JUMLAH_KAKI . PHP_EOL;
echo "$person->name membutuhkan " . $person->jumlahSandal() . " pasang" . PHP_EOL;
echo "$person->name Tinggal di Negara $person->country" . PHP_EOL;
echo PHP_EOL;


// $fulan = new Person();
// $fulan->name = "Ghivari";
// $fulan->age = 18;
// $fulan->address = "Cibitung";
$fulan = new Person( "Ghivari", "Cibitung", 18, "Indonesia" ); 
var_dump($fulan);
echo "Tahun kelahiran $fulan->name adalah tahun " . $fulan->tahunLahir() . PHP_EOL;
echo "Jumlah Kaki $fulan->name adalah " . Person::JUMLAH_KAKI . PHP_EOL;
echo "$fulan->name membutuhkan " . $fulan->jumlahSandal() . " pasang" . PHP_EOL;
echo "$fulan->name Tinggal di Negara $fulan->country" . PHP_EOL;
echo PHP_EOL;


$fulanah = new Person("Fulanah", "Cikarang", 18);
var_dump($fulanah);
echo "$fulanah->name tinggal di Negara $fulanah->country" . PHP_EOL;
