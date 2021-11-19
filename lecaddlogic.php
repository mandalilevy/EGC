
<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","egc");

$query ="SELECT * FROM `lecturer` WHERE idn='".$_POST['cid']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	
header("Location:addlecturer.php?Empty=The Lecturer is already Registered into the system!!");

	
}
else{

$sql="INSERT INTO `lecturer`(`idn`, `name`, `contact`, `email`, `dpt`, `status`) VALUES('".$_POST['cid']."','".$_POST['cname']."','".$_POST['cont']."','".$_POST['acont']."','".$_POST['dpt']."','".$_POST['stat']."')";

if(mysqli_query($con, $sql)){
header("Location:addlecturer.php?Invalid=Successfully added the Lecturer!");
}

}









 ?>