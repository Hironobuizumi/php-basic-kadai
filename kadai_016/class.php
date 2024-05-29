<?php

class Food {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo "Price of {$this->name}: {$this->price} yen\n";
    }
}

class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo "Height of {$this->name}: {$this->height} cm\n";
    }
}

$rice = new Food("Rice", 500);
$pasta = new Food("Pasta", 300);

$dog = new Animal("Dog", 60, 15);
$cat = new Animal("Cat", 25, 4);

echo "Food Instances:\n";
print_r($rice);
print_r($pasta);

echo "\nAnimal Instances:\n";
print_r($dog);
print_r($cat);

$rice->show_price();
$pasta->show_price();

$dog->show_height();
$cat->show_height();

?>
