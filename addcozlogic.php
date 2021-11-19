
<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","egc");

$query ="SELECT * FROM `course` WHERE courseid='".$_POST['cid']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	
header("Location:new_course.php?Empty=The Course is already Registered into the system!!");

	
}
else{

$sql="INSERT INTO `course`(`courseid`, `coursename`, `dpt`) VALUES('".$_POST['cid']."','".$_POST['cname']."','".$_POST['dpt']."')";

if(mysqli_query($con, $sql)){
header("Location:new_course.php?Invalid=Successfully added the course!");
}

}









 ?>