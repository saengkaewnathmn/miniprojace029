<?php 
    session_start();
    include('connection.php');
    $id_sales  = $_GET['id_sales'];
    $sql = "select * from tbl_sales where id_sales='$id_sales'";
    $result = $conn->query($sql);
    
    $row;
    $row = $result->fetch_assoc();
   $_SESSION['id_sales'] = $id_sales;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert sales </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">แก้ไขข้อมูลการขาย</h1>
        <hr>
        <form action="upd_save_sale.php?id_sales=<?=$_GET["id_sales"];?>" enctype="multipart/form-data" method="POST">
            <label for="name_cos" class="form-label">ชื่อลูกค้า</label>
            <input class="form-control" type="text" name="name_cos" value="<?php echo $row['name_cos']; ?>">
            <label for="name_emp" class="form-label">ชื่อพนักงาน</label>
            <input class="form-control" type="text"  name="name_emp" value="<?php echo $row['name_emp']; ?>">
            <label for="date_sale" class="form-label">วันที่</label>
            <input class="form-control" type="text" name="date_sale" value="<?php echo $row['date_sale']; ?>">
            <label for="sellingprice_sale" class="form-label">ราคารวม</label>
            <input class="form-control" type="text" name="sellingprice_sale" value="<?php echo $row['sellingprice_sale']; ?>">
            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="index_sale.php" class="btn btn-primary mt-3">Go Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>