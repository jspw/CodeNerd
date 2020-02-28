<?php


$errors = null;
$resultMessage = null;

//error message

$missing_name = '<p><strong>Please enter your name</strong></p>';

$missing_email = '<p><strong>Please enter your email adress</strong></p>';

$invalid_email = '<p><strong>Please enter a valid email adress</strong></p>';

$missing_message = '<p><strong>Please enter your Message</strong></p>';

//if the user has submitted the form
if (isset($_POST["submit"])) {

    //geting user input
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["comments"];


    //check for errors
    if (!$name) {
        $errors .= $missing_name;
    } else {
        $name = filter_var($name, FILTER_SANITIZE_STRING);
    }

    if ($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors .= $invalid_email;
        }
    } else {
        $errors .= $missing_email;
    }


    if ($message) {
        $message = filter_var($message, FILTER_SANITIZE_STRING);
    } else {
        $errors .= $missing_message;
    }



    //no errors
    //send the message
    //if successfull 
    //print success message
    //fail
    //print waring message

    if ($errors) {
        $resultMessage = '<div class = "alert alert-danger">' . $errors . '</div>';
    } else {
        $to = "mhshifat757@gmail.com";
        $subject = "Contact";
        $message = "
                                        <p>Name: $name.</p>
                                        <p>Email: $email.</p>
                                        <p>Message:</p> 
                                        <p><strong>$message</strong></p>
                                        
                                    ";
        $headers =  'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: Shifat <mhshifat757@gmail.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        if (mail($to, $subject, $message, $headers)) {
            header("location:thanks.html");
        } else {
            $resultMessage = '<div class="alert alert-warning">Unable to send Email.</div>';
        }
    }

    echo $resultMessage;
}
