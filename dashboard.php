
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
  <a class="navbar-brand" href="#" style="color: white;font-weight:bolder ;">EXCEL GLOBAL COLLEGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon" style="color: white;"></span> -->
    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>


  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link" href="mainstudent.php" style="color: black;font-weight: bolder;"><i class="fa fa-graduation-cap" style="color:white;font-size: 20px;">Student Management</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="course_management.php" style="color: black;font-weight: bolder;"><i class="fa fa fa-book" style="color:white;font-size: 20px;">Course Management</i></a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="lecturerdashboard.php" style="color: black;font-weight: bolder;"><i class="fa fa fa-user" style="color:white;font-size: 20px;">Lecturer Management</i></a>
      </li>
          <li class="nav-item active">
        <a class="nav-link" href="inquiries.php" style="color: black;font-weight: bolder;"><i class="fa fa fa-address-book-o" style="color:white;font-size: 20px;">Inquiries Management</i></a>
      </li>
           <li class="nav-item">
     <?php echo '<a href="logout.php?logout" class="nav-link"  style=" color: black;font-family: Verdana, Geneva, Tahoma, sans-serif;text-decoration:none"><i class="fa fa-sign-out" style="color:white;font-size: 20px;">Log Out</i></a>';  ?>
      </li>
    </ul>
  </div>
</nav>
<div class="pt-3">
<div class="container " style="background-color:white">
  



<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-header" style="background-color: #6960EC;">
        <h5 class="card-title" style="color:white;font-weight: bolder;">Total Active Students</h5>
      </div>
      <div class="card-body">
        
           <?php 

 $con=mysqli_connect("127.0.0.1","root","","egc");
$result = mysqli_query($con, "SELECT count(name) AS amm FROM student") ; 
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
        <h5 class="card-title" style="color:white;font-weight: bolder;"> Business Students</h5>
      </div>
      <div class="card-body">
        
           <?php 

 $con=mysqli_connect("127.0.0.1","root","","egc");
$result = mysqli_query($con, "SELECT count(name) AS amm FROM student where dpt='Business'") ; 
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
        <h5 class="card-title" style="color:white;font-weight: bolder;"> ICT Students</h5>
      </div>
      <div class="card-body">
        
           <?php 

 $con=mysqli_connect("127.0.0.1","root","","egc");
$result = mysqli_query($con, "SELECT count(name) AS amm FROM student where dpt='ICT'") ; 
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
        <h5 class="card-title" style="color:white;font-weight: bolder;">Language Students</h5>
      </div>
      <div class="card-body">
        
           <?php 

 $con=mysqli_connect("127.0.0.1","root","","egc");
$result = mysqli_query($con, "SELECT count(name) AS amm FROM student where dpt='Languages'") ; 
$row = mysqli_fetch_assoc($result); 
$sum = $row['amm'];
?>

<p style="color:red;font-size:300%;"><?php echo $sum; ?></p>



      </div>
    </div>
  </div>
</div>

<br>

<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-header" style="background-color: #728FCE;">
        <h5 class="card-title" style="color:white;font-weight: bolder;">No. of Inquiries Today</h5>
      </div>
      <div class="card-body">
        
           <?php 
$date = date('Y-m-d');
 $con=mysqli_connect("127.0.0.1","root","","egc");
$result = mysqli_query($con, "SELECT count(name) AS amm FROM inquiries where di='$date'") ; 
$row = mysqli_fetch_assoc($result); 
$sum = $row['amm'];
?>

<p style="color:red;font-size:300%;"><?php echo $sum; ?></p>



      </div>
    </div>
  </div>
  <div class="col-sm-3">
     <div class="card">
      <div class="card-header" style="background-color:#008000;">
        <h5 class="card-title" style="color:white;font-weight: bolder;"> Admissions Today</h5>
      </div>
      <div class="card-body">
        
           <?php 

 $con=mysqli_connect("127.0.0.1","root","","egc");
 $date = date('Y-m-d');

$result = mysqli_query($con, "SELECT count(name) AS amm FROM student where jd='$date'") ; 
$row = mysqli_fetch_assoc($result); 
$sum = $row['amm'];
?>

<p style="color:red;font-size:300%;"><?php echo $sum; ?></p>



      </div>
    </div>
  </div>
   <div class="col-sm-3">
     <div class="card">
      <div class="card-header" style="background-color: #FF5F1F;">
        <h5 class="card-title" style="color:white;font-weight: bolder;"> No. Lecturers</h5>
      </div>
      <div class="card-body">
        
           <?php 

 $con=mysqli_connect("127.0.0.1","root","","egc");
$result = mysqli_query($con, "SELECT count(idn) AS amm FROM lecturer") ; 
$row = mysqli_fetch_assoc($result); 
$sum = $row['amm'];
?>

<p style="color:red;font-size:300%;"><?php echo $sum; ?></p>



      </div>
    </div>
  </div>
     <div class="col-sm-3">
     <div class="card">
      <div class="card-header" style="background-color: #800000;">
        <h5 class="card-title" style="color:white;font-weight: bolder;">No. of Courses</h5>
      </div>
      <div class="card-body">
        
           <?php 

 $con=mysqli_connect("127.0.0.1","root","","egc");
$result = mysqli_query($con, "SELECT count(courseid) AS amm FROM course ") ; 
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

</body>
</html>
 


<?php
}
else
{
  
  header('Location: index.php');



}
 ?>
