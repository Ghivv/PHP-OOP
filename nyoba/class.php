<?php

// class Mobil 
// {
//     public $warna;
//     public $merk;

//     public function gas()
//     {
//         echo "mobil maju";
//     }

//     public function rem ()
//     {
//         echo "Mobil berhenti";
//     }

//     $mobil = new Mobil(); // membuat objek lalu disimpan ke variabel $mobil
// }

class Fruit {
    //Propeties
    public $name;
    public $color;

    //Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>"."\n";
echo $banana->get_name();

?>