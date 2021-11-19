
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
  <a class="navbar-brand" href="#" style="color: white;font-weight:bolder ;">STUDENT MANAGEMENT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon" style="color: white;"></span> -->
    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>


  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
         <li class="nav-item active">
        <a class="nav-link" href="student_management.php" style="color: black;font-weight: bolder;"><i class="fa fa-arrow-circle-left" style="color:white;font-size: 20px;">Back</i></a>
      </li>
     
    </ul>
  </div>
</nav>
 <div class="col-sm-9 col-md-5 col-lg-10 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-header bg-light">
            <h5 class="card-title text-center" style="color:black">CLEAR STUDENT</h5>
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
            
            <form action="clearelogic.php" method="post">
                  <?php
                
if (isset($_SESSION['user'])) {
$con=mysqli_connect("127.0.0.1","root","","egc");
$query ="SELECT * FROM `student` where adno='".$_SESSION['user']."'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?>
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="code">Student Admission Number</label>
                <input type="text" class="form-control" id="code" aria-describedby="emailHelp" placeholder="Enter Admission Number" value="<?php echo $row["adno"]; ?>" readonly name="cid">
               
              </div>
              <div class="form-group col-md-6">
                <label for="name">Student Name</label>
                <input type="text" class="form-control" id="name" value="<?php echo $row["name"]; ?>" readonly name="cname">
              </div> 
              </div> 
               <div class="form-row">
              <div class="form-group col-md-6">
                <label for="sc">Student Contact</label>
                <input type="text" maxlength="10" class="form-control" id="sc" value="<?php echo $row["contact"]; ?>" readonly name="cont">
              </div>
                 <div class="form-group col-md-6">
                <label for="ac">Alternative Contact</label>
                <input type="text" maxlength="10" class="form-control" id="ac" value="<?php echo $row["alcontact"]; ?>" readonly name="acont">
              </div>
            </div>
               <div class="form-row">
              <div class="form-group col-md-6">
                <label for="dpt" >Department</label>
            
               <input type="text" maxlength="10" class="form-control" id="ac" value="<?php echo $row["dpt"]; ?>" readonly name="dpt">
              </div>
                  <div class="form-group col-md-6">
                <label for="order-details" >Course</label>
            
                <input type="text" maxlength="10" class="form-control" id="ac" value="<?php echo $row["course"]; ?>" readonly name="coz">
              </div>
            </div>
            <div class="form-row">
    <div class="form-group col-md-6">
                <label for="jd">Join Date</label>
                <input type="text" class="form-control" id="jd" value="<?php echo $row["jd"]; ?>" readonly name="jdate">
              </div>
               <div class="form-group col-md-6">
                <label for="cd">Completion Date</label>
                <input type="text" class="form-control" id="cd" value="<?php echo $row["cd"]; ?>" readonly name="cdate">
              </div>
            </div>
             <div class="form-row">
              <div class="form-group col-md-6">
                <label for="lecturer" >Lecturer</label>
            
                <input type="text" class="form-control" id="cd" value="<?php echo $row["lecturer"]; ?>" readonly name="lec">
              </div>
                  <div class="form-group col-md-6">
                <label for="stt">Status</label>
                <input type="text" class="form-control" id="stt" value="Completed" required="" name="stt" readonly="">
              </div>
            </div>
             <div class="form-row">
              <div class="form-group col-md-6">
                <label for="cst">Class Time Start</label>
                <input type="time" class="form-control" id="cst" value="<?php echo $row["cst"]; ?>" readonly  name="cst">
              </div>
                  <div class="form-group col-md-6">
                <label for="cte">Class Time End</label>
                <input type="time" class="form-control" id="cte" value="<?php echo $row["cet"]; ?>" readonly  name="cte" >
              </div>
            <?php }} ?>
            </div>
              <button type="submit" class="btn btn-danger" name="submit">Clear</button>
            </form>
            
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
