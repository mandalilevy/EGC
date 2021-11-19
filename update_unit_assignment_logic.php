
<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","egc");

if($_POST['lec']=="Select Lecturer" or $_POST['unit']=="Select Unit" or $_POST['time']=="Select Time"){
header("Location:update_unit_assignment.php?Empty=ERROR!");

}
else{
$sql="UPDATE `assignunit` SET `lecturer`='".$_POST['lec']."',`unit`='".$_POST['unit']."' WHERE `time`='".$_POST['time']."' and lecturer='".$_POST['plec']."'";


if(mysqli_query($con, $sql)){
header("Location:update_unit_assignment.php?Invalid=Successfully Updated the Assignment!");
}
else{
    header("Location:update_unit_assignment.php?Empty=SELECT CORRECT LEC!");

}
}









 ?>