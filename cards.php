<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards with PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container">
<div class="row row-cols-1 row-cols-md-2 g-4">

<?php

$data = array(
    array(1,'Product1',2500,'Available','Pictures/car1.jpg'),
    array(2,'Product2',2500,'Not Available','Pictures/car2.jpg'),
    array(3,'Product3',2500,'Available','Pictures/car3.jpg'),
    array(4,'Product4',2500,'Not Available','Pictures/car4.jpg'),
    array(5,'Product5',2500,'Available','Pictures/car5.jpg'),
    array(6,'Product6',2500,'Not Available','Pictures/img1.jpg'),
    array(7,'Product7',2500,'Available','Pictures/img2.jpg'),
    array(8,'Product8',2500,'Not Available','Pictures/img3.jpg')
);

foreach($data as $value){

?>

  <div class="col mt-5">
    <div class="card">

      <div class="card-body">

      <img class='img-fluid' src="<?php echo $value[4]?>" alt="" height="50%" width="50%">
        <h5 class="card-title">Name:- <?php echo $value[1] ?></h5>
        <h5 class="card-text">Price:- <?php echo $value[2] ?></h5>
        <h5 class="card-text">Status:- <?php echo $value[3] ?></h5>
        <a href="detailpage.php?id=<?php echo $value[0] ?>">See More...</a>

      </div>
    </div>
  </div>

<?php } ?>
  
</div>
</div> -->

<?php
// $data = array('Name' => 'Umair', 'Email' => 'umair@gmail.com', 'Phone' => '0301-2345678', 'Address' => 'Islamabad');
// echo $data['Email'];
?>

                    <!-- Cards with Associative Array -->
<!-- <div class="container">
<div class="row row-cols-1 row-cols-md-4 g-4">

<?php
// $data = array(
//     array('ID' => 1, 'P_Name' => 'Product1', 'P_Price' => 2500, 'Status' => 'Available',        'Image' => 'Pictures/car1.jpg'),
//     array('ID' => 2, 'P_Name' => 'Product2', 'P_Price' => 2500, 'Status' => 'Not Available',    'Image' => 'Pictures/car2.jpg'),
//     array('ID' => 3, 'P_Name' => 'Product3', 'P_Price' => 2500, 'Status' => 'Available',        'Image' => 'Pictures/car3.jpg'),
//     array('ID' => 4, 'P_Name' => 'Product4', 'P_Price' => 2500, 'Status' => 'Not Available',    'Image' => 'Pictures/car4.jpg'),
//     array('ID' => 5, 'P_Name' => 'Product5', 'P_Price' => 2500, 'Status' => 'Available',        'Image' => 'Pictures/car5.jpg'),
//     array('ID' => 6, 'P_Name' => 'Product6', 'P_Price' => 2500, 'Status' => 'Not Available',    'Image' => 'Pictures/img1.jpg'),
//     array('ID' => 7, 'P_Name' => 'Product7', 'P_Price' => 2500, 'Status' => 'Available',        'Image' => 'Pictures/img2.jpg'),
//     array('ID' => 8, 'P_Name' => 'Product8', 'P_Price' => 2500, 'Status' => 'Not Available',    'Image' => 'Pictures/img3.jpg')
// );

// foreach($data as $key => $value){
?>

  <div class="col mt-5">
    <div class="card">

      <div class="card-body">

      <img class='img-fluid' src="<?php echo $value['Image']?>" alt="" height="50%" width="50%">
        <h5 class="card-title">Name:- <?php echo $value['P_Name'] ?></h5>
        <h5 class="card-text">Price:- <?php echo $value['P_Price'] ?></h5>
        <h5 class="card-text">Status:- <?php echo $value['Status'] ?></h5>
        <a href="detailpage.php?id=<?php echo $value[0] ?>">See More...</a> -->

      </div>
    </div>
  </div>

<?php // } ?> 
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>