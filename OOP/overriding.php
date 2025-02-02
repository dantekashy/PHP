<?php
//overriding inherited methods
//the intro and constructor  method have been overriden
//the final key word before the word class in a class prevents class inheritance and method overriding
class Fruit{
    public $name;
    public $color;

  public function __construct($name,$color){
    $this->name=$name;
    $this->color=$color;
  }

  public function intro(){
    echo "The fruit is $this->name and the color is $this->color";
  }
}

class Strawberry extends Fruit{
    public $weight;
    public function __construct($name,$color,$weight){
        $this->name=$name;
        $this->color=$color;
        $this->weight=$weight;
    }

    public function intro(){
        echo "The fruit is {$this->name} it is {$this->color} and it weighs {$this->weight} grams";
    }
}

$strawberry=new Strawberry("strawberry","red",50);
$strawberry->intro();

?>