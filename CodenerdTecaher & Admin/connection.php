<?php

    $link = mysqli_connect("localhost",'root','',"users");
    if(mysqli_connect_error()){
        die ("Error : Unable to connect".mysqli_connect_error());
        echo"<script>window.alert('Error')</script>";
    }

?>