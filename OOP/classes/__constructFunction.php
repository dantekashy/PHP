<?php
class Fruit{
    public $name;
    public $color;
 //the constructor function initializes the properties of the class
    function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }

    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }

}
$Apple=new Fruit("Apple","orange");
echo $Apple->get_name();
echo "<br>";
echo $Apple->get_color();

?>