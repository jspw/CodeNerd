<?php

session_start();

include("logout.php");

if (!(isset($_SESSION['user_id']) && $_SESSION['user_id'] != '')) {
    echo "<p>FUCK OFF</p>";
} else {

    include("connection.php");


    echo '
          
            ';
}
