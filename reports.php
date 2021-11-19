
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
    
  <nav class="navbar navbar-expand-lg navbar-success bg-primary navbar-fixed fixed-top">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon" style="color: white;"></span> -->
    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>


  </button>
  <div class="collapse navbar-collapse navbar-fixed" id="navbarNav">
 
    <ul class="navbar-nav mx-auto">
         <li class="nav-item active">
        <a class="nav-link" href="student_management.php" style="color: black;font-weight: bolder;"><i class="fa fa-arrow-circle-left" style="color:white;font-size: 20px;">Back</i></a>
      </li>
     
    </ul>
  </div>
</nav>
<div class="pt-5">
 <div class="col-sm-6 mx-auto pt-5">
        <div class="card">
          <div class="card-header bg-light">
            <h5 class="card-title text-center" style="color:black">PRINT ATTENDANCE REGISTER</h5>
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
            
            <form action="myreport.php" method="POST" target="_blank">
          
          
              <div class="form-group">
                <label for="orders" >Department</label>
            
                <select id="orders" name="dpt" class="form-control" onchange="getDetail(this.value),getlec(this.value)">
                 
                </select>
              </div>
           
              <div class="form-group ">
                <label for="lecturer" >Lecturer</label>
            
                <select id="lecturer" name="lec" class="form-control" required="" >
                  
                </select>
              </div>
                
    
              <button type="submit" class="btn btn-outline-success" name="submit"><i class="fa fa-print" aria-hidden="true">Print</i></button>
            </form>
            
          </div>
        </div>
      </div>
      </div>
      <script type="text/javascript">
    function getOrders() {
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "get-orders.php", true);
        ajax.send();

        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                var html = "<option>Select Department</option>";
                for (var a = 0; a < response.length; a++) {
                    html += "<option value='" + response[a].name + "'>";
                        html += response[a].name;
                    html += "</option>";
                }
                document.getElementById("orders").innerHTML = html;
            }
        };
    }

    

    function getDetail(name) {
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "get-order-detail.php?name=" + name, true);
        ajax.send();

        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                var html = "<option>Select Course</option>";
                for (var a = 0; a < response.length; a++) {
                    html += "<option value='" + response[a].coursename + "'>";
                        html += response[a].coursename;
                    html += "</option>";
                }
                document.getElementById("order-details").innerHTML = html;
            }
        };
    }
function getlec(name) {
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "get-lecturer.php?name=" + name, true);
        ajax.send();

        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                var html = "<option>Select Lecturer</option>";
                for (var a = 0; a < response.length; a++) {
                    html += "<option value='" + response[a].name + "'>";
                        html += response[a].name;
                    html += "</option>";
                }
                document.getElementById("lecturer").innerHTML = html;
            }
        };
    }
    getOrders();
</script>


</body>
</html>
 


<?php
}
else
{
  
  header('Location: index.php');



}
 ?>
