<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: home.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="card-design.css">
    <link rel="stylesheet" type="text/css" href="home.css">


    <title>CodeNerd</title>

</head>


<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- <button class="btn brandB"> -->
                <a class="brandB" role="button" href="mainpageloggedin.php"><img class="img" src="codenerd.png" height="50" width="100"></a>
                <!-- </button> -->

                <button type="button" class="navbar-toggle" data-target="#navCol" data-toggle="collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
            </div>
            <div class="navbar-collapse collapse" id="navCol">
                <ul class="nav navbar-nav">
                    <li><a href="programming-tutorials-loged-in.php">TECHNOLOGY</a></li>
                    <li><a href="#Algorithm">ALGORITHM</a></li>





                    <li><a href="#CONTACT">CONTACT</a></li>

                </ul>

                <form class="navbar-form navbar-left " role="search" method="POST">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="submit">Go</button>
                        </span>
                        <input type="text" class="form-control" placeholder="Search" id="search">

                        <span class="glyphicon glyphicon-search form-control-feedback"></span>

                    </div>
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation">
                        <a href="#"><span class="glyphicon glyphicon-bell"></span> Notifications<span class="badge">4</span></a>

                    </li>

                    <li class="dropdown" role="presentation">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> ShhifaT57<span class="caret"></span></a>
                        <ul class="dropdown-menu" style="height: auto">

                            <li role="presentation" class="list"><a href="account.php?" style=" text-align:center"><strong>Account Setting</strong></a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation" class="list"><a href="home.php?logout=1" style="text-align:center"><strong>Log Out</strong></a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation" class="list"><a href="teachers.php" style="text-align:center"><strong>Teach On CodeNerd</strong></a></li>
                        </ul>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    

    <script src="home.js"></script>


</body>

</html>