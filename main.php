<?php

require_once 'Animal.php';
require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Cow.php';
require_once 'Duck.php';

function animalSound(Animal $animal){
    echo $animal->getName() . " says: " . $animal->makeSound() . "\n";
}

//create instances of different animals
$dog = new Dog("Dog");
$cat = new Cat("Cat");
$cow = new Cow("Cow");
$duck = new Duck("Duck");

//Demonstrate polymorphism
animalSound($dog);
animalSound($cat);
animalSound($cow);
animalSound($duck);