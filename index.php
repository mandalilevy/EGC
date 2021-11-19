<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCEL GLOBAL COLLEGE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel = "icon" href = "logo/logo.JPG" type = "image/x-icon"> 
</head>
<body class="container bg-primary">
	<div class="container">
  
               </div>
    <div class="col-sm-6 mx-auto pt-5">
        <div class="card">
          <div class="pt-1">
   <center> <img src="logo/logo.png" alt="" style="height: 50%;width: 60%;"></center>
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
            
            <form action="apploginlogic.php" method="post">

              <div class="form-group">
                <label for="exampleInputEmail1" style="font-weight: bolder;">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your ID" required="" name="name">
               
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" style="font-weight: bolder;">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="" name="pass">
              </div>
    
              <button type="submit" class="btn btn-primary" name="submit">Login</button>
            </form>
            
          </div>
        </div>
      </div>
</body>
</html>