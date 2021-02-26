<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsertData</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/801756d3b2.js" crossorigin="anonymous"></script>
    </head>
<body>
<div class="container">
<h1>Edit Data</h1>
<div class="panel panel-primary">
      <div class="panel-heading">กรอกข้อมูลทีต้องการค้นหา</div>
      <div class="panel-body">
      <form name="CTF" method="POST" action="data-save.php">
      <label>Car</label>
        <input name="Car" class="form-control form-control-lg" placeholder="Car Name" type="text" required>
        </br>
        <label>Price</label>
        <input name="Price" class="form-control form-control-lg" placeholder="Price" type="text" required>
        </br>
        <label>Body</label>
        <input name="Model" class="form-control form-control-lg" placeholder="Model" type="text" required>
        </br>
       <center><button type="submit" class="btn btn-success">แก้ไข</button></center> 
      </form>
      <hr>

</div>
<?php
    include('conn.php');
    $sql = "select * from car_sale where car = '$_GET[car]' and price= '$_GET[price]'";
    $exeq = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($exeq)) {
        $car = $row["car"];
        $price = $row["price"];
        $body = $row["body"];
    }
?>

</body>
</html>