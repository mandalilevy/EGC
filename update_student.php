
<?php 

if (isset($_POST['search'])) {

$valuetosearch=$_POST['value_to_search'];
$sql="SELECT * FROM `student` WHERE CONCAT(`adno`, `name`, `contact`, `alcontact`, `dpt`, `course`, `jd`, `cd`, `lecturer`, `status`, `cst`, `cet`) LIKE '%".$valuetosearch."%' AND dpt='Languages' OR dpt='ICT'"; 
$search_result= filtertable($sql);
}
else{

$sql="SELECT * FROM `student` where dpt='Languages' OR dpt='ICT' ORDER BY `jd`  DESC" ;
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
   
  <div>
  
 <nav class="navbar navbar-expand-lg navbar-primary bg-primary navbar-fixed fixed-top" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>

  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
<ul class="navbar-nav  mt-lg-0 mr-auto">
<li class="nav-item">
    
     <form class="form-inline my-2 my-lg-0" action="update_student.php" method="post">
    
    <input type="text" name="value_to_search" class="form-control mr-sm-2" placeholder="Search Student here">
    <button class="btn btn-success my-2 my-sm-0" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
    
   </form>
  </li>



</ul >

 <ul class="navbar-nav  mt-lg-0 ml-auto">
 
  

         <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="student_management.php">   <i class="fa fa-arrow-left" aria-hidden="true" style="font-weight:bolder;">Back</i></a>
      </li>
    
  
 </ul>
 </div> 
  </div>
</nav>
</div>
<div class="pt-5">
<div class=" pt-sm-1">
  <div class="">
    <div class="w-auto">
        <div class="pl-4 pr-4 table-responsive text-nowrap">
       <table class="table  table-bordered table table-striped table-hover table-responsive table-sm">
    <thead class="w-auto">
<tr>
 
<th scope="col">No.</th>
<th scope="col">Admn No.</th>
<th scope="col"style="font-size: 16px;width: auto;">Name</th>
<th scope="col">Contacts</th>
<th scope="col">Alternative Contacts</th>


<th scope="col">Department</th>
<th scope="col">Course</th>
<th scope="col">Join Date</th>
<th scope="col">Completion Date</th>
<th scope="col">Lecturer</th>

<th scope="col">Class Time Start</th>
<th scope="col">Class Time End</th>
<th scope="col">More Actions</th>


</tr>
</thead>
<tbody>
<?php
 $count=1;

//$query ="SELECT * FROM `officer`";
//$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($search_result)) { 
$cala=$row["status"];

  ?>
<tr><td ><?php echo $count; ?></td>
  <td><?php echo $row["adno"]; ?></td>
<td ><?php echo $row["name"]; ?></td>
<td ><?php echo $row["contact"]; ?></td>
<td ><?php echo $row["alcontact"]; ?></td>
<td ><?php echo $row["dpt"]; ?></td>
<td ><?php echo $row["course"]; ?></td>
<td ><?php echo $row["jd"]; ?></td>
<td ><?php echo $row["cd"]; ?></td>
<td ><?php echo $row["lecturer"]; ?></td>
<td ><?php echo $row["cst"]; ?></td>
<td ><?php echo $row["cet"]; ?></td>




<td style="text-align: center;" >
  <a href="verify.php?off=<?php echo $row["adno"]; ?>"><button class="bg-info"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
</td>



</tr>
<?php 
$_SESSION['student']=$row["adno"]; 
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
