
<?php 
session_start();
if (isset($_SESSION['admin']) )
{
  ?>


<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EXCEL GLOBAL COLLEGE</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "logo/logo.JPG" type = "image/x-icon">  
</head>
<body class=" ">
    <div class="">
   <center> <img src="logo/logo.png" alt="" style="height: 20%;width: 30%;"></center>
   </div>
  <nav class="navbar navbar-expand-lg navbar-success bg-primary ">
  <a class="navbar-brand" href="#" style="color: white;font-weight:bolder ;">COURSE MANAGEMENT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon" style="color: white;"></span> -->
    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>


  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
        <a class="nav-link" href="dashboard.php" style="color: black;font-weight: bolder;"><i class="fa fa-home" style="color:white;font-size: 20px;">Home</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="new_course.php" style="color: black;font-weight: bolder;"><i class="fa fa-plus-square" style="color:white;font-size: 20px;">Add Course</i></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="new_unit.php" style="color: black;font-weight: bolder;"><i class="fa fa-plus-square" style="color:white;font-size: 20px;">Add Business Unit</i></a>
      </li>
<!--      <li class="nav-item active">
        <a class="nav-link" href="applicant_reset.php" style="color: black;font-weight: bolder;"><i class="fa fa-edit" style="color:white;font-size: 20px;">Update Course</i></a>
      </li>
          <li class="nav-item active">
        <a class="nav-link" href="applicant_reset.php" style="color: black;font-weight: bolder;"><i class="fa fa-trash" style="color:white;font-size: 20px;">Delete Course</i></a>
      </li> -->
    
         
    </ul>
  </div>
</nav>
<div class="pt-5">
<div class="container jumbotron" style="background-color:white">
  



<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-header" style="background-color: #6960EC;">
        <h5 class="card-title" style="color:white;font-weight: bolder;">Total Courses</h5>
      </div>
      <div class="card-body">
        
           <?php 

 $con=mysqli_connect("127.0.0.1","root","","egc");
$result = mysqli_query($con, "SELECT count(courseid) AS amm FROM course") ; 
$row = mysqli_fetch_assoc($result); 
$sum = $row['amm'];
?>

<p style="color:red;font-size:300%;"><?php echo $sum; ?></p>



      </div>
    </div>
  </div>
  <div class="col-sm-3">
     <div class="card">
      <div class="card-header" style="background-color: #36013F;">
        <h5 class="card-title" style="color:white;font-weight: bolder;"> Business Courses</h5>
      </div>
      <div class="card-body">
        
           <?php 

 $con=mysqli_connect("127.0.0.1","root","","egc");
$result = mysqli_query($con, "SELECT count(courseid) AS amm FROM course where dpt='Business'") ; 
$row = mysqli_fetch_assoc($result); 
$sum = $row['amm'];
?>

<p style="color:red;font-size:300%;"><?php echo $sum; ?></p>



      </div>
    </div>
  </div>
   <div class="col-sm-3">
     <div class="card">
      <div class="card-header" style="background-color: #800080;">
        <h5 class="card-title" style="color:white;font-weight: bolder;"> ICT Courses</h5>
      </div>
      <div class="card-body">
        
           <?php 

 $con=mysqli_connect("127.0.0.1","root","","egc");
$result = mysqli_query($con, "SELECT count(courseid) AS amm FROM course where dpt='ICT'") ; 
$row = mysqli_fetch_assoc($result); 
$sum = $row['amm'];
?>

<p style="color:red;font-size:300%;"><?php echo $sum; ?></p>



      </div>
    </div>
  </div>
     <div class="col-sm-3">
     <div class="card">
      <div class="card-header" style="background-color: #8467D7;">
        <h5 class="card-title" style="color:white;font-weight: bolder;">Language Courses</h5>
      </div>
      <div class="card-body">
        
           <?php 

 $con=mysqli_connect("127.0.0.1","root","","egc");
$result = mysqli_query($con, "SELECT count(courseid) AS amm FROM course where dpt='Languages'") ; 
$row = mysqli_fetch_assoc($result); 
$sum = $row['amm'];
?>

<p style="color:red;font-size:300%;"><?php echo $sum; ?></p>



      </div>
    </div>
  </div>
</div>

</div>





</div>
</div>
</body>
</html>
 


<?php
}
else
{
  
  header('Location: index.php');



}
 ?>
