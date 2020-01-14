<!--This file receives the user_id and key generated to create the new password-->
<!--This file displays a form to input new password-->

<?php
session_start();
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Password Reset</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="home.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            h1{
                color:purple;   
            }
            .contactForm{
                border:1px solid #7c73f6;
                margin-top: 50px ;
                border-radius: 15px;
                padding: 20px;
            }
        </style>

    </head>
        <body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10 contactForm">
            <h1>Reset Password:</h1>
            <div id="resultmessage"></div>
<?php

if(!isset($_GET['user_id']) || !isset($_GET['key'])){
    echo '<div class="alert alert-danger">There was an error. Please click on the link you received by email.</div>'; exit;
}
//else
    
$user_id = $_GET['user_id'];
$key = $_GET['key'];
$time = time() - 86400;
    

$user_id = mysqli_real_escape_string($link, $user_id);
$key = mysqli_real_escape_string($link, $key);
    //Check combination of user_id & key exists and less than 24h old
$sql = "SELECT user_id FROM forgotpassword WHERE rkey='$key' AND user_id='$user_id' AND time > '$time' AND status='pending'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query!</div>'; exit;
}
//If combination does not exist

$count = mysqli_num_rows($result);
if($count !== 1){
    echo '<div class="alert alert-danger">Please try again.</div>';
    exit;
}
//print reset password form with hidden user_id and key fields


echo "
<form method=post id='passwordreset'>
<input type=hidden name=key value=$key>
<input type=hidden name=user_id value=$user_id>
<div class='form-group'>
    <label for='password'>Enter your new Password:</label>
    <input type='password' name='password' id='password' placeholder='Enter Password' class='form-control'>
</div>
<div class='form-group'>
    <label for='password2'>Re-enter Password::</label>
    <input type='password' name='password2' id='password2' placeholder='Re-enter Password' class='form-control'>
</div>
<input type='submit' name='resetpassword' class='btn btn-success btn-lg' value='Reset Password'>


</form>
";


?>
            
        </div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <!-- Ajax Call to storeresetpassword.php which processes form data-->
            <script>
             
            $("#passwordreset").submit(function(event){ 
                
                event.preventDefault();
             
                var datatopost = $(this).serializeArray();
            //    console.log(datatopost);
                //send them to signup.php using AJAX
                $.ajax({
                    url: "storeresetpassword.php",
                    type: "POST",
                    data: datatopost,
                    success: function(data){

                        $('#resultmessage').html(data);
                    },
                    error: function(){
                        $("#resultmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

                    }

                });

            });           
            
            </script>
        </body>
</html>
