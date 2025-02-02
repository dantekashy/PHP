<?php
//creating an array
$fruits=["Mango","Banana","apple"];
$fruits2=" Mangoes ,pawpaws ,melons";
//printing the whole array
var_dump($fruits);//this is not very readable in the browser
//get the element by index
echo $fruits[0];
//set the element by index
$fruits[0]="Orange";
//check if the array has element at index
isset($fruits[3]);
//Append element
$fruits[]="pineapple";
//print the length of the array
echo count($fruits).'<br>';
//Add element at the end of the array
array_push($fruits,'foo');
//remove element from the end of the array
array_pop($fruits);
//adding an element at the beginning of the array
array_unshift($fruits,'bar');
//remove element from the beginning of the array
array_shift($fruits);
//split a string into an array
$fruits2=explode(',' ,$fruits2);
//combining array elements into string
$fruits3=implode(' , ',$fruits);




?>