<?php
class Fruit{
    public $name;
    public $color;
 
    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }

    public function intro(){
        echo "The name of fruit is {$this->name} and it is {$this->color} ";
    }
}

//strawbwerry is inherited from fruit
class Strawbwerry extends Fruit{
    public function message(){
        echo "I love to eat Strawbwerry";
    }
}

$strawbwerry =new Strawbwerry("Strawbwerry","red");
$strawbwerry->intro();
$strawbwerry->message();



?>

