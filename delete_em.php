<?php 
 $id_empl= $_GET['id_empl'];
include('connection.php');
$sql = "DELETE FROM tbl_employee WHERE id_empl=$id_empl";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='index_em.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index_em.php'</script>";
}

$conn->close();
?>