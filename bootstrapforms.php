<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bootstrap Site</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<body>

<div class="container mt-5">

<form action="gettingdata.php" method="POST">
<!-- Email input -->
<div class="form-outline mb-4">
<input type="text" id="form2Example1" class="form-control" name="name" placeholder="Enter Your Name"/>
</div>

<!-- Password input -->
<div class="form-outline mb-4">
<input type="text" id="form2Example2" class="form-control" name="email" placeholder="Enter Your Email"/>
</div>

<div class="form-outline mb-4">
<input type="text" id="form2Example2" class="form-control" name="password" placeholder="Enter Your Password"/>
</div>

<div class="form-outline mb-4">
<input type="date" id="form2Example2" class="form-control" name="dob"/>
</div>

<div class="form-outline mb-4">
<input type="number" id="form2Example2" class="form-control" name="age" placeholder="Enter Your Age"/>
</div>

<div class="form-outline mb-4">
<label for="">Select Gender :  </label>
<input type="radio" name="gender" value="Male"/>  Male
<input type="radio" name="gender" value="Female"/>  Female
</div>

<div class="form-outline mb-4">
<select name="selection">
    <option value="">--Select Anyone--</option>
    <option value="1">Karachi</option>
    <option value="1">Islamabad</option>
    <option value="1">Skardu</option>
    <option value="1">Swaat</option>
</select>
</div>

<div class="form-outline mb-4">
<textarea name="address" id="" cols="30" rows="10" placeholder='Enter Your Full Address'></textarea>
</div>







</div>
</div>

<!-- Submit button -->
<button type="submit" class="btn btn-primary btn-block mb-4" name="submit" >Sign in</button>




<!-- Register buttons -->
<div class="text-center">
<p>Not a member? <a href="#!">Register</a></p>
<p>or sign up with:</p>
<button type="button" class="btn btn-link btn-floating mx-1">
<i class="fab fa-facebook-f"></i>
</button>

<button type="button" class="btn btn-link btn-floating mx-1">
<i class="fab fa-google"></i>
</button>

<button type="button" class="btn btn-link btn-floating mx-1">
<i class="fab fa-twitter"></i>
</button>

<button type="button" class="btn btn-link btn-floating mx-1">
<i class="fab fa-github"></i>
</button>
</div>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>