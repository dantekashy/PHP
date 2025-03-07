<?php 

/**
 *Interfaces allow you to specify what methods a class should implement.

*Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

*Interfaces are declared with the interface keyword:
*Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

*Interfaces cannot have properties, while abstract classes can
*All interface methods must be public, while abstract class methods is public or protected
*All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
*Classes can implement an interface while inheriting from another class at the same time


 */
interface Animal{

    public function makeSound();
}

class Cat implements Animal{
    public function makeSound(){
        echo "Meow";
    }
}
class Dog implements Animal{
    public function makeSound(){
        echo "Woof";
        }
    
    }
    $cat = new Cat();
    $cat->makeSound();
    $dog = new Dog();
    $dog->makeSound();

?>