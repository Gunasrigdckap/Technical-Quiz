<?php

// -----------------------------------------------29----------------------

// echo count(array('apple', 'banana', 'cherry'));




// function generate() {
//     for ($i = 1; $i <= 3; $i++) 
//         yield $i;
// }
// $generator = generate();

// if(is_array($generator))
//   echo "Is Array";
// elseif(is_object($generator))
//   echo "Is Object";
// else
//   echo "Is none of the above";





// $a = "The quick brown fox jumped over the lazy dog.";
// $b = array_map("strtoupper", explode(" ", $a));
// foreach ($b as $value) {
//     print "$value ";}

// $array = array('a' => 'John',
//                'b' => 'Coggeshall',
//                'c' => array('d' => 'John',
//                             'e' => 'Smith'));
// function display($item, $key) {
//     print "$key => $item\n";
// }
// array_walk_recursive($array, "display");


// $a = array(1 => 0, 3 => 2, 4 => 6);
// $b = array(3 => 1, 4 => 3, 6 => 4);
// print_r(array_intersect($a, $b));




// $array = array('a' => 'John',
//                'b' => 'Coggeshall',
//                'c' => array('d' => 'John',
//                             'e' => 'Smith'));
// function something($array) {
//     extract($array);
//     return $c['e'];
// }
// echo something($array);


// $string = "14302";
// $string[$string[2]] = "4";
// echo $string;


// $array_one = array(1,2,3,4,5);
// $array_two = array('A', 'B', 'C', 'D', 'E');
// $array_three = array_combine(array_reverse($array_one), $array_two);	

// print_r($array_three);



// $a = array('one'=>'php', 'two'=>'javascript', 'three'=>'python');
// $b = array('python', 'javascript', 'php');

// if(array_values(array_reverse($a)) === $b)
//   echo 'true';
// else
//   echo 'false';


// function createClosure() {
//     $factor = 10;
//     return function ($value) use ($factor) {
//         return $value * $factor;
//     };
// }

// $closure = createClosure();
// echo $closure(5);



// $array = [1, 2, 3, 4, 5];
// $mapped = array_map(function($item) {
//     return $item * 2;
// }, $array);
// $filtered = array_filter($mapped, function($item) {
//     return $item > 5;
// });
// print_r($filtered);

// $a = '1';
// $b = &$a;
// $b = "2$b";
// echo $a . " " . $b;


// function foo(&$var) {
//     $var++;
// }

// $a = 5;
// foo($a);
// echo $a;

// class Base {
//     public static function who() {
//         echo __CLASS__;
//     }
//     public static function test() {
//         static::who();
//     }
// }

// class Child extends Base {
//     public static function who() {
//         echo __CLASS__;
//     }
// }

// Child::test();

