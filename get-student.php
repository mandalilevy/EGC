<?php

$connection = mysqli_connect("localhost", "root", "", "egc");
$dpt="Business";
$sql = "SELECT * FROM student where dpt= '$dpt'";
$result = mysqli_query($connection, $sql);

$data = array();

while ($row = mysqli_fetch_object($result))
    array_push($data, $row);

echo json_encode($data);

?>