
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
   
  <nav class="navbar navbar-expand-lg navbar-success bg-primary fixed-top">
  <a class="navbar-brand" href="#" style="color: white;font-weight:bolder ;">LECTURER MANAGEMENT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon" style="color: white;"></span> -->
    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>


  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
         <li class="nav-item active">
        <a class="nav-link" href="lecturerdashboard.php" style="color: black;font-weight: bolder;"><i class="fa fa-arrow-circle-left" style="color:white;font-size: 20px;">Back</i></a>
      </li>
     
    </ul>
  </div>
</nav>
 <div class="col-sm-9 col-md-5 col-lg-10 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-header bg-light">
            <h5 class="card-title text-center" style="color:black">NEW LECTURER</h5>
          </div>
           <?php 
                 if (@$_GET['Empty']==true)
                 {
                   ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!!</strong> <?php echo $_GET['Empty']?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

                   <?php 
                 }
               ?>

<?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> <?php echo $_GET['Invalid']?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>





                   <?php 
                 }
               ?>
          <div class="card-body">
            
            <form action="lecaddlogic.php" method="post">
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="code">ID Number</label>
                <input type="text" class="form-control" id="code" aria-describedby="emailHelp" placeholder="Enter ID" required="" name="cid">
               
              </div>
              <div class="form-group col-md-6">
                <label for="name"> Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" required="" name="cname">
              </div> 
              </div> 
               <div class="form-row">
              <div class="form-group col-md-6">
                <label for="sc"> Contact</label>
                <input type="text" class="form-control" id="sc" placeholder="Enter Contacts" required="" name="cont" maxlength="10">
              </div>
                 <div class="form-group col-md-6">
                <label for="ac">Email Address</label>
                <input type="email" class="form-control" id="ac" placeholder="Enter Email Address" required="" name="acont">
              </div>
            </div>
               <div class="form-row">
              <div class="form-group col-md-6">
                <label for="dpt" >Department</label>
            
                <select id="dpt" name="dpt" class="form-control">
                  <option>Select Department</option>
                  <option>ICT</option>
                  <option>Languages</option>
                  <option>Business</option>
                </select>
              </div>
                  <div class="form-group col-md-6">
                <label for="csz" >Status</label>
            
                <select id="csz" name="stat" class="form-control">
                  <option>Select Status</option>
                  <option>Full Time</option>
                  <option>Part Time</option>
                  
                </select>
              </div>
            </div>
           
            
              <button type="submit" class="btn btn-success" name="submit">Add</button>
            </form>
            
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
