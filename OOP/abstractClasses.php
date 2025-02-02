<?php
abstract class ParentClass{
    //Abstract method with an argument
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass{
    //Implementing the abstract method
    public function prefixName($name){
        if ($name == "John Doe") {
            $prefix = "Mr.";
          } elseif ($name == "Jane Doe") {
            $prefix = "Mrs.";
          } else {
            $prefix = "";
          }
          return "{$prefix} {$name}";
        }
    }


    $class =new ChildClass();
    echo $class->prefixName("John Doe") . "\n";
    echo $class->prefixName("Jane Doe") . "\n";

?>