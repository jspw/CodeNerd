<?php
    $link=mysqli_connect("localhost","root","","users");   //connecting to the database address : "localhost" , user : "root" ,password : "",database name : "users" ; 
    if(mysqli_connect_error()){
        die ("Error : Uanbale to connect" . mysqli_connect_error());
        echo"<script>window.alert('Error')</script>";
    }
?>