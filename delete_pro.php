<?php 
 $id_pro = $_GET['id_pro'];
include('connection.php');
$sql = "DELETE FROM tbl_product WHERE id_pro=$id_pro";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='index_pro.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index_pro.php'</script>";
}

$conn->close();
?>