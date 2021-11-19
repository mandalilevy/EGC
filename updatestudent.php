
<?php

$con=mysqli_connect("127.0.0.1","root","","egc");


$sql="UPDATE `student` SET `name`='".$_POST['cname']."',`contact`='".$_POST['cont']."',`alcontact`='".$_POST['acont']."',`dpt`='".$_POST['dpt']."',`course`='".$_POST['coz']."',`lecturer`='".$_POST['lec']."',`cst`='".$_POST['cst']."',`cet`='".$_POST['cte']."' WHERE adno='".$_POST['cid']."'";

if(mysqli_query($con, $sql)){
header("Location:actions.php?Invalid=Successfully Updated the Student!");
}




 ?>