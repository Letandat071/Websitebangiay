<?php
require("conn.php");
$id = (int) $_GET["id"];
$sql = "SELECT * FROM `product` WHERE `id`='$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

$product = array(
    "image" => "images/" . $row["hinhanhsp"],
    "name" => $row["tensp"],
    "price" => $row["giasp"]
);

echo json_encode($product);
?>
