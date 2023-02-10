<?php
$id_pro = $_GET["id_pro"];
$name_pro =$_POST["name_pro"];  
$quantity_pro =$_POST["quantity_pro"];  
$price_pro =$_POST["price_pro"];

include('connection.php');
$sql = "UPDATE tbl_product  SET name_pro='$name_pro', quantity_pro='$quantity_pro', price_pro='$price_pro' WHERE id_pro=$id_pro";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index_pro.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index_pro.php'</script>";
}
$conn->close();
?>