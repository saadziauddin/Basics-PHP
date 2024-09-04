<body style="background-color: black; color: white;">
<?php
if (isset($_GET['delete_id'])) {
	include "connection.php";
	$delete = $_GET['delete_id'];
	mysqli_query($connect,"DELETE FROM user WHERE ID = '$delete'");

        echo " <script>
                alert('Data Deleted Successfully');
                location.assign('updatedelete.php')
                </script> ";

}


if (isset($_GET['update_id'])) {
	include "connection.php";
	$update = $_GET['update_id'];
	$fetchalldata = mysqli_query($connect, 'SELECT * FROM user');
	$updatedata = mysqli_fetch_Assoc($fetchalldata);
?>

<center>
<h2 style=" font-family: sans-serif; text-decoration: underline; text-transform: uppercase; margin-top: 2%; margin-bottom: 1%;">Update Form</h2>

<form action="" method="POST">
	<input type="hidden" name="id" value="<?php echo $updatedata['ID'] ?>"><br>
	<input type="text" name="name" value="<?php echo $updatedata['StudentName'] ?>"><br>
	<input type="email" name="email" value="<?php echo $updatedata['Email'] ?>"><br>
	<input type="password" name="password" value="<?php echo $updatedata['Password'] ?>"><br>
	<input type="text" name="status" value="<?php echo $updatedata['StudentStatus'] ?>"><br>
	<input type="text" name="country" value="<?php echo $updatedata['country'] ?>"><br>
	<input type="text" name="city" value="<?php echo $updatedata['city'] ?>"><br>
	<input type="number" name="age" value="<?php echo $updatedata['age'] ?>"><br>
	<input type="text" name="salary" value="<?php echo $updatedata['salry'] ?>"><br>
	<input type="date" name="date" value="<?php echo $updatedata['dob'] ?>"><br>
	<input type="submit" name="update" value="Save & Close">
</form>
</center>

<?php } ?>

<?php
if (isset($_POST['update'])){
	include "connection.php";
	// $update = $_POST['update'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $date = $_POST['date'];

	mysqli_query($connect,"UPDATE user SET StudentName = '$name', Email = '$email', Password = '$password', StudentStatus = '$status', country = '$country', city = '$city', age = '$age', salry = '$salary', dob = '$date' WHERE ID = '$id' ");
	header('location:updatedelete.php');
}
?>


<?php
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];
    $role = 2;

    if($password == $repeatpassword){
        include "connection.php";
        $insert  = mysqli_query($connect,"INSERT INTO register (Name,Email,Password,Role)VALUES('$name','$email','$password','$role')");

        echo " <script>
                alert('Account Created Successfully');
                location.assign('registrationform.php')
                </script> ";

    }else{
        echo "  <script>
                alert('Password And RetypePassword Must Match');
                location.assign('registrationform.php')
                </script>";
    }
}
?>


<?php

if (isset($_POST['login'])) {
	include "connection.php";
	$email = $_POST['email'];
	$password = $_POST['password'];
	$fetchdata = mysqli_query($connect, "SELECT * FROM register WHERE Email = '$email' AND Password = '$password' ");

	if($isdataexist = mysqli_num_rows($fetchdata) > 0){
		echo "<script>
				alert('Login Successfull');
				location.assign('index.php')
			</script>";
	}else{
		echo "<script>
		alert('Account Not Exist');
		location.assign('index.php')
			</script>";
}}
?>

<?php
if (isset($_POST['insert'])) {
	include "connection.php";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$status = $_POST['status'];
	$country = $_POST['country'];
	$city = $_POST['city'];
	$age = $_POST['age'];
	$salary = $_POST['salary'];
	$date = $_POST['date'];

	$insert = mysqli_query($connect, "INSERT INTO user 
		(StudentName,Email,Password,StudentStatus,country,city,age,salry,dob) 
		VALUES
		('$name', '$email', '$password', '$status', '$country', '$city', '$age', '$salary', '$date')");

        echo " <script>
                alert('Data Inserted Successfully');
                location.assign('updatedelete.php')
                </script> ";
    }
?>
</body>