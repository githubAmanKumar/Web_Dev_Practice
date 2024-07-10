<?php
//Switch case
    // $age=2;
    // switch ($age)
    // {
    //     case 0 :
    //         echo "number is zero";
    //         break;
    //     case 1 :
    //         echo "number is one";
    //         break;
    //     case 2 :
    //         echo "number is two";
    //         break;
    //     case 3 :
    //         echo "number is three";
    //         break;
    //     default :
    //         echo "number is greater than 3";
    // }
    //PRACTICE
    // $age=17;
    // switch ($age)
    // {
    //     case ($age>=18 && $age<=65) :
    //         echo "voter";
    //         break;
    //     case (18-$age==1) :
    //         echo "wait 1 year";
    //         break;
    //     default:
    //         echo "Not a voter";
    // }

//Recursion
    
    // function greet(){
    //     echo "Hello!";
    //     greet();
    // };

    // function countNumber($start){
        
    //     if($start<=10){
    //         echo "$start<br/>";
    //         $start++ ;
    //         countNumber($start);
    //     }
    //     else{
    //         return;
    //     }

    // }
    // countNumber(1);

// Implode and Explode function
    //Implode
    // $arr = 
    // [
    //     'hello','everyone','kaise','ho'
    // ];
    // echo "<pre>";
    // print_r($arr);
    // echo "<pre>";
    // $str = implode("-",$arr);
    // echo $str;
    
    //Explode
    // $str ="A,B,C,D,E,F";
    // echo "$str";
    // $arr = explode(",",$str);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";

    //PRACTICE:
    //1. explode
    // $str ="hello everyone kaise ho";
    // echo "$str";
    // $arr = explode(" ",$str);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";

    //2.explode third element limit
    // $str ="hello everyone kaise ho";
    // echo "$str";
    // $arr = explode(" ",$str,2); //limit=2
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";

//case changing methods
    // $str = "hello everyone";
    // echo $str."----<br>";
    // echo strtolower($str)."<br>";
    // echo strtoupper($str)."<br>";
    // echo lcfirst($str)."<br>";
    // echo ucfirst($str)."<br>";
    // echo ucwords($str)."<br>";

//string replace
//    $str = "aman kumar";
//    echo $str."<br/>";
//    echo str_replace("n","r",$str)."<br/>";
//    echo str_replace("kumar","khatik",$str)."<br/>";
//    echo str_replace("kumar","",$str)."<br/>";
//string reverse
//    $str = "aman kumar";
//    echo $str."<br/>";
//    echo strrev($str);
//substring
//    $demo = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, natus. Expedita illum dolores aut! Asperiores, voluptatum? Porro, earum ipsa, ullam saepe dolores rem totam corporis error ex perferendis quod eius.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, natus. Expedita illum dolores aut! Asperiores, voluptatum? Porro, earum ipsa, ullam saepe dolores rem totam corporis error ex perferendis quod eius.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, natus. Expedita illum dolores aut! Asperiores, voluptatum? Porro, earum ipsa, ullam saepe dolores rem totam corporis error ex perferendis quod eius.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, natus. Expedita illum dolores aut! Asperiores, voluptatum? Porro, earum ipsa, ullam saepe dolores rem totam corporis error ex perferendis quod eius.";
    //echo $demo."-------<br/>";
    //echo substr($demo,0,170);

// .str_word_count(),strlen(),str_repeat()

    // $str = "Hello everyone kaise ho";
    // echo $str."<br><br>";
    // echo "str_word_count = ".str_word_count($str)."<br><br>";
    // echo "strlen = ".strlen($str)."<br><br>";
    // echo "str_repeat HelloX10 = ".str_repeat("<br>Hello",10);

//Random math function
    //echo rand(1000,9999); //like you can generate OTP things with that

//Ceil and Floor function
    // $a=4.3;
    // echo $a."<br>";
    // echo "ceil = ".ceil($a)."<br>";
    // echo "floor = ".floor($a);
   
?>