<?php
$serverName = "localhost";
$userName = "root";
$pwd = "";
$nameDB = "bangiay";

$conn = mysqli_connect($serverName,$userName,$pwd,$nameDB);
if($conn == false){
    echo "Kết Nối Thất Bại!";
}
?>