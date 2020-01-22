<?php
include("connection.php");
session_start();


//error checking
$missingHeader = '<p class=" alert alert-danger text-center"><strong>Please enter a header!</strong></p>';
$atleasterror = '<p class=" alert alert-danger text-center"><strong>You can\'t empty the article 1 & article 2 both!</strong></p>';

$error = null;

if (empty($_POST['header'])) {
    $error .= $missingHeader;
    echo $error;
} else {
    if (empty($_POST['beforecompiler']) && empty($_POST['aftercompiler'])) {
        $error .= $atleasterror;
        echo $error;
    } else {

    //  //   $id = $_SESSION['user_id'];
    //     $id = 13;
    //     $sql = "SELECT username FROM users WHERE user_id='$id'";
    //     $result = mysqli_query($link, $sql);
    //     if (!$result) {
    //         echo '<div class="alert alert-danger">Error running the query!</div>';
    //         exit;
    //     }
    //     //log the user in: Set session variables

    //     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //     $username = $row['username'];

        $username = $_SESSION['username'];

        $language = $_POST['language'];
        $language =  str_replace("'", "\'", $language);

        //  if(!isset($_POST['header'])){

        //  }

        // $header = $_POST['header'];
        // $header =  str_replace("'", "\'", $header);

        // $beforecompiler = $_POST['beforecompiler'];
        // $beforecompiler =  str_replace("'", "\'", $beforecompiler);
        // $beforecompiler =  str_replace("\"", "\'", $beforecompiler);
        // $beforecompiler =  str_replace("\\'", "", $beforecompiler);

        // $code = $_POST['code'];
        // $code =  str_replace("'", "\'", $code);

        // $aftercompiler = $_POST['aftercompiler'];
        // $aftercompiler =  str_replace("'", "\'", $aftercompiler);
        // $aftercompiler =  str_replace("\"", "\'", $aftercompiler);


                $header = $_POST['header'];
        $header =  str_replace("'", '"', $header);

        $beforecompiler = $_POST['beforecompiler'];
        $beforecompiler =  str_replace("'", '"', $beforecompiler);

        $code = $_POST['code'];
        $code =  str_replace("'", '"', $code);

        $aftercompiler = $_POST['aftercompiler'];
        $aftercompiler =  str_replace("'", '"', $aftercompiler);

        // print_r($_POST);
        $sql = "INSERT INTO demo (`username`,`name`,`header`,`beforeCompiler`,`code`,`afterCompiler`,`status`) VALUES('$username','$language','$header','$beforecompiler','$code','$aftercompiler','pending')";
        $result = mysqli_query($link, $sql);

        if (!$result) {
            echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>';

            echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';  //this will say the last runing mysql code error
            exit;
        } else {
            echo '<div class="alert alert-success">Article sent</div>';
        }
    }
}
