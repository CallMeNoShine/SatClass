<?php 
    include('conn.php');
    $sql = "insert into books (bookCode, bookName, bookDateS, bookDateF)
     value ('$_POST[bookCode]', '$_POST[bookName]', '$_POST[bookDateS]', '$_POST[bookDateF]' ) ";
     $exeq = mysqli_query($conn , $sql);
     if($exeq){
         echo "<meta http-equiv='refresh' content='1; url=index.php'>";
     }
     else {
        echo "Connect ERROR !!!!";
     }
?>