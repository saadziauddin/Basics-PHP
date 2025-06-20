<?php
// $connect = mysqli_connect('localhost','root','','04g02g') OR die(mysqli_error());

// // if($connect){
// //     echo "Connection Successfull";
// // }

// $fetchData = mysqli_query($connect,"select * from user");
// // print_r($fetchData);

// // $finalData = mysqli_fetch_Assoc($fetchData);
// // print_r($finalData);

// while($finalData = mysqli_fetch_Assoc($fetchData)){
//     echo $finalData['StudentName'];
//     echo $finalData['Email'];
//     echo $finalData['Password'];
//     echo $finalData['StudentStatus'];
//     echo $finalData['country'];
// }
?>

<?php
$connect = mysqli_connect('localhost','root','','basics_sir') OR die(mysqli_error());

$fetchData = mysqli_query($connect,"select * from user");
?>

<br><center><h2>User Table Data</h2>
<table border="1" cellpadding="2" width="50%">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Status</th>
    <th>Country</th>
    <th>City</th>
    <th>Age</th>
    <th>Salary</th>
    <th>Date</th>


<?php
while($userData = mysqli_fetch_assoc($fetchData)){
?>
    <tr>
        <td><?php echo $userData['ID'] ?></td>
        <td><?php echo $userData['StudentName'] ?></td>
        <td><?php echo $userData['Email'] ?></td>
        <td><?php echo $userData['Password'] ?></td>
        <td><?php echo $userData['StudentStatus'] ?></td>
        <td><?php echo $userData['country'] ?></td>
        <td><?php echo $userData['city'] ?></td>
        <td><?php echo $userData['age'] ?></td>
        <td><?php echo $userData['salry'] ?></td>
        <td><?php echo $userData['dob'] ?></td>
    </tr>
<?php
}
?>
</table>
</center>


<?php
$fetchData = mysqli_query($connect,"select * from product");
?>
<br><center><h2>Product Table Data</h2>
<table border="1" cellpadding="2" width="50%">
    <th>ID</th>
    <th>User ID</th>
    <th>Product Name</th>
    <th>Product Price</th>

<?php
while($productsData = mysqli_fetch_assoc($fetchData)){
?>
    <tr>
        <td><?php echo $productsData['id'] ?></td>
        <td><?php echo $productsData['u_id'] ?></td>
        <td><?php echo $productsData['p_name'] ?></td>
        <td><?php echo $productsData['p_price'] ?></td>
    </tr>
<?php
}
?>
</table>
</center>


<?php
$fetchData = mysqli_query($connect,"select * from shipment");
?>
<br><center><h2>Shipment Table Data</h2>
<table border="1" cellpadding="2" width="50%">
    <th>Shipment ID</th>
    <th>User ID</th>
    <th>Shipment Status</th>

<?php
while($shipmentsData = mysqli_fetch_assoc($fetchData)){
?>
    <tr>
        <td><?php echo $shipmentsData['shipment_id'] ?></td>
        <td><?php echo $shipmentsData['u_id'] ?></td>
        <td><?php echo $shipmentsData['s_status'] ?></td>
    </tr>
<?php
}
?>
</table>
</center>


<?php
$fetchData = mysqli_query($connect,"select * from validation_age");
?>
<br><center><h2>Validation Table Data</h2>
<table border="1" cellpadding="2" width="50%">
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>

<?php
while($validationData = mysqli_fetch_assoc($fetchData)){
?>
    <tr>
        <td><?php echo $validationData['id'] ?></td>
        <td><?php echo $validationData['name'] ?></td>
        <td><?php echo $validationData['age'] ?></td>
    </tr>
<?php
}
?>
</table>
</center>