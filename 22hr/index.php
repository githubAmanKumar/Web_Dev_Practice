<?php
//1. Conditional statement if , if-else , Nested if-else.
    //  $age=67;

    //  if($age >= 18){
    //     echo "Can Vote"; 
    //  }
    //  elseif($age==17){
    //     echo "Just 1 year wait";
    //  }
    //  else{
    //     echo "Can't Vote"; 
    //  }

    //  if($age >= 18){
    //     if($age < 66){
    //         echo "Can Vote";
    //     }
    //     else{
    //         echo "Can't Vote";
    //     }
    //  }
    //  else{
    //     echo "Can't Vote"; 
    //  }
//2.Array
    //Index array
    // $arr1 = array("car1","car2","car3");
    // echo "<pre>";
    // print_r($arr1);
    // echo "</pre>";

    // echo $arr1[2];

    // $arr1[3] = "car4";
    // echo "<pre>";
    // print_r($arr1);
    // echo "</pre>";

    // //Associate array
    // $arr2 = array(
    //     'name' => 'aman',
    //     'company' => 'aman',
    //     'age' => '21'
    // );
   
    // echo "<pre>";
    // print_r($arr2);
    // echo "</pre>";

    // $arr2['city'] = 'Saharanpur';

    // echo "<pre>";
    // print_r($arr2);
    // echo "</pre>";

    // //Multi-dimensional array
    // $arr2 = array(
    //     'name' => 'aman',
    //     'company' => 'aman',
    //     'contact' => array('1234567890','0987654321'),
    //     'age' => '21'
    // );
    // echo "<pre>";
    // print_r($arr2);
    // echo "</pre>";

    // //Another method making array w/o using array function
    // $arr3 = [
    // 1,
    // 2,
    // 3,
    // 4,
    // 5,
    // 6,
    // 7 =>[    //can make multidimensional also
    //     7.1,
    //     7.2,
    //     7.3,
    //     7.4,
    //     7.5,
    //     7.6 => [7.61,7.62,7.63."...",7.69], //another multidimensional and etc etc..
    //     7.7,
    //     7.8,
    //     7.9],
    // 8,
    // 9,
    // 0
    // ];
    // echo "<pre>";
    // print_r($arr3);
    // echo "</pre>";

//3.Functions
    //there are 2 typesof functions , Inbuilt and User defined functions
    //we know and already used inbuilt (like print_r) ,Now 

    //User defined functions

    // function greet(){
    //     echo "You called the greet() function";
    // }
    // greet();

    // function greet(){
    //     return "you return greet() function,but its not show on page,then you applied echo out of the functions body just before calling Now You are able to read this text";
    // }
    // echo greet();

    // function greet(){
    // echo "After return in this functions body you can't see furthter statement";
    // return;
    // echo "Hello";
    // }
    // greet();

//4.Important array function
    //4.1 is_array()
    // $cars = array(
    //     0 => "car1",
    //     1 => "car2",
    //     2 => "car3",
    //     3 => "car4",
    //     4 => "car5",
    //     5 => "car6",
    // );
    // var_dump(is_array($cars));//is_array check array or not
    // echo "<pre>";
    // print_r($cars);
    // echo "</pre>";
    // $x=5;
    // if(is_array($x))
    // {
    //     echo "x is array";
    // }
    // else{
    //     echo "x is not array";
    // }

    //4.2 array_search()
    // $cars = array(
    //     0 => "car1",
    //     1 => "car2",
    //     2 => "car3",
    //     3 => "car4",
    //     4 => "car5",
    //     5 => "car6",
    // );
    // echo "<pre>";
    // print_r($cars);
    // echo "</pre>";
    // echo array_search("car3",$cars);
    
    //4.3 array_slice()
    // $cars = array(
    //     0 => "car1",
    //     1 => "car2",
    //     2 => "car3",
    //     3 => "car4",
    //     4 => "car5",
    //     5 => "car6",
    // );
    // echo "<pre>";
    // print_r($cars);
    // echo "</pre>";

    // $newcars = array_slice($cars,2);
    // echo "<pre>";
    // print_r($newcars);
    // echo "</pre>";

    //4.4 array_chunk
    // $cars = array(
    //     0 => "car1",
    //     1 => "car2",
    //     2 => "car3",
    //     3 => "car4",
    //     4 => "car5",
    //     5 => "car6",
    // );
    // echo "<pre>";
    // print_r($cars);
    // echo "</pre>";
    // $chunked = array_chunk($cars,2);
    // echo "<pre>";
    // print_r($chunked);
    // echo "</pre>";

    //4.5 array_pop
    // $cars = array(
    //     0 => "car1",
    //     1 => "car2",
    //     2 => "car3",
    //     3 => "car4",
    //     4 => "car5",
    //     5 => "car6",
    // );
    // echo "<pre>";
    // print_r($cars);
    // echo "</pre>";
    // $poped = array_pop($cars);
    // echo ($poped);

    // 4.6 array_push
    // $cars = array(
    //     0 => "car1",
    //     1 => "car2",
    //     2 => "car3",
    //     3 => "car4",
    //     4 => "car5",
    //     5 => "car6",
    // );
    // echo "<pre>";
    // print_r($cars);
    // echo "</pre>";
    // array_push($cars,"car7","car8");
    // echo "<pre>";
    // print_r($cars);
    // echo "</pre>";

    //4.7 array_key_exist()
    // $cars = array(
    //     "A" => "car1",
    //     "B" => "car2",
    //     "C" => "car3",
    //     "D" => "car4",
    //     "E" => "car5",
    //     "F" => "car6",
    // );
    // echo "<pre>";
    // print_r($cars);
    // echo "</pre>";

    
    // echo "<pre>";
    // print_r(array_keys($cars)); //array_keys
    // echo "</pre>";

    
    // var_dump(array_key_exists("A",$cars));

    //4.8 count()
    // $cars = array(
    //     "A" => "car1",
    //     "B" => "car2",
    //     "C" => "car3",
    //     "D" => "car4",
    //     "E" => "car5",
    //     "F" => "car6",
    // );
    // echo "<pre>";
    // print_r($cars);
    // echo "</pre>";

    // echo count($cars);

    //4.9 array_count_values
    // $cars = array(
    //     "A" => "car1",
    //     "B" => "car2",
    //     "C" => "car3",
    //     "D" => "car4",
    //     "E" => "car5",
    //     "F" => "car5",
    //     "G" => "car6",
    //     "H" => "car6",
    // );
    // echo "<pre>";
    // print_r($cars);
    // echo "</pre>";

    // echo "<pre>";
    // print_r(array_count_values($cars));
    // echo "</pre>";
    

    //4.10 array_merge()
    $cars1 = array(
        "A" => "car1",
        "B" => "car2",
        "C" => "car3",
        "D" => "car4",
    );
    $cars2 = array(
        "E" => "car5",
        "F" => "car6",
        "G" => "car7",
        "H" => "car8",
    );
    $x = array(
        "Aman",
        "Anshi",
        "Kahna",
        "Sona",
        "Soni",
    );
    echo "<pre>";
    print_r($cars1);
    echo "</pre>";
    echo "<pre>";
    print_r($cars2);
    echo "</pre>";
    echo "<pre>";
    print_r($x);
    echo "</pre>";

    echo "<pre>";
    print_r(array_merge($cars1,$cars2,$x));
    echo "</pre>"
?>