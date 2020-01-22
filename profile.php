<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: home.php");
}

include('connection.php');

$id = $_SESSION['user_id'];
//    echo "Id is : " . $id;

//get data from users
$sql = "SELECT * FROM users WHERE user_id='$id'";
$result = mysqli_query($link, $sql);
if (!$result) {
    echo '<div class="alert alert-danger">Error running the query!</div>';
    exit;
}
//log the user in: Set session variables

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$username = $row['username'];
$email = $row['email'];

//get more information about user 

$firstname = $row['firstname'];
$lastname = $row['lastname'];
$country = $row['country'];
$github = $row['github'];
$facebook = $row['facebook'];
$linkedin = $row['linkedin'];
$university = $row['university'];
$department = $row['department'];
$organization = $row['organization'];
$aboutme = $row['aboutme'];
$completedcourse = $row['completedcourse'];
$incompletedcourse = $row['incompletedcourse'];
$currentcourse = $row['currentcourse'];



?>

<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="card-design.css">
    <link rel="stylesheet" type="text/css" href="activities.css">


    <!-- icons  -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <title>CodeNerd</title>



</head>


<body id="body">
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
                    <li><a href="algorithms-logged-in.php">ALGORITHM</a></li>

                </ul>

                <form action="search.php" class="navbar-form navbar-left" role="search" method="POST">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="submit" name="go">Go</button> <!-- Search bar -->
                        </span>
                        <input name="search" type="text" class="form-control" placeholder="Search" id="search">

                        <span class="glyphicon glyphicon-search form-control-feedback"></span>

                    </div>
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation">
                        <a href="#"><span class="glyphicon glyphicon-bell"></span> Notifications<span class="badge">4</span></a>

                    </li>

                    <li class="dropdown" role="presentation">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>

                            <!-- usernmae  -->


                            <?php

                            echo $username;

                            ?>

                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="height: auto">

                            <li role="presentation" class="list"><a href="account.php?" style=" text-align:center"><strong>Account Setting</strong></a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation" class="list"><a href="home.php?logout=1" style="text-align:center"><strong>Log Out</strong></a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation" class="list"><a href="http://localhost/phptest/CodenerdTecaher/homet.php" style="text-align:center" target="_blank"><strong>Teach On CodeNerd</strong></a></li>
                        </ul>
                    </li>

                </ul>
            </div>

        </div>
    </nav>


    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            <div class="col-sm-8 col-md-8 col-lg-4" style="background-color: #F3F7F7">
                <div style="margin-left:20px;margin-top:20px;padding:20px">
                    <div style="border: 2px solid #E1E4E8;border-radius:10px ; padding:5px">
                        <img src="pc.png" class="img-responsive img-thumbnail">
                        <br>
                        <p style="font-size:15px;color:black"><span class="glyphicon glyphicon-stats"> Student <span class="badge" style="background: black;color:white;font-size:10px">2</span></span></p>
                    </div>
                    <br>
                    <div style="padding: 10px">
                        <h2 id="username" style="font-weight: 700;
                            font-family: Arial,Helvetica,sans-serif;
                            font-family: var(--font-family-text);
                            margin: 20px 0 0;
                            text-transform: capitalize;
                            word-break: break-all;
                            font-size: 26px;
                            line-height: 1.2;">
                            <?php

                            echo $username;

                            ?>
                        </h2>
                        <p style="font-weight: 400;
                            font-family: monaco,Courier,monospace;
                            font-family: var(--font-family-input);
                            margin-top: 0;
                            margin-bottom: 15px;
                            color: #576871;
                            font-size: 16px;">@
                            <?php

                            echo $username;

                            ?>
                        </p>
                        <p id="country" style="margin-top: 5px;
                            color: #576871;
                            font-size: 14px;"><i class="glyphicon glyphicon-map-marker"></i>
                            <?php echo $country ?>
                        </p>

                        <div class="row">
                            <div class="col-sm-3">
                                <a id="github" href="<?php echo $github ?>" class="fab fa-github"></a>
                            </div>
                            <div class="col-sm-3">
                                <a id="linkedin" href="<?php echo $linkedin ?>" class="fab fa-linkedin"></a>
                            </div>
                            <div class="col-sm-3">
                                <a id="facebook" href="<?php echo $facebook ?>" class="fab fa-facebook"></a>
                            </div>
                            <div class="col-sm-3">

                                <?php
                                echo '<a id="website" href="mailto:' . $email . '"  target="_blank" class="glyphicon glyphicon-envelope"></a>';
                                ?>

                            </div>

                        </div>



                        <br>

                        <a style="cursor: pointer" data-toggle="modal" data-target="#editintromodal"><i class="glyphicon glyphicon-edit"></i> Edit Intro</a>

                        <hr>

                        <h2 style="font-weight: 700;
                            font-family: Arial,Helvetica,sans-serif;
                            font-family: var(--font-family-text);
                            margin: 20px 0 0;
                            text-transform: capitalize;
                            word-break: break-all;
                            font-size: 20px;
                            line-height: 1.2;">
                            About<i role="button" data-toggle="modal" data-target="#aboutmemodal" class="glyphicon glyphicon-pencil pull-right"></i>
                        </h2>

                        <br><br>

                        <p>Education</p>
                        <h4 style="color: black"><?php echo $university ?></h4>

                        <p>Field of Study</p>

                        <h4><?php echo $department ?></h4>

                        <p> More about me</p>
                        <h5><?php echo $aboutme ?></h5>

                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-6 col-lg-8" style="background-color: #FFFFFF">
                <div style="margin-left:20px;margin-top:20px;padding:20px">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#activities">Activities</a></li>
                        <li><a data-toggle="tab" href="#incomplete">Incomplete Courses</a></li>
                        <li><a data-toggle="tab" href="#complete">Achievements</a></li>
                        <li><a data-toggle="tab" href="#mytutorials">Own Tutorials</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="activities" class="tab-pane fade in active">
                            <h3>Recent Activities</h3>
                            <p>Bla bla bla</p>
                            <ul>

                            </ul>
                        </div>
                        <div id="incomplete" class="tab-pane fade">
                            <h3>Incomplete Courses</h3>
                            <p>bla bla bla</p>
                        </div>
                        <div id="complete" class="tab-pane fade">
                            <h3>complete Courses</h3>
                            <p>bla bla bla</p>
                        </div>
                        <div id="mytutorials" class="tab-pane fade">
                            <h3>My Tutorials</h3>
                        
                            <div class="panel-group">

                                <?php
                                include('connection.php');

                                $username = $_SESSION['username'];
                                //     echo $username;

                                include("connection.php");
                                $sql = "SELECT * FROM languages WHERE username='$username'";
                                $result = mysqli_query($link, $sql);
                                //    echo $result;
                                if (!$result) {
                                    die("Error : Unable to connect" . mysqli_error($result));
                                    //  echo"<script>window.alert('Error')</script>";
                                }

                                while ($row = mysqli_fetch_array($result)) {
                                    $name = $row['name'];
                                    $id = $row['id'];
                                    $header = $row['header'];
                                    $beforecompiler = $row['beforeCompiler'];
                                    $afterCompiler = $row['afterCompiler'];
                                    $code = $row['code'];
                                    //    echo $id ." <br>";
                                    echo '

                                    <div class="panel panel-default">

                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" href="' . '#' . $id . '">' . $name . ' - ' . $header . '</a>
                                            
                                            </h4>
                                            
                                        </div>

                                            <div id="' . $id . '" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="container-fluid">
                                                    ' . $beforecompiler . '
                                                </div>
                                                <div class="container-fluid">
                                                <pre> ' . $code . '</pre>
                                                </div>
                                                <div class="container-fluid">
                                                    ' . $afterCompiler . '
                                                </div>
                                                
                                            </div>
                                            
                                            
                                        </div>

                                    </div>
                                        
                                         ';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- Edit Intro -->

    <div class="modal fade" id="editintromodal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <form id="editintroform" class="form" role="form" method="POST">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Intro</h4>
                    </div>
                    <div class="modal-body">

                        <div id="editintromessage"></div>


                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" class="form-control" id="country">
                        </div>
                        <div class="form-group">
                            <label for="innkedin">Linkedin URL</label>
                            <input type="text" name="linkedin" class="form-control" id="linkedin">
                        </div>
                        <div class="form-group">
                            <label for="github">Github URL</label>
                            <input type="text" name="github" class="form-control" id="github">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook URL</label>
                            <input type="text" name="facebook" class="form-control" id="facebook">
                        </div>


                    </div>
                    <div class="modal-footer">

                        <input type="submit" class="btn btn-success btn-block" id="save" name="save" value="Save">

                        <!-- <input type="submit" class="btn btn-success btn-block" data-dismiss="modal" id="save" name="save" value="Save"> -->

                        <button type="button" class="btn btn btn-default btn-block" data-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </div>


        </form>

    </div>

    <!-- About -->
    <form id="aboutmeform" method="post">
        <div class="modal fade" id="aboutmemodal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">About</h4>
                    </div>
                    <div class="modal-body">

                        <div id="aboutmemessage"></div>


                        <div class="form-group">
                            <label for="aboutme">About Me</label>
                            <textarea type="text" class="form-control" id="aboutme" name="aboutme"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="university">University/College</label>
                            <input type="text" class="form-control" id="university" name="university">
                        </div>
                        <div class="form-group">
                            <label for="department">Feild of Study</label>
                            <input type="text" name="department" class="form-control" id="department">
                        </div>
                        <div class="form-group">
                            <label for="organization">Company/Organization</label>
                            <input type="text" name="organization" class="form-control" id="organization">
                        </div>
                        <div class="modal-footer">

                            <input type="submit" class="btn btn-success btn-block" name="save" value="Save">

                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>


    <script>
        // /ajx call for about me


        $("#aboutmeform").submit(function(event) {
            event.preventDefault();

            var datatopost = $(this).serializeArray();
            console.log("HELLO");
            console.log(datatopost);
            //send them to signup.php using AJAX
            $.ajax({
                url: "aboutme.php",
                type: "POST",
                data: datatopost,
                success: function(data) {

                    location.reload();
                },
                error: function() {
                    $("#aboutmemessage").html(data);
                }

            });
        });

        // /ajx call for edit Info

        $("#editintroform").submit(function(event) {
            event.preventDefault();

            var datatopost = $(this).serializeArray();
            console.log("HELLO");
            console.log(datatopost);
            //send them to signup.php using AJAX
            $.ajax({
                url: "editinfo.php",
                type: "POST",
                data: datatopost,
                success: function(data) {

                    location.reload();

                },
                error: function() {
                    $("#editintromessage").html(data);
                }

            });
        });
    </script>





    <script src="activities.js"></script>


</body>

</html>