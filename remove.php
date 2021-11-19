
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
  <a class="navbar-brand" href="#" style="color: white;font-weight:bolder ;">STUDENT MANAGEMENT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon" style="color: white;"></span> -->
    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>


  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
        <a class="nav-link" href="clear.php" style="color: black;font-weight: bolder;"><i class="fa fa-arrow-left" style="color:white;font-size: 20px;">Back</i></a>
      </li>
      
    
      
    </ul>
  </div>
</nav>





<div class="container pt-xl-5">
<div class="container ">
  <div class="container">
    <center>
<form action="" method="post">
  <legend>Verify Student Admission Number</legend>
  <div class="form-group row">
<?php
$num=$_GET['off'];
$con=mysqli_connect("127.0.0.1","root","","egc");
$query ="SELECT * FROM `student` where adno='".$_GET['off']."'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?> 
  <div class="mx-auto">
<input type="text" class="" readonly="readonly" name="name" value="<?php echo $row["adno"]; ?>">
<?php } ?>
<input type="submit" name="add" class="btn btn-sm btn-warning float-right" value="Proceed">
    </div>                            
                                </div>
</form>
</center>
</div>
</div>
</div>
<style>
  .group{
    border: none;
    padding: 15px 20px;
    border-radius: 25px;
    background: rgba(255, 255, 255, .1)
  }
</style>
<?php 
//session_start();

if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","egc");
$query ="SELECT * FROM `student` WHERE adno='".$_POST['name']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
 $_SESSION['user']=$_POST['name'];
  header("Location:suspend.php"); 
}
else{
?>
<html>
  <header>
    <title>EXCEL GLOBAL COLLEGE</title>
    <link rel="stylesheet" href="bootstrap.css">
     <link rel = "icon" href = "logo/logo.png" type = "image/x-icon"> 
  </header>
  <body>
    <div class="container">
      <div class="jumbotron">
       <b style="color: red"> Student Does Not Exist!!</b> <br>Make sure you write the correct Student ID!!
      </div>
    </div>
  </body>
</html>

<?php }
}
 ?>














</body>
</html>
 


<?php
}
else
{
  
  header('Location: index.php');



}
 ?>
