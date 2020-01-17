<?php
    session_start(); //start session

    include("connection.php");

    //<!--Check user inputs-->     <!--Define error messages-->
//    <!--Define error messages-->


$missingUsername = '<p><strong>Please enter a username!</strong></p>';
$missingEmail = '<p><strong>Please enter your email address!</strong></p>';
$invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>';
$missingPassword = '<p><strong>Please enter a Password!</strong></p>';
$invalidPassword = '<p><strong>Your password should be at least 6 characters long and inlcude one capital letter and one number!</strong></p>';
$differentPassword = '<p><strong>Passwords don\'t match!</strong></p>';
$missingPassword2 = '<p><strong>Please confirm your password</strong></p>';
$errors =null;


if(empty($_POST["signupusername"])){
    $errors .= $missingUsername;
}else{
    $username = filter_var($_POST["signupusername"], FILTER_SANITIZE_STRING);   
}



if(empty($_POST["signupemail"])){
    $errors .= $missingEmail;   
}else{
    $email = filter_var($_POST["signupemail"], FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors .= $invalidEmail;   
    }
}



if(empty($_POST["signuppassword"])){
    $errors .= $missingPassword; 
}elseif(!(strlen($_POST["signuppassword"])>6
         and preg_match('/[A-Z]/',$_POST["signuppassword"])
         and preg_match('/[0-9]/',$_POST["signuppassword"])
        )
       ){
    $errors .= $invalidPassword; 
}else{
    $password = filter_var($_POST["signuppassword"], FILTER_SANITIZE_STRING); 
    if(empty($_POST["signuppassword2"])){
        $errors .= $missingPassword2;
    }else{
        $password2 = filter_var($_POST["signuppassword2"], FILTER_SANITIZE_STRING);
        if($password !== $password2){
            $errors .= $differentPassword;
        }
    }
}


if($errors){
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;
    exit;
}

//else :



$username = mysqli_real_escape_string($link, $username);
$email = mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password);
//$password = md5($password);
$password = hash('sha256', $password);

//If username exists in the users table print error

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query!</div>';
    echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';  //this will say the last runing mysql code error
    exit;  
}
$results = mysqli_num_rows($result);  //number of rows in there


if($results){
    echo '<div class="alert alert-danger">That username is already registered. Do you want to log in?</div>';  exit;
}


//If email exists in the users table print error
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query!</div>'; exit;
}
$results = mysqli_num_rows($result);
if($results){
    echo '<div class="alert alert-danger">That email is already registered. Do you want to log in?</div>';  exit;
}


//Create a unique  activation code
$activationKey = bin2hex(openssl_random_pseudo_bytes(16));



//Insert user details and activation code in the users table

$sql = "INSERT INTO users (`username`, `email`, `password`, `activation`) VALUES ('$username', '$email', '$password', '$activationKey')";  //table create command
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>'; 

    echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';  //this will say the last runing mysql code error
    exit;
}

//Send the user an email with a link to activate.php with their email and activation code
$message = "Please click on this link to activate your account:\n\n";
$message .= "http://localhost/CodeNerd/activate.php?email=" . urlencode($email) . "&key=$activationKey";
if(mail($email, 'Confirm your Registration', $message, 'From:'.'codenerd@gmail.com')){
       echo "<div class='alert alert-success'>Thank for your registring! A confirmation email has been sent to $email. Please click on the activation link to activate your account.</div>";

       echo $message;
}



?>