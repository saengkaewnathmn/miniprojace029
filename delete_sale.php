<?php 
 $id_sales= $_GET['id_sales'];
include('connection.php');
$sql = "DELETE FROM tbl_sales WHERE id_sales=$id_sales";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='index_sale.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index_sale.php'</script>";
}

$conn->close();
?>