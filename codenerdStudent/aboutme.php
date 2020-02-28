<?php
    session_start();

    include("connection.php");


    $aboutme = filter_var($_POST["aboutme"]);
    $university = filter_var($_POST["university"]);
    $department = filter_var($_POST["department"]);
    $organization = filter_var($_POST["organization"]);


    $aboutme = mysqli_real_escape_string($link, $aboutme);
    $university = mysqli_real_escape_string($link, $university);
    $department = mysqli_real_escape_string($link, $department);
    $organization = mysqli_real_escape_string($link, $organization);

        $id = $_SESSION['user_id'];


        $sql = "UPDATE users SET  `aboutme`='$aboutme',   `university`='$university', `department`='$department', `organization`='$organization' WHERE user_id='$id'";


    // $sql = "INSERT INTO  usersinfo (`user_id`,`aboutme`, `university`, `department`, `organization`) VALUES ('$id','$aboutme', '$university', '$department', '$organization')";  //table create command

    $result = mysqli_query($link, $sql);

    if(!$result){
        echo '<div class="alert alert-danger" style="margin-top:300px">There was an error inserting the users details in the database!</div>'; 
    
        echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';  //this will say the last runing mysql code error
        exit;
    }else{
        echo '<div class="alert alert-info">Data updated successfully</div>'; 
        
    //    header("location: profile.php");
    }
?>