<?php
$name = $_POST["name_type"];

include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO tbl_producttype (name_type) VALUES ('$name')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:index_pty.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>