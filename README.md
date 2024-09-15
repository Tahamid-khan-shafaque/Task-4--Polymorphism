# Task 4: Polymorphism
# Animal Classes - Polymorphism Demonstration

## Overview

This Task demonstrates the concept of polymorphism in object-oriented programming using PHP. It includes a base abstract `Animal` class and several derived classes for specific animals. Each animal class overrides a common method `makeSound()` to provide its unique implementation.

## File Structure

- `Animal.php`: Contains the abstract base class `Animal`
- `Dog.php`: Contains the `Dog` class, derived from `Animal`
- `Cat.php`: Contains the `Cat` class, derived from `Animal`
- `Cow.php`: Contains the `Cow` class, derived from `Animal`
- `Duck.php`: Contains the `Duck` class, derived from `Animal`
- `main.php`: Main script to demonstrate polymorphism

## Class Descriptions

### Animal (Abstract Class)

The `Animal` class is an abstract base class that defines the common structure for all animal types.

#### Properties:
- `$name` (protected): Stores the name of the animal

#### Methods:
- `__construct($name)`: Constructor to initialize the animal's name
- `getName()`: Returns the animal's name
- `makeSound()` (abstract): Abstract method to be implemented by derived classes

### Dog, Cat, Cow, Duck (Derived Classes)

These classes extend the `Animal` class and provide specific implementations for the `makeSound()` method.

#### Methods:
- `makeSound()`: Returns a string representing the sound made by the specific animal

## Main Script (main.php)

The `main.php` file demonstrates how polymorphism works with the animal classes.

### Functions:
- `animalSound(Animal $animal)`: Takes an `Animal` object and outputs its name and sound

### Usage:
1. Creates instances of different animals
2. Calls the `animalSound()` function with different animal objects

## How to Run

1. Ensure you have PHP installed on your system.
2. Place all the files in the same directory.
3. Run the main script from the command line:
