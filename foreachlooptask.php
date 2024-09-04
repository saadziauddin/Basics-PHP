<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<?php

$data = array(
array('Owais', 'owais@gmail.com', 18, "Karachi"),
array('Ahmer', 'ahmer@gmail.com', 22, "Islamabad"),
array('Zain', 'zain@gmail.com', 24, "Lahore"),
array('Zubair', 'zubair@gmail.com', 20, "Naran"),
array('Zaheer', 'zaheer@gmail.com', 17, "Skardu")
);

foreach ($data as $value) {
foreach ($value as $item) {
echo "
<div class = 'container'>
    <div class='row'>
    <div class='col-lg-3 col-md-4 col-'>
    <div class='card'>
        <div class='bg-image hover-overlay ripple' data-mdb-ripple-color='light'>
        <img src='https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp' class='img-fluid'/>
        <a href='#!'>
            <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
        </a>
        </div>
        <div class='card-body'>
        <h5 class='card-title>Card title</h5>
        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href='#!' class='btn btn-primary'>Button</a>
        </div>
    </div>
    </div>
    </div>
    </div>";
}
    echo "<br>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>