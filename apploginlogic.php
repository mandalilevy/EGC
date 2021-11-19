<?php 
$con=mysqli_connect("127.0.0.1","root","","egc");
if (!$con) {
  echo "NOT CONNECTED TO SERVER";
}
session_start();
if (isset($_POST['submit'])) 
{
if (empty($_POST['name']) || empty($_POST['pass']))
  {
  header("Location:index.php?Empty=please fill in the blanks");
  }
else
{
$rank="Customer";
$query ="SELECT  * FROM `admin` WHERE username='".$_POST['name']."' AND password='".$_POST['pass']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  $_SESSION['admin']=$_POST['name'];
  header("Location:dashboard.php");
}
else{
  header("Location:index.php?Empty= Invalid Username and Password");
}
}
}
else
{
  echo "NOT WORKING NOW";
}
 ?>
