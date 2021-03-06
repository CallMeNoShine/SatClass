<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มหนังสือ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/801756d3b2.js"></script>
    </head>
<body>
<div class="container">
<h1>เพิ่มหนังสือที่ยืม</h1>
<div class="panel panel-primary">
      <div class="panel-heading">กรอกข้อมูล</div>
      <div class="panel-body">
      <!-- Script -->
      <!-- <script language="JavaScript">
        function calc(){
          var sum;
          var bookDateS = document.CTF.bookDateS.value;
          var bookDateF = document.CTF.bookeDateF.value;
          sum = price * number;
          document.CTF.Total.value = sum;
        }
      </script> -->
      <!-- END Script -->

      <form name="CTF" method="POST" action="data-save.php">
      <label>รหัสหนังสือ</label>
        <input name="bookCode" class="form-control form-control-lg" placeholder="Book Code" type="text" required>
        </br>
      <label>ชื่อหนังสือ</label>
        <input name="bookName" class="form-control form-control-lg" placeholder="Book Name" type="text" required>
        </br>
        <label>วันที่ยืม</label>
        <input name="bookDateS" class="form-control form-control-lg" placeholder="Price" type="date">
        </br>
        <label>วันที่คืน</label>
        <input name="bookDateF" class="form-control form-control-lg" placeholder="Number" type="date">
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