<?php 
class Fruit{
    //properties
    public $name;
    public $color;

    //methods
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
         return $this->color;
    }
}

//creating instances of the class(objects)
$apple = new Fruit($name,$color);
$banana = new Fruit($name,$color);

$apple->set_name("Apple");
$banana->set_name("Banana");
$apple->set_color("red");
$banana->set_color("yellow");

echo $apple->get_name();
echo "<br>";
echo $banana->get_name(); // Corrected variable name
echo "<br>";
echo $apple->get_color();
echo "<br>";
echo $banana->get_color();

//checking if apple is an instance of Fruit
var_dump($apple instanceof Fruit);

?>
