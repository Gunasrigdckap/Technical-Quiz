<?php

// ----------------------------------------------june 5--------------------------



// class Person 
// {
//     function getName() { return "Bob"; }
//     function getAge() { return 44; }
//     function __toString() {
//         $desc = $this->getName();
//         $desc .= " (age ".$this->getAge().")";
//         return $desc;
//     }

// }

// $person = new Person();
// print $person;




// class MyClass {
//     public $value = 10;
//     public function display() {
//         echo $this->value;
//     }
// }

// $obj = new MyClass();
// $obj->value = 20;
// $obj->display();



// class ParentClass {
//     public function display() {
//         echo "Parent";
//     }
// }
// class ChildClass extends ParentClass {
//     public function display() {
//         echo "Child";
//     }
// }
// $obj = new ChildClass();
// $obj->display();


class MyClass {
     static $value = 10;
     function display() {
        echo self::$value;
    }
}

MyClass::$value = 20;
$obj = new MyClass();
$obj->display();

// class MyClass {
//     public static function display() {
//         return "MyClass";
//     }
// }
// class AnotherClass extends MyClass {
//     public static function display() {
//        echo  parent::display();
//         echo " AnotherClass";
//     }
// }
// AnotherClass::display();



// function myFunction()
// {
//     $x = 5;
//     echo "Result1: $x , ";
// }
// myFunction();
// echo "Result2: $x";

// function demo(){
// return "hi";
// }
// echo demo();
// $a = 5;
// $b = 10;

// echo ("$a, $b+10");

// echo "10"+"10";

// $str = addcslashes("IncludeHelp","l");
// echo($str); 

// echo ucwords("Hi, there how are you?");

?>

