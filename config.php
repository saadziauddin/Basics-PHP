<?php
    // $host = 'localhost';
    // $db = 'basics_sir';
    // $user = 'root';
    // $pass = '';

    $host = 'sql100.infinityfree.com';
    $db = 'if0_39277637_basics_sir';
    $user = 'if0_39277637';
    $pass = 'Saad8058';

    $connect = mysqli_connect($host, $user, $pass, $db);
    // if (!$connect) {
    //     die("Connection failed: " . mysqli_connect_error());
    // } else {
    //     echo "Connection successful!";
    // }

    $fetchAllData  = mysqli_query($con,"SELECT * FROM user");
    // print_r($fetchAllData);

    while($data =  mysqli_fetch_Assoc($fetchAllData)){
        echo $data['StudentName'];
        echo $data['Email'];
        echo $data['Password']."<br>";
    }
    // print_r($data);
?>
