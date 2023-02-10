<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

<div class="container mt-3">
                <a href="ins_form.php" class="btn btn-success">ข้อมูลลูกค้า</a>
				<a href="ins_form_pro.php" class="btn btn-success">ข้อมูลสินค้า</a>
				<a href="ins_form_pty.php" class="btn btn-success">ข้อมูลประเภทสินค้า</a>
				<a href="ins_form_sale.php" class="btn btn-success">ข้อมูลการขาย</a>
                <a href="ins_form_em.php" class="btn btn-success">ข้อมูลพนักงาน</a>
                <a href="logout.php" class="btn btn-success">ออกจากระบบ</a>
<table id="mytable" class="table table-bordered table-striped">
        <thead>
        
<tr>
<th>รหัสสินค้า</th>
<th>ชื่อสินค้า</th>
<th>ขนาด</th>
<th>ราคา</th>                                                                                                                                                                                                              
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
include('connection.php');
$sql = "SELECT * FROM tbl_product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//แสดงข้อมูลเป็นตาราง
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td>'. $row['id_pro'] . '</td>';
echo '<td>'. $row['name_pro'] . '</td>';
echo '<td>'. $row['quantity_pro'] . '</td>';
echo '<td>'. $row['price_pro'] . '</td>';
echo '<td><a role="button"  href="update_pro.php?id_pro='.$row['id_pro'].'" class="btn btn-success">Update</a> ';  //ปุ่มที่เพิ่มเข้ามา
echo '<a href="delete_pro.php?id_pro='.$row['id_pro'].'" class="btn btn-danger">delete</a>';  //ปุ่มที่เพิ่มเข้ามา
echo '</tr>';
}
} else {
echo " ";
}
$conn->close();
?>
</tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>