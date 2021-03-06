<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลการยืมหนังสือ</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="/index.php">ระบบการยืมหนังสือ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-white" href="/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="insert.php">ยืมหนังสือ</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
<h1 class="pt-5">การค้นหาข้อมูลใน Database</h1>
<div class="panel panel-primary">
      <div class="panel-heading">กรอกข้อมูลทีต้องการค้นหา</div>
      <div class="panel-body">
      <form name="CTF" method="GET" action="">
      <label>ข้อมูลที่ต้องการค้นหา</label>
        <input name="Cel" class="form-control form-control-lg" placeholder="ชื่อหนังสือ" type="text" required>
        </br>
        <button type="submit" class="btn btn-success">ค้นหา</button>
      </form>
      <hr>

</div>
    </div>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Code</th>
      <th scope="col">ชื่อหนังสือ</th>
      <th scope="col">วันที่ยืม</th>
      <th scope="col">วันที่คืน</th>
      <th scope="col">จำนวนวัน</th>
    </tr>
  </thead>
  <tbody>
  <!--Connect Data-->
    <?php 
    include ('conn.php');
    $servername= "localhost";
    $username= "root";
    $password = "";
    $dbname= "McDatabase";
            $sql = 'select * ,datediff(bookDateF, bookDateS) as total from books';
            $exeq = mysqli_query($conn , $sql);
            while ($row = mysqli_fetch_assoc($exeq)) {
                $number = $row["bookCode"];
                $bookName = $row["bookName"];
                $bookDateS = $row["bookDateS"];
                $bookDateF = $row["bookDateF"];
                $total = $row["total"];
                echo '<tr>';
                echo '<td>'.$number.'</td>';
                echo '<td>'.$bookName.'</td>';
                echo '<td>'.$bookDateS.'</td>';
                echo '<td>'.$bookDateF.'</td>';
                echo '<td>'.$total.'</td>';
            }
    ?>
  </tbody>
</table>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
</body>
</html>