
<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","egc");

$query ="SELECT * FROM `businesunit` WHERE `Unit`='".$_POST['name']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	
header("Location:new_unit.php?Empty=The Unit is already Registered into the system!!");

	
}
else{

$sql="INSERT INTO `businesunit`(`Course`, `Unit`) VALUES('".$_POST['dpt']."','".$_POST['name']."')";

if(mysqli_query($con, $sql)){
header("Location:new_unit.php?Invalid=Successfully added the Unit!");
}

}









 ?>