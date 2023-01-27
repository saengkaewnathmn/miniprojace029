<?php
$name = $_POST["name_empl"];
$lastname = $_POST["lastname_empl"];
$address = $_POST["address_empl"];
$numphone = $_POST["numphone_empl"];

include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO tbl_employee (name_empl,lastname_empl,address_empl,numphone_empl) VALUES ('$name','$lastname','$address','$numphone')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location: index_em.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>