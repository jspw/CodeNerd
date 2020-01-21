<?php
include ("connection.php");

    $id = $_POST['data1'];
   // echo $id;

    $sql = "SELECT beforeCompiler from languages WHERE id = '$id'";
    $result = mysqli_query($link,$sql);

    if (!$result) {
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  //  print_r($row);
   if($row){
    $beforecompiler = $row['beforeCompiler'];

    echo $beforecompiler;
   }

    
?>