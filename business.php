
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
  <a class="navbar-brand" href="#" style="color: white;font-weight:bolder ;">BUSINESS STUDENT MANAGEMENT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon" style="color: white;"></span> -->
    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>


  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
        <a class="nav-link" href="mainstudent.php" style="color: black;font-weight: bolder;"><i class="fa fa-arrow-left" style="color:white;font-size: 20px;">Back</i></a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="add_business.php" style="color: black;font-weight: bolder;"><i class="fa fa-plus-square" style="color:white;font-size: 20px;">Add Student</i></a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="add_student_class_business.php" style="color: black;font-weight: bolder;"><i class="fa fa-graduation-cap" style="color:white;font-size: 20px;">Add Student to Class</i></a>
      </li>
          <li class="nav-item active">
        <a class="nav-link" href="allbusiness.php" style="color: black;font-weight: bolder;"><i class="fa fa-address-card" style="color:white;font-size: 20px;">All Business Students</i></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="clear.php" style="color: black;font-weight: bolder;"><i class="fa fa-trash" style="color:white;font-size: 20px;">Clear Student</i></a>
      </li>
          <li class="nav-item active">
        <a class="nav-link" id="bsrpt" style="color: black;font-weight: bolder;"><i class="fa fa-print" style="color:white;font-size: 20px;cursor: pointer;">Reports</i></a>
      </li>
     
    
    </ul>
  </div>
</nav>

<div id="hide">

<div class="pt-5">
<div class="container jumbotron " style="background-color:white;">
  



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

</div>





</div>
</div>

<div id="myrpt" class="">
<div class="col-sm-6 mx-auto">
        <div class="card">
          <div class="card-header bg-light">
            <h5 class="card-title text-center" style="color:black">PRINT ATTENDANCE REGISTER</h5>
          </div>
         
          <div class="card-body">
            
            <form action="bsrpt.php" method="POST" target="_blank">
          
          
              <div class="form-group">
                <label for="orders" style="font-weight:bolder;">Lecturer</label>
            
                <select id="orders" name="lecc" class="form-control" >
                 
                </select>
              </div>
           
              <div class="form-group ">
                <label for="order-details" style="font-weight:bolder;">Unit</label>
            
                <select id="order-details" name="unt" class="form-control" required="" >
                  
                </select>
              </div>
                   <div class="form-group">
                <label for="dg" style="font-weight:bolder;">Time</label>
                  <select id="tm" name="time" class="form-control">
                <option>Select Time</option>
                <option>8:30 - 10:00</option>
                <option>10:30 - 12:00</option>
                <option>12:00 - 1:30</option>
                <option>5:00 - 6:30</option>
                <option>6:30 - 8:00</option>
                </select>
              </div>
    
              <button type="submit" class="btn btn-outline-success" name="submit"><i class="fa fa-print" aria-hidden="true">Print</i></button>
            </form>
            
          </div>
        </div>
      </div>




</div>






</div>
<style type="text/css">
    #myrpt{
        display: none;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){

        $("#bsrpt").click(function(){
            $("#myrpt").show()
            $("#hide").hide()
        })

    })
</script>
</body>
</html>
 
<script type="text/javascript">
    function getOrders() {
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "get-bslec.php", true);
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
                document.getElementById("orders").innerHTML = html;
            }
        };
    }

    

    // function getDetail(name) {
    //     var ajax = new XMLHttpRequest();
    //     ajax.open("GET", "get-lecturer-detail.php?name=" + name, true);
    //     ajax.send();

    //     ajax.onreadystatechange = function () {
    //         if (this.readyState == 4 && this.status == 200) {
    //             var response = JSON.parse(this.responseText);
    //             var html = "<option>Select Unit</option>";
    //             for (var a = 0; a < response.length; a++) {
    //                 html += "<option value='" + response[a].unit + "'>";
    //                     html += response[a].unit;
    //                 html += "</option>";
                
    //             }
    //             document.getElementById("order-details").innerHTML = html;
    //         }
    //     };

    // }
   function businessunits() {
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "get-lecturer-detail.php", true);
        ajax.send();

        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                var html = "<option>Select Unit</option>";
                for (var a = 0; a < response.length; a++) {
                    html += "<option value='" + response[a].Unit + "'>";
                        html += response[a].Unit;
                    html += "</option>";
                }
                document.getElementById("order-details").innerHTML = html;
            }
        };
    }


  

businessunits()

    getOrders();
   
</script>

<?php
}
else
{
  
  header('Location: index.php');



}
 ?>
