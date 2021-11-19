
<?php 

if (isset($_POST['search'])) {

$valuetosearch=$_POST['value_to_search'];
$sql="SELECT * FROM `inquiries` WHERE CONCAT(`name`, `cont`, `dpt`, `course`, `di`, `dc`, `remarks`,`action`) LIKE '%".$valuetosearch."%'"; 
$search_result= filtertable($sql);
}
else{
$sql="SELECT * FROM `inquiries` ORDER BY `di`";
$search_result=filtertable($sql);

}

function filtertable($sql)
{
  $con=mysqli_connect("127.0.0.1","root","","egc");
  $filter_result=mysqli_query($con,$sql);
  return $filter_result;
}
 ?>


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
  <a class="navbar-brand" href="#" style="color: white;font-weight:bolder ;">INQUIRIES MANAGEMENT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon" style="color: white;"></span> -->
    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>


  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">

    </ul>
     <ul class="navbar-nav mx-auto">
         <li class="nav-item active">
        <a class="nav-link" href="dashboard.php" style="color: black;font-weight: bolder;"><i class="fa fa-home" style="color:white;font-size: 20px;">Home</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newinq.php" style="color: black;font-weight: bolder;"><i class="fa fa-plus-square" style="color:white;font-size: 20px;">New Inquiry</i></a>
      </li>
   
          <li class="nav-item active">
        <a class="nav-link" href="applicant_reset.php" style="color: black;font-weight: bolder;"><i class="fa fa-print" style="color:white;font-size: 20px;">Reports</i></a>
      </li>
    
    </ul>
  
     <form class="form-inline my-2 my-lg-0" action="inquiries.php" method="post">
    
    <input type="text" name="value_to_search" class="form-control mr-sm-2" placeholder="Search Inquiry Here">
    <button class="btn btn-success my-2 my-sm-0" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
    
   </form>
  </div>
</nav>
<div class="container">
<div class=" pt-sm-1">

   
  <div class="mx-auto">
    <div class="w-auto">
        <div class="pl-4 pr-4 table-responsive text-nowrap">
       <table class="table  table-bordered table table-striped table-hover table-responsive table-sm">
    <thead class="w-auto">
<tr>
 
<th scope="col">No.</th>
<th scope="col">Name</th>
<th scope="col">Contacts</th>
<th scope="col">Department</th>


<th scope="col">Course</th>
<th scope="col">Date Inquired</th>
<th scope="col">Follow Up Date</th>
<th scope="col">Action</th>



</tr>
</thead>
<tbody>
<?php
 $count=1;

//$query ="SELECT * FROM `officer`";
//$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($search_result)) { 


  ?>
<tr><td ><?php echo $count; ?></td>
  <td><?php echo $row["name"]; ?></td>
<td ><?php echo $row["cont"]; ?></td>
<td ><?php echo $row["dpt"]; ?></td>
<td ><?php echo $row["course"]; ?></td>
<td ><?php echo $row["di"]; ?></td>
<td ><?php echo $row["dc"]; ?></td>
<td ><?php echo $row["action"]; ?></td>








</tr>
<?php 

$count++;} ?>

</tbody>
</table>
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
