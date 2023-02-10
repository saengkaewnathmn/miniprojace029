<?php
$id_type = $_GET["id_type"];
$name_type =$_POST["name_type"];  

include('connection.php');
$sql = "UPDATE tbl_producttype  SET name_type='$name_type' WHERE id_type=$id_type";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index_pty.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index_pty.php'</script>";
}
$conn->close();
?>