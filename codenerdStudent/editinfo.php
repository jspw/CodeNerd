<?php
    session_start();

    include("connection.php");

    echo'<div class="alert alert-info">Data updating</div>'; 


    $firstname = filter_var($_POST["firstname"]);
    $lastname = filter_var($_POST["lastname"]);
    $country = filter_var($_POST["country"]);
    $linkedin = filter_var($_POST["linkedin"]);
    $github = filter_var($_POST["github"]);
    $facebook = filter_var($_POST["facebook"]);


    $firstname = mysqli_real_escape_string($link, $firstname);
    $lastname = mysqli_real_escape_string($link, $lastname);
    $country = mysqli_real_escape_string($link, $country);
    $linkedin = mysqli_real_escape_string($link, $linkedin);
    $github = mysqli_real_escape_string($link, $github);
    $facebook = mysqli_real_escape_string($link, $facebook);


    $id = $_SESSION['user_id'];

    $sql = "UPDATE users SET  `firstname`='$firstname', `lastname`='$lastname', `country`='$country', `linkedin`='$linkedin', `github`='$github' ,`facebook`='$facebook' WHERE user_id='$id'";

    // $sql = "UPDATE users SET  `aboutme`='$aboutme',   `university`='$university', `department`='$department', `organization`='$organization' WHERE user_id='$id'";



    $result = mysqli_query($link, $sql);

    if(!$result){
        echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>'; 
    
        echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';  //this will say the last runing mysql code error
        exit;
    }else {
        echo '<div class="alert alert-info">Data updated successfully</div>'; 
     //   header("location:profile.php");
    }
?>