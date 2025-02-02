<?php
//create a simple string
$greet ="Hello ";
$name="Zuri";
//concatenate the string
$fullGreet = $greet.$name;
//when concatenating a longer string use a double quote
$intro="Hello I am $name and I love saying $greet";
//print the full greeting
echo $fullGreet;
echo $intro;
//string functions
//ucfirst() converts the first character of a string to uppercase
$greet = "hello";
$greet = ucfirst($greet);
//ucwords() converts the first character of each word to uppercase
$greet = "hello world";
$greet = ucwords($greet);
//strtolower() converts a string to lowercase
$greet = "HELLO";
$greet = strtolower($greet);
//strtoupper() converts a string to uppercase
$greet = "hello";
$greet = strtoupper($greet);
//trim() removes whitespace from the start and end of a string
$greet = "   hello   ";
$greet = trim($greet);
//strlen() returns the length of a string
$greet = "hello";
$length = strlen($greet);
//strpos() returns the position of the first occurrence of a substring
$greet = "hello world";
$position = strpos($greet, "world");
//str_replace() replaces a substring with another substring
$greet = "hello world";
$greet = str_replace("world", "earth", $greet);
//explode() splits a string into an array
$greet = "hello world";
$greet = explode(" ", $greet);
//implode() joins an array into a string
$greet = array("hello", "world");
$greet = implode(" ", $greet);
//substr() returns a portion of a string
$greet = "hello world";
$greet = substr($greet, 6);
//strrev() returns the string reversed
$greet = "hello";
$greet = strrev($greet);
//strpos() returns the position of the first occurrence of a substring
//str_ireplace()


//Multiline text and Line breaks
$longText="Hello my name is Zara,
Daughter to king zubeiya
I am 21 years old";
//to print the string with line breaks
echo nl2br($longText);


?>