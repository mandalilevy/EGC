
<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","egc");

$query ="SELECT * FROM `businessstudent` WHERE adno='".$_POST['admno']."' and time='".$_POST['time']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	
header("Location:add_student_class_business.php?Empty=The Student has already been added to another class at that Time!!");

	
}
else{

$sql="INSERT INTO `businessstudent`(`adno`, `name`, `course`, `unit`, `time`,`lecturer`) VALUES('".$_POST['admno']."','".$_POST['sname']."','".$_POST['coz']."','".$_POST['unit']."','".$_POST['time']."','".$_POST['lecc']."')";

if(mysqli_query($con, $sql)){
header("Location:add_student_class_business.php?Invalid=Successfully added the Student to the Class!");
}

}









 ?>