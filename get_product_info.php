<?php
require("conn.php");
$id = $_GET["id"];
$sql = "SELECT * FROM `product` WHERE `id`='$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

// Tạo một mảng chứa thông tin sản phẩm
$productInfo = array(
    "image" => "images/" . $row["hinhanhsp"],
    "message" => "<i class='fa fa-check-square'></i> Đã thêm vào giỏ hàng",
    "buttons" => "<a href='cart.php'>Giỏ hàng</a> <a href='checkout.php'>Thanh toán</a>",
    "shippingInfo" => "<li><strong><i class='icon-shopping-cart'></i> Đã thêm " . $row["tensp"] . " trong giỏ hàng của bạn</strong></li>
                        <li><strong>Tổng giá: </strong><span>" . $row["giasp"] . "</span></li>
                        <li class='modal-continue-button'><a href='#' data-bs-dismiss='modal'>Tiếp tục mua sắm</a></li>"
);

// Trả về kết quả dưới dạng JSON
echo json_encode($productInfo);

// Đóng kết nối cơ sở dữ liệu
mysqli_close($conn);
?>

