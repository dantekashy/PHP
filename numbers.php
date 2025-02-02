<?php
//declaring numbers
$number1 = 10;
$a=5;
$b=5.2;
//Arithmetic operations
echo $number1 + $a;
echo "<br>";
echo $number1 - $a;
echo "<br>";
echo $number1 * $a;
echo "<br>";
echo $number1 / $a;
echo "<br>";
echo $number1 % $a;
echo "<br>";
echo $number1 ** $a;
//Assignment with math operators
echo "<br>";
$number1 += $a;
echo $number1;
echo "<br>";
$number1 -= $a;
echo $number1;
echo "<br>";
$number1 *= $a;
echo $number1;
echo "<br>";
$number1 /= $a;
//Increment and decrement operators
echo "<br>";
$number1++;
echo $number1;
echo "<br>";
$number1--;
echo $number1;

//Number checking functions
echo "<br>";
is_float(1.25);//true
is_double(1.25);//true
is_int(1);//true
is_numeric("3.45");//true
//Conversion
$strNumber="12.45";
$number=(float)$strNumber;
echo $number;
$number3=(int)$strNumber;
var_dump($number3);

//Number functions
echo "<br>";
echo abs(-5);//5
echo "<br>";
echo max(1,2,3,4,5);//5
echo "<br>";
echo min(1,2,3,4,5);//1
echo "<br>";
echo pow(2,3);//8
echo "<br>";
echo sqrt(9);//3
echo "<br>";
echo round(3.7);//4
echo "<br>";
echo ceil(3.7);//4
echo "<br>";
echo floor(3.7);//3
echo "<br>";
echo rand(1,100);//random number between 1 and 100
echo "<br>";
//formating numbers
//given the number below
$number=12345.6789;
//formatting the number to have 2 decimal places
echo number_format($number,2);



?>