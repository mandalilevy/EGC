
<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","egc");


$sql="INSERT INTO `clear`(`adno`, `name`, `contact`, `alcontact`, `dpt`, `course`, `jd`, `cd`, `lecturer`, `status`, `cst`, `cet`)  VALUES('".$_POST['cid']."','".$_POST['cname']."','".$_POST['cont']."','".$_POST['acont']."','".$_POST['dpt']."','".$_POST['coz']."','".$_POST['jdate']."','".$_POST['cdate']."','".$_POST['lec']."','".$_POST['stt']."','".$_POST['cst']."','".$_POST['cte']."')";

if(mysqli_query($con, $sql)){
$query ="DELETE FROM `student` WHERE adno='".$_POST['cid']."'";

if (mysqli_query($con, $query)) {
	header("Location:clear.php?Invalid=Successfully Cleared the Student!");
}


}









 ?>