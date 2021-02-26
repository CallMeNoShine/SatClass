<?php 
    include('conn.php');
    $sql = "insert into car_sale (car, price, model, number)
     value ('$_POST[Car]', $_POST[Price], '$_POST[Model]', $_POST[Number] ) ";
     $exeq = mysqli_query($conn , $sql);
     if($exeq){
         echo "<meta http-equiv='refresh' content='1; url=querrydata.php'>";
     }
     else {
        echo "Connect ERROR !!!!";
     }
?>