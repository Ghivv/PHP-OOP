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

    function tahunLahir() {
        return 2024 - $this->age;
    }
}