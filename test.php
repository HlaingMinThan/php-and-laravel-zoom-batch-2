<?php

// string "", ''
// $name = "hlaing min than";
// $name = 'hlaing min than';
// echo $name;

//number (int,float)
// $number = 13.5;

// echo $number;

//Boolean (true,false)
// var_dump($name);//debug

// numeric array [] (index number)

// $personal_infos = ['hlaing min than', 21, true, ['laptop', 'phone']];

// echo "<pre>"; //html pre tag can make pretty format for array
// print_r($personal_infos[3][1]); //multidimentional arrays

// associated array

// $personal_infos = [
//     'name' =>  'hlaing min than',
//     'age' => 21,
//     'is_married' => true,
//     'accesories' => ['laptop', 'phone'],
//     'car' => 'swift'
// ];

// echo "<pre>"; //html pre tag can make pretty format for array
// print_r($personal_infos);

// $empty_bottle = null;
// var_dump($empty_bottle);

//operator (+,-,*, /, % . +=)

// $num = 20 % 8; //4
// $num = 20 / 4; // 5

//example program 1
// $total = 0;

// $product1 = 100;
// $product2 = 300;
// $product3 = 400;

// $total +=  $product1;
// $total +=  $product2;
// $total +=  $product3;

// echo $total;

// equal to =(assignment) ,== (equal to) , === (identical)

// $x = '3' === 3;
// var_dump($x);// true

// > < >= <=

// var_dump(5 > 5);

// $x = 10;

// $x--; //9

// echo $x;

//and gate && (true && true => true)
$name = "MGMG";
$age = 20;

//or gate || (true || false => true)

// var_dump(); //false

// echo 30 * 4 + 23 / 56 % 2 * (20 / 5); //homework

//condition

// if ($name === "MGMG" and $age === 50 or false) {
//     echo 'winner';
// } elseif ($name === "aungaung") {
//     echo 'winner';
// } else {
//     echo 'loser';
// }

// $name = "zaw zaw";
// switch ($name) {
//     case "aung aung":
//         echo "hello aung aung";
//         break;
//     case "zaw zaw":
//         echo "hello zaw zaw";
//         break;
//     default:
//         echo "nobody";
// }


// if ($name === "aungaung") {
//     echo "hello aung aung";
// } else if ($name === "zaw zaw") {
//     echo "hello zaw zaw";
// }


//function declaration/statement
// function drive($carName) // parameter
// {
//     echo 'key<br>';
//     echo 'engine start<br>';
//     echo 'vision<br>';
//     echo $carName . ' is driving<br>';
// }

//function expression or anonymous function
// $drive = function ($carName) {
//     echo 'key<br>';
//     echo 'engine start<br>';
//     echo 'vision<br>';
//     echo $carName . ' is driving<br>';
// };


// //lambo
// $drive('lambo');
// //mark2
// $drive('mark2');
// //townace
// $drive('townace');


//calculate age

// input -> output
// birthYear (2000) -> age (23)

//return ???
// function calculateAge($birthYear)
// {
//     //output
//     //algorithm ???
//     // current year - $birthYear
//     $age = 2023 - $birthYear;
//     return  $age; //
// }

// echo 'Your Age is ' . calculateAge(2000);

// // 'Your Age is ';

// echo "My age is " . calculateAge(1980);


//include vs require

// require './calculateAgasdfasfsade.php';

// echo 'this line is running';
// echo calculateAge(2003);

//loop & refactor

function run($name)
{
    echo $name . ' is running<br>';
}


// loop

// $personal_infos = [
//     'name' =>  'hlaing min than',
//     'age' => 21,
//     'is_married' => true,
//     'accesories' => ['laptop', 'phone'],
//     'car' => 'swift'
// ];

// foreach ($personal_infos as   $info) {
//     print_r($info); // ???
// }


require './products.php';
