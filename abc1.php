<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form with Php</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<body>


<section class="h-100 ">
<form action="abcd.php" method="POST">
<div class="container py-5 h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col">
<div class="card card-registration my-4">
<div class="row g-0">

<!-- <div class="col-xl-6 d-none d-xl-block"><img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" /></div><div class="col-xl-6"> -->

<div class="card-body p-md-5 text-black">
<h3 class="mb-5 text-uppercase text-center">Student registration form</h3>

<div class="row">
<div class="col-md-6 mb-4">
<div class="form-outline">
<input type="text" id="form3Example1m" class="form-control form-control-lg" name="name" />
<label class="form-label" for="form3Example1m">Name</label>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="form-outline">
<input type="text" id="form3Example1n" class="form-control form-control-lg" name="email"/>
<label class="form-label" for="form3Example1n">Email</label>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6 mb-4">
<div class="form-outline">
<input type="text" id="form3Example1m1" class="form-control form-control-lg" name="password"/>
<label class="form-label" for="form3Example1m1">Password</label>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="form-outline">
<input type="date" id="form3Example1n1" class="form-control form-control-lg" name="dob"/>
<label class="form-label" for="form3Example1n1">Date of Birth</label>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6 mb-4">
<div class="form-outline">
<input type="number" id="form3Example1m1" class="form-control form-control-lg" name="age"/>
<label class="form-label" for="form3Example1m1">Age</label>
</div>
</div>
<div class="col-md-6 mb-4">
<div class="form-outline">
<input type="text" id="form3Example1n1" class="form-control form-control-lg" name="address"/>
<label class="form-label" for="form3Example1n1">Address</label>
</div>
</div>
</div>

<div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
<h6 class="mb-0 me-4">Gender: &nbsp;</h6>
<div class="form-check form-check-inline mb-0 me-4">
<input class="form-check-input" type="radio" name="gender" id="femaleGender" value="option1" />
<label class="form-check-label" for="femaleGender">Female</label>
</div>
<div class="form-check form-check-inline mb-0 me-4">
<input class="form-check-input" type="radio" name="gender" id="maleGender" value="option2" />
<label class="form-check-label" for="maleGender">Male</label>
</div>
</div>

<div class="row">
<div class="col-md-6 mb-4">
<select class="select" name="state">
<option value="0">State</option>
<option value="1">Pakistan</option>
<option value="2">Saudi Arabia</option>
<option value="3">India</option>
<option value="4">Bangladesh</option>
</select>
</div>
<div class="col-md-6 mb-4">
<select class="select" name="city">
<option value="0">City</option>
<option value="1">Karachi</option>
<option value="2">Hyderabad</option>
<option value="3">Lahore</option>
<option value="4">Multan</option>
</select>
</div>
</div>

<div class="form-outline mb-4">
<textarea cols="30" rows="5" id="form3Example8" class="form-control form-control-lg" name="fulladdress" placeholder="Enter Your Full Address"></textarea>
</div>

<div class="d-flex justify-content-end pt-3">
<button type="button" class="btn btn-light btn-lg">Reset all</button>
&nbsp;&nbsp;
<input type="submit" class="btn btn-primary btn-lg ms-2"  name='add' value='Submit form'>
<!-- <button type="button" class="btn btn-primary btn-lg ms-2" name="add">Submit form</button> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</section>

<!-- <?php

// if(isset($_GET['add'])){
//     echo "Working";
    // echo $_POST['name'];
    // echo $_POST['email'];
    // echo $_POST['password'];
    // echo $_POST['dob'];
    // echo $_POST['Gender'];
    // echo $_POST['city'];
    // echo $_POST['address'];
// }

?> -->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>