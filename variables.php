
<?php
//data types in 
/*
string
number
boolean
object
array
null
resource
 */

 // declaring variables in php and assigning values
 $name = "John Doe";
 $age = 30;
 $isMarried = true;
 $address = array("street" => "123 Main St", "city" => "Anytown
 USA", "state" => "CA", "zip" => "12345");
 $salary=null;
 $height=1.8;
 //print the variable
echo $name .'<br>';
echo $age .'<br>';
echo $isMarried .'<br>';
echo $address['street'] .'<br>';
//printing the whole variable and its type
//we use var_dump to print the whole variable
var_dump($address,$age,$name,$isMarried, $salary,$height).'<br>';
 //print the type of the variable
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMarried).'<br>';
echo gettype($address).'<br>';
echo gettype($salary).'<br>';
 //change the value of the variable
 $name = "Jane Doe";

 //functions for checking the type of the variable
 is_string($name);
 is_int($age);
 is_bool($isMarried);
 is_array($address);
 is_null($salary);
 is_float($height);

 //check if variableis defined
 isset($name);
 isset($age);
 isset($isMarried);
 isset($address);
//constants in php
//we use the function define to define a constant
define('PI', 3.14);
echo PI .'<br>';

//php built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';

?>


 