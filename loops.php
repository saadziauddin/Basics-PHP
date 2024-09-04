
<?php 
    /*
    loop: Loop Is Used For Reapeatation of code; 
    Types Of loop:
        1 For Loop
        2 While Loop
        3 Do While Loop
        4 Foreach Loop
    */


// <!-- =====For Loop===== -->
// for($i = 1; $i <= 10; $i++){
//     echo $i." - For Loop is Working!<br>";
// }

// <!-- =====For Loop with Condition===== -->
// for($i = 1; $i<=10; $i++){
//     if($i == 5){
//         continue;
//     }else{
//         echo $i."-Hello World<br>";
//     }
// }
   
// for($i = 1; $i <= 10; $i++){
//     if($i == 0){
//         continue;
//     }
//     else{
//         echo "<body style='color: blue;'>Welcome To Programming!</body><br><br>";
//     }
// }


// <!-- =====While Loop===== -->
// $i = 1;
// while($i >= 10){
//     echo $i." - While Loop is Working!<br>";

//     $i++;
// }

// $i = 5;
// while($i>=1){
//         echo $i."<br>";
//     $i--;
// }
// echo "Loop Terminated";


// <!-- =====Do While Loop===== -->
// $i = 1;
// do{
//     echo $i." - Do While Loop is Working!<br>";

//     $i++;
// }
// while($i >= 10)

// $i = 1;
// do{
//     echo "Welcome<br>";
// $i++;
// }while($i<=5);


// <!-- =====Increment===== -->
// $width = 50;
// for($i=1; $i<=5 ;$i++){
//     echo "<img src='aptechlogo.png' width='$width'>";
// $width+=50;
// }


// <!-- =====Nested For Loop===== -->
// for($i=1; $i <= 1; $i++){                           //Outer Loop
//     for($j = 0; $j <= 5; $j++){                     //Inner loop
//         echo $i."&nbsp;&nbsp;".$j."<br>";
//     }
// }


// <!-- =====Foreach Loop===== -->
//Single Dimentional Array
// Multidimentional Array

// ======Single Dimentional Array======
// $Abc = array('Abc','Abc@gmail.com',20,'Shahrah Faisal','4422-4232323-2');

// echo $data[0]."<br>".$data[1];
// foreach($data as $value){
//     echo $value;
// }


// ======Multidimentional Array======
// $data = array(
//         array('Abc',"Abc@gmail.com",20), //[0][0]
//         array('Ali',"Ali@gmail.com",20)  //[1][0]
// );
// echo $data[0][0].$data[0][1].$data[0][2]."<br>".$data[1][0].$data[1][1];
// foreach($data as $value){
//     foreach($value as $item){
//         echo $item;
//     } 
//     echo "<br>";      
// }
?>