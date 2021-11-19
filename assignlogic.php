
<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","egc");

$query ="SELECT * FROM `assignunit` WHERE `lecturer`='".$_POST['lec']."' AND `time`='".$_POST['time']."' ";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	
header("Location:assignunit.php?Empty=The Lecturer is held up at this time!!");

	
}
else{

$sql="INSERT INTO `assignunit`(`lecturer`, `unit`, `time`) VALUES('".$_POST['lec']."','".$_POST['unit']."','".$_POST['time']."')";

if(mysqli_query($con, $sql)){
header("Location:assignunit.php?Invalid=Successfully Assigned the Unit!");
}

}









 ?>