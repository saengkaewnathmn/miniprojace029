<?php 
 $id_type = $_GET['id_type'];
include('connection.php');
$sql = "DELETE FROM tbl_producttype WHERE id_type=$id_type";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='index_pty.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index_pty.php'</script>";
}

$conn->close();
?>