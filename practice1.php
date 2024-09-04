<?php
// $a = 10;
// $b = 20;

// echo $a * $b;

// $color = "yellow";
// if($color == "red"){
//     echo "<h1 style='color: red;'>Welcome To PHP!</h1>";
// }

// elseif($color == "blue"){
//     echo "<h1 style='color: blue;'>Welcome To PHP!</h1>";
// }

// elseif($color == "green"){
//     echo "<h1 style='color: green;'>Welcome To PHP!</h1>";
// }

// elseif($color == "yellow"){
//     echo "<h1 style='color: yellow;'>Welcome To PHP!</h1>";
// }

// else{
//     echo "<h1>Your Color Doesn't Exist!</h1>";
// }

// switch($color){
//     case 'red':
//         echo "<h1 style='color: red;'>Welcome To PHP!</h1>";
//     break;

//     case 'blue':
//         echo "<h1 style='color: blue;'>Welcome To PHP!</h1>";
//     break;

//     case 'green':
//         echo "<h1 style='color: green;'>Welcome To PHP!</h1>";
//     break;

//     case 'yellow':
//         echo "<h1 style='color: yellow;'>Welcome To PHP!</h1>";
//     break;

//     default:
//     echo "<h1>Your Color Doesn't Exist!</h1>";
//     break;
// }

// $width = 50;
// for($i = 1; $i <= 5; $i++){
//     echo "<img src='aptechlogo.png' width=$width>";
// $width+=50;
// }

// $a = 100;
// $b = 100;
// $c = 100;

// if($a > $b & $a > $c){
//     echo "<h1>A is Greater!</h1>";
// }
// elseif($b > $a & $b > $c){
//     echo "<h1>B is Greater!</h1>";
// }
// elseif($c > $a & $c > $b){
//     echo "<h1>C is Greater!</h1>";
// }
// else{
//     echo "<h1>All Values are Equal!</h1>";
// }

$age = 8;

if($age = 10 OR $age <= 18){
    echo "<h2>Young!</h2>";
}

elseif($age == 19 OR $age <= 35){
    echo "<h2>Adult!</h2>";
}

elseif($age == 36 OR $age > 60){
    echo "<h2>OLD!</h2>";
}

else{
    echo "Age Not Exist!";
}
?>