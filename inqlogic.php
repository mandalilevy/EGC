
<?php

$con=mysqli_connect("127.0.0.1","root","","egc");

$act="Not Followed";
$sql="INSERT INTO `inquiries`(`name`, `cont`, `dpt`, `course`, `di`, `dc`, `remarks`,`action`) VALUES('".$_POST['name']."','".$_POST['contact']."','".$_POST['dpt']."','".$_POST['coz']."','".$_POST['di']."','".$_POST['dc']."','".$_POST['rem']."','$act')";

if(mysqli_query($con, $sql)){
header("Location:newinq.php?Invalid=Successfully Saved the Inquiry!");
}
else{
header("Location:newinq.php?Empty=Not Saved!Please write in full form!!");
}



 ?>