<?php
/**
 * Class constants can be useful if you need to define some constant data within a class.

*A class constant is declared inside a class with the const keyword.

*A constant cannot be changed once it is declared.

*Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.

*We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:


 *Or, we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name, like here:






*/


 class Goodbye{
    const LEAVING_MESSAGE="Thank you for visiting this site";
 }
  class hello{
    const HI_PEOPLE="Hello welcome to our platform";
    public function welcome(){
        echo self::HI_PEOPLE;
    }
  }

echo Goodbye::LEAVING_MESSAGE;//this will display the message
$hello=new hello();
$hello->welcome();//this will display the message

?>