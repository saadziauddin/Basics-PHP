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

<div class="container">
<div class="row-fluid ">

<!-- my php code which uses x-path to get results from xml query. -->
<?php foreach ( $result as $elements) : ?>
<div class="col-sm-4 ">
<div class="card-columns-fluid">
<div class="card  bg-light" style = "width: 22rem; " >
<img class="card-img-top"  src=" <?php echo $elements->pictures->picture[2]->filename  ; ?> " alt="Card image cap">

<div class="card-body">
<h5 class="card-title"><b><?php echo $elements->advert_heading ?></b></h5>
<p class="card-text"><b><?php echo $elements->price_text ?></b></p>
<p class="card-text"><?php echo $elements->bullet1 ?></p>
<p class="card-text"><?php echo $elements->bullet2 ?></p>
<a href="#" class="btn btn-secondary">Full Details</a>
</div>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
</div> <!--container div  -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>