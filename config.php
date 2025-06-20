<?php 

$con = mysqli_connect('localhost','root','','basics_sir') or die(mysqli_error());

// if($con){
//     echo "Connection Successful";
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