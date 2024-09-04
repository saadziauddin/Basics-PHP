<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update - Delete with PHP</title>
</head>

<style>
*{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

h2{
    margin-top: 5;
    color: white;
    text-decoration: underline;
    text-transform: uppercase;
    margin-bottom: 3;
}

table{
	margin-bottom: 2%;
}

table td a{
    text-decoration: none;
    list-style: none;
    color: orange;
    border: 10px;
}

form{
    width: 55%;
}

form input{
    padding: 0.5%;
    margin-bottom: 15;
    border-radius: 15%;
}

a{
	text-decoration: none;
    list-style: none;
    color: orange;
    border: 10px;
}

</style>

<body style="background-color: black; color: white;">

<?php
include "connection.php";
$fetchdata = mysqli_query($connect, 'SELECT * FROM user');
?>

<center>
	<h2 style=" font-family: sans-serif; text-decoration: underline; text-transform: uppercase; margin-top: 2%; margin-bottom: 2%;">Fetching Data from Database</h2>
<table border="1" width="60%" style="text-align: center;">
	<th>Name</th>
	<th>Email</th>
	<th>Password</th>
	<th>Status</th>
	<th>Country</th>
	<th>City</th>
	<th>Age</th>
	<th>Salary</th>
	<th>Date</th>
	<th>Actions</th>
<?php
while ($data = mysqli_fetch_Assoc($fetchdata)){
	// echo $data['StudentName']."<br>";
?>
	<tr>
		<td><?php echo $data['StudentName']; ?></td>
		<td><?php echo $data['Email']; ?></td>
		<td><?php echo $data['Password']; ?></td>
		<td><?php echo $data['StudentStatus']; ?></td>
		<td><?php echo $data['country']; ?></td>
		<td><?php echo $data['city']; ?></td>
		<td><?php echo $data['age']; ?></td>
		<td><?php echo $data['salry']; ?></td>
		<td><?php echo $data['dob']; ?></td>
		<td>
			<a href="phpcode.php?update_id=<?php echo $data['ID']; ?>">[Edit]</a>
			<a href="phpcode.php?delete_id=<?php echo $data['ID']; ?>">[Delete]</a>
		</td>
	</tr>

<?php
}
?>
</table>

<!-- <a href="phpcode.php?insert_id=<?php echo $data['ID']; ?>">[Insert New Data]</a> -->

<h2 style=" font-family: sans-serif; text-decoration: underline; text-transform: uppercase; margin-top: 2%; margin-bottom: 1%;">Insert New Data</h2>

<form action="phpcode.php" method="POST">
	<input type="text" name="name" value="" placeholder="Enter Your Name"><br>
	<input type="email" name="email" value="" placeholder="Enter Your Email"><br>
	<input type="password" name="password" value="" placeholder="Enter Your Password"><br>
	<input type="text" name="status" value="" placeholder="Enter Your Status"><br>
	<input type="text" name="country" value="" placeholder="Enter Your Country"><br>
	<input type="text" name="city" value="" placeholder="Enter Your City"><br>
	<input type="number" name="age" value="" placeholder="Enter Your Age"><br>
	<input type="text" name="salary" value="" placeholder="Enter Your Salary"><br>
	<input type="date" name="date" value="" placeholder="Enter Your DOB"><br>
	<input type="submit" name="insert" value="Insert Data">
</form>

</center>
</body>