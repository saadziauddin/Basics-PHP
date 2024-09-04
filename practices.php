<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Practice</title>
</head>
<body>

<?php
// $color = "purple";

// if($color == "blue"){
//     echo "<center><h1 style= 'color: rgb(40, 40, 204);'>Welcome To Php!</h1></center>";
// }
// elseif($color == "orange"){
//     echo "<center><h1 style= 'color: Orange;'>Welcome To Php!</h1></center>";
// }
// elseif($color == "yellow"){
//     echo "<center><h1 style= 'color: Yellow;'>Welcome To Php!</h1></center>";
// }
// elseif($color == "green"){
//     echo "<center><h1 style= 'color: Green;'>Welcome To Php!</h1></center>";
// }
// elseif($color == "purple"){
//     echo "<center><h1 style= 'color: Purple;'>Welcome To Php!</h1></center>";
// }

// else{
//     echo "<center><h1> <span style= 'color: Red;'> Warning! </span> Color Not Match </h1></center>";
// }

// <--- Same in Switch Case --->

// $color = "grey";

// switch($color){
//     case "blue":
//         echo "<center><h1 style= 'color: rgb(40, 40, 204);'>Welcome To Php!</h1></center>";
//     break;

//     case "orange":
//         echo "<center><h1 style= 'color: Orange;'>Welcome To Php!</h1></center>";
//     break;

//     case "yellow":
//         echo "<center><h1 style= 'color: Yellow;'>Welcome To Php!</h1></center>";
//     break;

//     case "green":
//         echo "<center><h1 style= 'color: Green;'>Welcome To Php!</h1></center>";
//     break;

//     default:
//         echo "<center><h1> <span style= 'color: Red;'> Warning! </span> Color Not Match </h1></center>";
//     break;
// }
?>

<?php
// $a = 100;
// $b = 200;
// $c = 100;

// if($a > $b & $a > $c){
//     echo "<center><h1 style= 'color: Blue;'>A is Greater!</h1></center>";
// }

// elseif($b > $a & $b > $c){
//     echo "<center><h1 style= 'color: Blue;'>B is Greater!</h1></center>";
// }

// elseif($c > $a & $c > $b){
//     echo "<center><h1 style= 'color: Blue;'>C is Greater!</h1></center>";
// }

// else{
//     echo "<center><h1 style= 'color: Orange;'>All Values are Equal!</h1></center>";
// }
?>

<?php
// $monthno = 13;

// if($monthno == 1 OR $monthno == 11 OR $monthno == 12){
//     echo "<h2>Winter Season!</h2>";
// }

// elseif($monthno == 2 OR $monthno == 3 OR $monthno == 4){
//     echo "<h2>Autumn Season!</h2>";
// }

// elseif($monthno == 5 OR $monthno == 6 OR $monthno == 7){
//     echo "<h2>Spring Season!</h2>";
// }

// elseif($monthno == 8 OR $monthno == 9 OR $monthno == 10){
//     echo "<h2>Summer Season!</h2>";
// }

// else{
//     echo "<h2> <span style= 'color: Red;'> Warning! </span>Month Number Doesn't Exist!</h2>";
// }
?>

<?php
// $email = "abc@gmail.com";
// $password = "abc123";

// if($email == "abc@gmail.com" AND $password == "abc123"){
//     echo "<h3>Welcome To PHP!</h3>";
// }
// elseif($email == "abc@gmail.com" AND $password != "abc123"){
//     echo "<h3>Incorrect Password!</h3>";
// }
// elseif($email != "abc@gmail.com" AND $password == "abc123"){
//     echo "<h3>Incorrect Email!</h3>";
// }
// else{
//     echo "<h3>Incorrect Both Email and Password!</h3>";
// }
?>

<?php
// $country = "Afghanistan";
// $city = "Qabul";

// if(($city == "Karachi" OR $city == "Hyderabad" OR $city == "Skardu") & $country == "Pakistan"){
//     echo "<h3>Your city is $city in $country!</h3>";
// }
// elseif(($city == "Karachi" OR $city == "Hyderabad" OR $city == "Skardu") & $country != "Pakistan"){
//     echo "<h3>Your city is $city and your country is incorrect!</h3>";
// }

// elseif(($city == "Mumbai" OR $city == "Dehli" OR $city == "Kolkata") & $country == "India"){
//     echo "<h3>Your city is $city in $country!</h3>";
// }
// elseif(($city == "Mumbai" OR $city == "Dehli" OR $city == "Kolkata") & $country != "India"){
//     echo "<h3>Your city is $city and your country is incorrect!</h3>";
// }

// elseif(($city == "Qabul" OR $city == "Afghan" OR $city == "Abcd") & $country == "Afghanistan"){
//     echo "<h3>Your city is $city in $country!</h3>";
// }
// elseif(($city == "Qabul" OR $city == "Afghan" OR $city == "Abcd") & $country != "Afghanistan"){
//     echo "<h3>Your city is $city and your country is incorrect!</h3>";
// }

// else{
//     echo "<h3>Your country and city is Wrong!</h3>";
// }
?>

<?php
// $width = 80;
// for($i = 1; $i <= 5; $i++){
//     echo "<img src='MyPhp/aptechlogo.png' width = $width>";
//     $width += 80; 
// }
?>

<?php
// for($i = 1; $i <= 5; $i++){
//     for($j = 1; $j <= $i; $j++){
//         echo "*";
//     }
//     echo "<br>";
// }
?>

<?php
// $i = 1;
// do{
//     echo "<h3>Do While Loop Working</h3>";
//     $i++;
// }while($i <= 10);
?>

<?php
// $i = 1; 
// while($i <= 5){
//     echo "While Loop Working<br>";
//     $i++;
// }
?>

<?php
// $abcd = array('Umair', 'umair@gmail.com', 'umair123', 'Active');            // ===== Single Dimensional Array =====
// // $abcd = ['Umair', 'umair@gmail.com', 'umair123', 'Active'];

// foreach($abcd as $efgh){
// echo $efgh;                                                                 // ===== Single Loop =====                   
// }

// $abcd = [
//     array('Umair', 'umair@gmail.com', 'umair123', 'Active'),
//     array('Owais', 'owais@gmail.com', 'owais123', 'In Active'),
//     array('Umair', 'umair@gmail.com', 'umair123', 'In Active'),            // ===== Multidimensional Arrays =====
//     array('Umair', 'umair@gmail.com', 'umair123', 'Active'),
//     array('Umair', 'umair@gmail.com', 'umair123', 'In Active')
// ];

// foreach($abcd as $value){
//     foreach($value as $values){
//         echo $values;                                                      // ===== Nested Loop =====
//     }
//     echo "<br>";
// }
?>




</body>
</html>