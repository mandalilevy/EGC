
<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","egc");

$query ="SELECT * FROM `student` WHERE adno='".$_POST['cid']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	
header("Location:new_student.php?Empty=The Student is already Registered into the system!!");

	
}
else{

$sql="INSERT INTO `student`(`adno`, `name`, `contact`, `alcontact`, `dpt`, `course`, `jd`, `cd`, `lecturer`, `status`, `cst`, `cet`)  VALUES('".$_POST['cid']."','".$_POST['cname']."','".$_POST['cont']."','".$_POST['acont']."','".$_POST['dpt']."','".$_POST['coz']."','".$_POST['jdate']."','".$_POST['cdate']."','".$_POST['lec']."','".$_POST['stt']."','".$_POST['cst']."','".$_POST['cte']."')";

if(mysqli_query($con, $sql)){
header("Location:new_student.php?Invalid=Successfully added the Student!");
}

}









 ?>