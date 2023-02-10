<?php 
    session_start();
    include('connection.php');
    $id_pro = $_GET['id_pro'];
    $sql = "select * from tbl_product where id_pro='$id_pro'";
    $result = $conn->query($sql);
    
    $row;
    $row = $result->fetch_assoc();
   $_SESSION['id_pro'] = $id_pro;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert product</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">แก้ไขข้อมูลสินค้า</h1>
        <hr>
        <form action="upd_save_pro.php?id_pro=<?=$_GET["id_pro"];?>" enctype="multipart/form-data" method="POST">
            <label for="name_pro" class="form-label">ชื่อสินค้า</label>
            <input class="form-control" type="text" name="name_pro" value="<?php echo $row['name_pro']; ?>">
            <label for="quantity_pro" class="form-label">ปริมาณ</label>
            <input class="form-control" type="text"  name="quantity_pro" value="<?php echo $row['quantity_pro']; ?>">
            <label for="price_pro" class="form-label">ราคา</label>
            <input class="form-control" type="text" name="price_pro" value="<?php echo $row['price_pro']; ?>">
            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="index_pro.php" class="btn btn-primary mt-3">Go Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>