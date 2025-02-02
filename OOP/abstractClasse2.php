<?php 
//create an class called car that  has three classes Bmw ,volvo and volkswagen inheriting from it and an intro abstract class

//more about Abstract classes

/**
 * bstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

*An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

*An abstract class or method is defined with the abstract keyword:


*When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

*So, when a child class is inherited from an abstract class, we have the following rules:

*The child class method must be defined with the same name and it redeclares the parent abstract method
*The child class method must be defined with the same or a less restricted access modifier
*The number of required arguments must be the same. However, the child class may have optional arguments in addition

 */

abstract class Cars{
    public $name;

    public function __construct($name){
        $this->name=$name;
    }
     abstract public function intro():string;
} 
    
    class Bmw extends Cars{
        public function intro(): string{
         return "This is a $this->name";
        }
    }


    class Volvo extends Cars {
        public function intro() : string {
          return "Proud to be Swedish! I'm a $this->name!";
        }
      }

      class Citroen extends Cars {
        public function intro() : string {
          return "French extravagance! I'm a $this->name!";
        }
      }


      // Create objects from the child classes
$audi = new Bmw("Bmw");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();


?>