<?php
$id_sales = $_GET["id_sales"];
$name_cos =$_POST["name_cos"];  
$name_emp =$_POST["name_emp"];  
$date_sale =$_POST["date_sale"];
$sellingprice_sale =$_POST["sellingprice_sale"];  

include('connection.php');
$sql = "UPDATE tbl_sales  SET name_cos='$name_cos', name_emp='$name_emp', date_sale='$date_sale' , sellingprice_sale='$sellingprice_sale' WHERE id_sales=$id_sales";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index_sale.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index_sale.php'</script>";
}
$conn->close();
?>