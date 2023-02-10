<?php
$namec = $_POST["name_cos"];
$namee = $_POST["name_emp"];
$date = $_POST["date_sale"];
$sellingprice = $_POST["sellingprice_sale"];

include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO tbl_sales (name_cos,name_emp,date_sale,sellingprice_sale) VALUES ('$namec','$namee','$date','$sellingprice')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:index_sale.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>