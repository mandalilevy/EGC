<?php

// $orderNumber = $_GET["name"];
$connection = mysqli_connect("localhost", "root", "", "egc");

$sql = "SELECT * FROM  businesunit";
$result = mysqli_query($connection, $sql);

$data = array();

while ($row = mysqli_fetch_object($result))
    array_push($data, $row);

echo json_encode($data);
?>