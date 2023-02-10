<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <a href="index_em.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">เพิ่มข้อมูลพนักงาน</h1>
        <hr>
        
<div class="mb-3">
<form  action="create_em.php" method="post">
            <div class="mb-3">
                <label for="name_empl" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="name_empl" required>
            </div>
            <div class="mb-3">
                <label for="lastname_empl" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="lastname_empl" required>
            </div>
            <div class="mb-3">
                <label for="address_empl">ที่อยู่</label>
                <input type="S_Address" class="form-control" name="address_empl" required>
            </div>
            <div class="mb-3">
                <label for="numphone_empl">เบอร์โทร</label>
                <input type="text" class="form-control" name="numphone_empl" required>
            </div>
            <button type="submit">Create</button>
            <a class="btn" href="index_em.php">Back</a>
            </form>
            </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>