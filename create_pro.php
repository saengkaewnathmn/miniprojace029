<?php
$name = $_POST["name_pro"];
$quantity = $_POST["quantity_pro"];
$price = $_POST["price_pro"];

include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO tbl_product (name_pro,quantity_pro,price_pro) VALUES ('$name','$quantity','$price')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:index_pro.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>