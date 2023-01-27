<?php
$id_empl = $_GET["id_empl"];
$name_empl =$_POST["name_empl"];  
$lastname_empl =$_POST["lastname_empl"];  
$address_empl =$_POST["address_empl"];
$numphone_empl =$_POST["numphone_empl"];  

include('connection.php');
$sql = "UPDATE tbl_employee  SET name_empl='$name_empl', lastname_empl='$lastname_empl', address_empl='$address_empl' , numphone_empl='$numphone_empl' WHERE id_empl=$id_empl";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index.php'</script>";
}
$conn->close();
?>