<?php

// class -> buah
/*
objek   -> pisang
        -> apel
        -> mangga
*/

class Person
{
    var string $name;
    var int $age;
    var string $address;
    var string $country = "Indonesia"; // Default Value

    const JUMLAH_KAKI = 2;

    function __construct(
        string $name,
        string $address,   
        int $age,
        string $country = "Indonesia", // Default Value
    )
    {
        $this->name = $name; 
        $this->age = $age; 
        $this->address = $address;
        $this->country = $country;
    }
    function tahunLahir() {
        return 2024 - $this->age; 
        // variable $this digunakan untuk objek
    }

    function jumlahSandal() {
        return self::JUMLAH_KAKI / 2;   
        // variable self digunakan untuk class
        // self:: digunakan untuk mengakses constant     
    }
}