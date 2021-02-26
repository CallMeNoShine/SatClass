<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsertData</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/801756d3b2.js"></script>
    </head>
<body>
<div class="container">
<h1>Insert Data</h1>
<div class="panel panel-primary">
      <div class="panel-heading">กรอกข้อมูลทีต้องการค้นหา</div>
      <div class="panel-body">
      <!-- Script -->
      <script language="JavaScript">
        function calc(){
          var sum;
          var price = document.CTF.Price.value;
          var number = document.CTF.Number.value;
          sum = price * number;
          document.CTF.Total.value = sum;
        }
      </script>
      <!-- END Script -->

      <form name="CTF" method="POST" action="data-save.php">
      <label>Car</label>
        <input name="Car" class="form-control form-control-lg" placeholder="Car Name" type="text" required>
        </br>
        <label>Price</label>
        <input name="Price" class="form-control form-control-lg" placeholder="Price" type="text" OnKeyPress="calc();">
        </br>
        <label>Number</label>
        <input name="Number" class="form-control form-control-lg" placeholder="Number" type="text" OnKeyPress="calc();" >
        </br>
        <label>Total</label>
        <input name="Total" class="form-control form-control-lg" placeholder="Total" type="text" required>
        </br>
        <label>Body</label>
        <input name="Model" class="form-control form-control-lg" placeholder="Mode" type="text" required>
        </br>
       <button type="submit" class="btn btn-success">เพิ่ม</button>
      </form>
      <hr>
<?php 
include('conn.php');
?>
</div>

</body>
</html>