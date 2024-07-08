<?php
//Dedicatedly User defined function
 //1.

    // function p($data){
    //     echo "<pre>";
    //    print_r($data);
    //    echo "</pre>";
    // }
    //    $x = array(
    //     "car1",
    //     "car2",
    //     "car3",
    //     "car4",
    //     "car5",
    //     "car6",
    //    );
    //    $y = array(
    //     "Aman",
    //     "Aman",
    //     "Aman",
    //     "Aman",
    //     "Aman",
    //     "Aman",
    //    );
       
    //    p($x);
    //    p($y);
 // 2.
    // function vote($age)
    // {
    //     if($age>=18 && $age<=65){
    //         return "You can vote!";
    //     }
    //     else{
    //         return "You can not vote!";
    //     }
    // }
    // echo "Age 23 :".vote(23)."</br>";
    // echo "Age 3 :".vote(3)."</br>";
//Types of loop
    // 1.While loop
    // $i=1;
    // while($i<=10){
    //     echo $i."-";
    //     echo "Hello Everyone"."</br>";//10 times Hello Everyone
    //     $i++;
    // };
    // echo "Loop end";

        //PRACTICE : Print TabLe in while loop
        // $i=1;
        // $num=4;
        // while($i<=10){
        //     echo $num." x ".$i." = ".$num*$i."</br>";
        //     $i++;
        // };
        // echo "Loop end";

    //2.For loop
    // for($i=1;$i<=10;$i++){
    //     echo "Hello </br>";  //10 times Hello
    // }
        //PRACTICE: for loop() 
        //1.counting
        // for($i=1;$i<=10;$i++){
        //     echo $i."</br>";
        // }
        //2.reverse counting
        // for($i=10;$i>=1;$i--){
        //     echo $i."</br>";
        // }
        //3.Table
        // $num = 7;
        // for($i=1;$i<=10;$i++){
        //     echo $num." x ".$i." = ".$num*$i."</br>" ;
        // }

    //3.do while
    // $i=1;
    // do{
    //     echo $i." - Hello </br>";  //10 times Hello
    //     $i++;
    // }while($i<=10);

        // PRACTICE: do while loop
        // 1.reverse counting
        // $i=10;
        // do{
        //     echo $i."<br>";
        //     $i--;
        // }while($i>=1);

        // 2.table
        // $i=1;
        // $num=7;
        // do{
        //     echo $num." x ".$i." = ".$num*$i."</br>" ;
        //     $i++;
        // }while($i<=10);
    //4.foreach()
    // $arr = [
    //     "HTML" => "2500",
    //     "CSS" => "2500",
    //     "JS" => "3000",
    //     "PHP" => "4000",
    //     "Laravel" => "7000"
    // ];

    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    
    // foreach($arr as $courses => $fees){
    //     echo "$courses price is $fees rupees <br>";
    // }

// Break statement()
//     for($i=1;$i<=10;$i++){
//         if($i==5){
//             break ;
//         }
//         echo $i."</br>";
//     }
//     echo "Loop end";
// Continue statement()
    // for($i=1;$i<=10;$i++){
    //     if($i==5){
    //         continue ;
    //     }
    //     echo $i."</br>";
    // }
    // echo "5th value skipped due to continue statement & Loop end";
        //PRACTICE:
        //1. odd numbers from 1 to 10
        // for($i=1;$i<=10;$i++){
        //     if($i%2==0){      //$i%2==0 barabar $i%2!=1
        //         continue ;
        //     }
        //     echo $i."</br>";
        // }
        //2. even numbers from 1 to 10
        // for($i=1;$i<=20;$i++){
        //     if($i%2==1){       // $i%2==1 barabar $i%2!=0
        //         continue ;
        //     }
        //     echo $i."</br>";
        // }
        //3.If you want to count numbers
        // $count=0;
        // for($i=1;$i<=20;$i++){
            
        //     if($i%2==1){       // $i%2==1 barabar $i%2!=0
        //         continue ;
        //     }
        //     $count++;
        //     echo "$i </br>";
        // }
        // echo "-------<br>$count<br>-------";

?>