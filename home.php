<?php
session_start();
include("connection.php");

if(isset($_SESSION['user_id'])){
    header("location: mainpageloggedin.php");
}

//log Out

include("logout.php");

//remember me
include("rememberme.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="home.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- <script src="bootstrap.min.js"></script> -->


    <link rel="stylesheet" href="card-design.css">

    <title>CodeNerd</title>

</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- <button class="btn brandB"> -->
                <a class="brandB" role="button" href="home.php"><img class="img" src="codenerd.png" height="50" width="100"></a>
                <!-- </button> -->

                <button type="button" class="navbar-toggle" data-target="#navCol" data-toggle="collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
            </div>
            <!-- Navigation bar collaspe -->

            <div class="navbar-collapse collapse" id="navCol">
                <ul class="nav navbar-nav">
                    <li><a href="#TECHNOLOGY">TECHNOLOGY</a></li>
                    <li><a href="algorithms.php">ALGORITHM</a></li>
                    <li><a href="#CONTACT">CONTACT</a></li>

                </ul>

                <form class="navbar-form navbar-left" role="search" method="POST">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="submit">Go</button> <!-- Search bar -->
                        </span>
                        <input type="text" class="form-control" placeholder="Search" id="search">

                        <span class="glyphicon glyphicon-search form-control-feedback"></span>

                    </div>
                </form>

                <ul class="nav navbar-nav navbar-right">

                    <!-- Login Button  -->
                    <form class="navbar-form navbar-right">
                        <li><input class="btn btn-success " type="button" value="Login" data-target="#loginmodal" data-toggle="modal"></li>

                    </form>
                    <!-- Sign Up Button  -->
                    <form class="navbar-form navbar-right">
                        <li><input class="btn btn-info" type="button" value="Signup" data-target="#signupmodal" data-toggle="modal"></li>
                    </form>

                </ul>



                <!-- <form class="navbar-form navbar-right">
                    <input class="btn btn-info" type="button" value="Signup" data-target="#signupmodal" data-toggle="modal">
                </form>    -->


            </div>

        </div>
    </nav>


    <div>

        <!-- login form-->

        <form id="loginform" class="form" method="POST">
            <div class="modal fade" id="loginmodal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">

                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">
                                &times;
                            </button>
                            <p class="h3" id="modalLabel">LogIn:</p>
                        </div>
                        <div class="modal-body">
                            <!-- login Message  -->
                            <div id="loginmessage">

                            </div>


                            <div class="input-group">
                                <!-- <label for="loginemail">
                                    Email<span style="color: red;"> *</span>
                                </label> -->
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="email" id="loginemail" placeholder="Email" class="form-control" maxlength="50" name="loginemail">
                            </div>

                            <div class="input-group">

                                <!-- <label for="password">
                                    Password<span style="color: red;"> *</span>
                                </label> -->
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" id="loginpassword" placeholder="Password" class="form-control" maxlength="30" name="loginpassword">
                            </div>

                            <div class="checkbox">

                                <label for="checkbox">
                                    <input type="checkbox" id="rememberMe" name="rememberme">
                                    Remember me
                                </label>

                                <a class="pull-right" style="cursor: pointer;" data-target="#forgotpasswordModal" data-toggle="modal" data-dismiss="modal">
                                    Forgot password?
                                </a>
                            </div>



                        </div>
                        <div class="modal-footer">

                            <input class="btn btn-info pull-left" type="button" value="Regester" data-target="#signupmodal" data-toggle="modal" data-dismiss="modal">

                            <input type="submit" class="btn btn-success btn-right" name="login" value="Login">

                            <button class="btn btn-default btn-right" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>

                </div>


            </div>

        </form>


        <!--Forgot password form-->
        <form method="post" id="forgotpasswordform">
            <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">
                                &times;
                            </button>
                            <h4 id="myModalLabel">
                                Forgot Password? Enter your email address:
                            </h4>
                        </div>
                        <div class="modal-body">

                            <!--forgot password message from PHP file-->
                            <div id="forgotpasswordmessage"></div>


                            <div class="input-group">
                                <!-- <label for="email">
                                    Email address<span style="color: red;"> *</span>
                                </label> -->
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="email" id="forgotemail" placeholder="Email address" class="form-control" maxlength="50" name="forgotemail">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-success" name="forgotpassword" type="submit" value="Submit">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                            </button>
                            <input class="btn btn-info pull-left" type="button" value="Regester" data-target="#signupmodal" data-toggle="modal" data-dismiss="modal">

                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Signup  form-->
        <form id="signupform" class="form" method="POST">

            <div class="modal fade" id="signupmodal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">

                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">
                                &times;
                            </button>
                            <p class="h3" id="modalLabel">Sing Up here:</p>
                        </div>
                        <div class="modal-body">

                            <!-- Signup Message -->

                            <div id="signupmessage">

                            </div>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <!-- <label for="username">
                                    Username<span style="color: red;"> *</span>
                                </label> -->
                                <input type="text" id="signupusername" placeholder="Username" class="form-control" name="signupusername">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <!-- <label for="email">
                                    Email address<span style="color: red;"> *</span>
                                </label> -->
                                <input type="email" id="signupemail" placeholder="Email address" class="form-control" maxlength="50" name="signupemail">
                            </div>

                            <div class="input-group">
                                <!-- <label for="password">
                                    Password<span style="color: red;"> *</span>
                                </label> -->
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" id="signuppassword" placeholder="Password" class="form-control" name="signuppassword" maxlength="30">

                            </div>

                            <div class="input-group">
                                <!-- <label for="password2">
                                    Re-enter Password<span style="color: red;"> *</span>
                                </label> -->
                                <span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i></span>

                                <input type="password" id="signuppassword2" placeholder="Re-enter Password" class="form-control" name="signuppassword2" maxlength="30">
                            </div>



                        </div>
                        <div class="modal-footer">

                            <input type="submit" class="btn btn-success btn-right" name="signup" value="SignUp">

                            <button class="btn btn-default btn-right" data-dismiss="modal">Cancel</button>

                        </div>
                    </div>

                </div>


            </div>


        </form>


    </div>

    <div class="container text-center" style="margin-top: 100px">
        <h2><b>CodeNerd</b></h2>
        <h4><em>Welcome codenerds!</em></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <!-- container technology and other section  -->

    <div id="TECHNOLOGY" class="container-fluid">
        <P class="h1" style="text-align: center">The most concise screencasts for the working developer</p>
        <div class="row">

            <div class="thumbnaila card col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <!-- <div class=""> -->
                <div class="thumbnaila face face1">
                    <div class="caption content">
                        <img src="java.png">
                        <h3>Java</h3>
                    </div>
                </div>
                <div class="thumbnaila face face2">
                    <div class="caption content">
                        <p>
                            You've seen the craze for learning code. But what exactly is coding?

                        </p>
                        <a href="#">Read More</a>
                    </div>

                </div>
                <!-- </div> -->
            </div>
            <div class="thumbnaila card col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <!-- <div class=""> -->
                <div class="thumbnaila face face1">
                    <div class="caption content">
                        <img src="c.png">
                        <h3>C</h3>
                    </div>
                </div>
                <div class="thumbnaila face face2">
                    <div class="caption content">
                        <p>
                            You've seen the craze for learning code. But what exactly is coding?

                        </p>
                        <a href="test.php">Read More</a>
                    </div>

                </div>
                <!-- </div> -->
            </div>

            <div class="thumbnaila card col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <!-- <div class=""> -->
                <div class="thumbnaila face face1">
                    <div class="caption content">
                        <img src="python.png">
                        <h3>Python</h3>
                    </div>
                </div>
                <div class="thumbnaila face face2">
                    <div class="caption content">
                        <p>
                            You've seen the craze for learning code. But what exactly is coding?
                        </p>
                        <a class="center" href="test-python.php">Read More</a>
                    </div>

                </div>
                <!-- </div> -->
            </div>



            <div class="thumbnaila card col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <!-- <div class=""> -->
                <div class="thumbnaila face face1">
                    <div class="caption content">
                        <img src="download.jpg">
                        <h3>ALGORITHM</h3>
                    </div>
                </div>
                <div class="thumbnaila face face2">
                    <div class="caption content">
                        <p>
                            You've seen the craze for learning code. But what exactly is coding?

                        </p>
                        <a href="./algo.html">Read More</a>
                    </div>

                </div>
                <!-- </div> -->
            </div>

            <div class="thumbnaila card col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <!-- <div class=""> -->
                <div class="thumbnaila face face1">
                    <div class="caption content">
                        <img src="pc.png">
                        <h3>Design</h3>
                    </div>
                </div>
                <div class="thumbnaila face face2">
                    <div class="caption content">
                        <p>
                            You've seen the craze for learning code. But what exactly is coding?

                        </p>
                        <a href="#">Read More</a>
                    </div>

                </div>
                <!-- </div> -->
            </div>

            <div class="thumbnaila card col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <div class="thumbnaila face face1">
                    <div class="caption content">
                        <img src="c.png">
                        <h3>C</h3>
                    </div>
                </div>
                <div class="thumbnaila face face2">
                    <div class="caption content">
                        <p>
                            You've seen the craze for learning code. But what exactly is coding?

                        </p>
                        <a href="test.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <a href="programming-tutorials.php" class="btn btn-default center-block" style="border-radius: 10px;border:2px solid;"><b>Browse All Tutorials</b></a>


    </div>

    <br>


            <!-- more expand tutorials  -->

            <div class="container-fluid" style="margin-bottom: 50px">
        <h2 class="text-center">What will you learn next?</h2>
        <p class="text-center">
            There's no shortage of content at <b>CodeNerd</b>. Check back most work-days for new lessons on your favorite web
        </p>
        <div class="row">
            <a id="trigger1" href="#" onmouseover="show1()">
                <div class="col-lg-4">
                    <div class="col-lg-4" style="height: 270px;background-image:linear-gradient(to bottom, #FEC63B, #F19C1B);border-radius:10px">
                        <div class="modal-header">
                            <p class="text-center"><button class="btn btn-default center-block" style="border-radius: 10px;">Vue</button></p>
                        </div>
                        <div class="modal-body">
                            <p class="text-center"><img src="vue.png"></p>
                        </div>
                        <div class="modal-footer">
                            <p class="text-center">
                                Intermediate Difficulty
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 text-center" style="height:270px;border:1px solid #EEEEEE;border-radius:0px 10px 10px 0px">

                        <div class="header">
                            <a style="font-size: 15px" href="#">JavaScript Techniques For Server-Side Applications</a>
                        </div>
                        <div class="body">
                            <p style="font-size: 12px">
                                Many Laravel apps don’t warrant the complexity of a full front-end framework like Vue or React. In this series, we’ll walk through a handful of simple ways to add dynamic functionality to your apps. By combining various strategies, you can keep your simple Laravel stack, but still build interfaces that feel fast, fresh, and dynamic.
                            </p>
                        </div>
                        <div class="footer">
                            <p class="text-center">
                                <button id="hiddenButton1" class="btn btn-block btn-primary" style="border-radius: 10px;display:none">Start Learning</button>
                            </p>
                        </div>



                    </div>
                </div>
            </a>
            <a id="trigger2" href="test-html-logged-in.php" onmouseover="show2()">
                <div class="col-lg-4">
                    <div class="col-lg-4" style="height: 270px;background-image:linear-gradient(to bottom, #23C6F7, #518FFC);border-radius:10px">
                        <div class="modal-header">
                            <p class="text-center"><button class="btn btn-default center-block" style="border-radius: 10px;">Katas</button></p>
                        </div>
                        <div class="modal-body">
                            <p class="text-center"><img src="code-katas-in-php.webp" width="60px" height="60px"></p>
                        </div>
                        <div class="modal-footer">
                            <p class="text-center">
                                Intermediate Difficulty
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 text-center" style="height:270px;border:1px solid #EEEEEE;border-radius:0px 10px 10px 0px">

                        <div class="header">
                            <a style="font-size: 15px" href="#">Code Katas with PHPUnit</a>
                        </div>
                        <div class="body">
                            <p style="font-size: 12px">
                            If martial artists use kata as a method for exercise and practice, what might be the equivalent for coders like us? Coding katas are short, repeatable programming challenges which are meant to exercise everything from your focus, to your workflow.
                            In this series, one kata per episode, we'll work through a wide variety of challenges to build up your TDD process.
                            </p>
                        </div>
                        <div class="footer">
                            <p class="text-center">
                                <button id="hiddenButton2" class="btn btn-block btn-primary" style="border-radius: 10px;display:none">Start Learning</button>
                            </p>
                        </div>



                    </div>
                </div>
            </a>
            <a id="trigger3" href="#" onmouseover="show3()">
                <div class="col-lg-4">
                    <div class="col-lg-4" style="height: 270px;background-image:linear-gradient(to bottom, #6BDBC2, #30B89A);border-radius:10px">
                        <div class="modal-header">
                            <p class="text-center"><button class="btn btn-default center-block" style="border-radius: 10px;">Laravel</button></p>
                        </div>
                        <div class="modal-body">
                            <p class="text-center"><img src="laravel-6-from-scratch.webp" width="60px" height="60px"></p>
                        </div>
                        <div class="modal-footer">
                            <p class="text-center">
                                Intermediate Difficulty
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 text-center" style="height:270px;border:1px solid #EEEEEE;border-radius:0px 10px 10px 0px">

                        <!-- <div class="header"> -->
                        <a style="font-size: 15px" href="#">Laravel 6 From Scratch</a>
                        <!-- </div> -->
                        <!-- <div class="body"> -->
                        <p style="font-size: 12px">
                        Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.
                        In this series, step by step, I'll show you how to build web applications with Laravel 6.Once complete, you should have all the tools you need. Let's get to work!
                        </p>
                        <!-- </div> -->
                        <!-- <div class="footer"> -->
                        <p class="text-center">
                            <button id="hiddenButton3" class="btn btn-block btn-primary" style="border-radius: 10px;display:none">Start Learning</button>
                        </p>
                        <!-- </div> -->



                    </div>
                </div>
            </a>
        </div>

        <!-- 2nd part of extra tech -->

        <div class="row" style="margin-top:50px">
            <a id="trigger4" href="test-html.php" onmouseover="show4()">
                <div class="col-lg-4">
                    <div class="col-lg-4" style="height: 270px;background-image:linear-gradient(to bottom, #F4487F, #EE465B);border-radius:10px">
                        <div class="modal-header text-center">
                            <p class="text-center"><button class="btn btn-default center-block" style="border-radius: 10px;">HTML5</button></p>
                        </div>
                        <div class="modal-body">
                            <p class="text-center"><img src="html5.png"></p>
                        </div>
                        <div class="modal-footer">
                            <p class="text-center">
                                Intermediate Difficulty
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 text-center" style="height:270px;border:1px solid #EEEEEE;border-radius:0px 10px 10px 0px">

                        <div class="header">
                            <a style="font-size: 15px" href="#">JavaScript Techniques For Server-Side Applications</a>
                        </div>
                        <div class="body">
                            <p style="font-size: 12px">
                                Many Laravel apps don’t warrant the complexity of a full front-end framework like Vue or React. In this series, we’ll walk through a handful of simple ways to add dynamic functionality to your apps. By combining various strategies, you can keep your simple Laravel stack, but still build interfaces that feel fast, fresh, and dynamic.
                            </p>
                        </div>
                        <div class="footer">
                            <p class="text-center">
                                <button id="hiddenButton4" class="btn btn-block btn-primary" style="border-radius: 10px;display:none">Start Learning</button>
                            </p>
                        </div>



                    </div>
                </div>
            </a>
            <a id="trigger5" href="#" onmouseover="show5()">
                <div class="col-lg-4">
                    <div class="col-lg-4" style="height: 270px;background-color:#FBBA32;border-radius:10px">
                        <div class="modal-header">
                            <p class="text-center"><button class="btn btn-default center-block" style="border-radius: 10px;">Vue</button></p>
                        </div>
                        <div class="modal-body">
                            <p class="text-center"><img src="vue.png"></p>
                        </div>
                        <div class="modal-footer">
                            <p class="text-center">
                                Intermediate Difficulty
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 text-center" style="height:270px;border:1px solid #EEEEEE;border-radius:0px 10px 10px 0px">

                        <div class="header">
                            <a style="font-size: 15px" href="#">JavaScript Techniques For Server-Side Applications</a>
                        </div>
                        <div class="body">
                            <p style="font-size: 12px">
                                Many Laravel apps don’t warrant the complexity of a full front-end framework like Vue or React. In this series, we’ll walk through a handful of simple ways to add dynamic functionality to your apps. By combining various strategies, you can keep your simple Laravel stack, but still build interfaces that feel fast, fresh, and dynamic.
                            </p>
                        </div>
                        <div class="footer">
                            <p class="text-center">
                                <button id="hiddenButton5" class="btn btn-block btn-primary" style="border-radius: 10px;display:none">Start Learning</button>
                            </p>
                        </div>



                    </div>
                </div>
            </a>
            <a id="trigger6" href="#" onmouseover="show6()">
                <div class="col-lg-4">
                    <div class="col-lg-4" style="height: 270px;background-color:#FBBA32;border-radius:10px">
                        <div class="modal-header">
                            <p class="text-center"><button class="btn btn-default center-block" style="border-radius: 10px;">Vue</button></p>
                        </div>
                        <div class="modal-body">
                            <p class="text-center"><img src="vue.png"></p>
                        </div>
                        <div class="modal-footer">
                            <p class="text-center">
                                Intermediate Difficulty
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 text-center" style="height:270px;border:1px solid #EEEEEE;border-radius:0px 10px 10px 0px">

                        <!-- <div class="header"> -->
                        <a style="font-size: 15px" href="#">JavaScript Techniques For Server-Side Applications</a>
                        <!-- </div> -->
                        <!-- <div class="body"> -->
                        <p style="font-size: 12px">
                            Many Laravel apps don’t warrant the complexity of a full front-end framework like Vue or React. In this series, we’ll walk through a handful of simple ways to add dynamic functionality to your apps. By combining various strategies, you can keep your simple Laravel stack, but still build interfaces that feel fast, fresh, and dynamic.
                        </p>
                        <!-- </div> -->
                        <!-- <div class="footer"> -->
                        <p class="text-center">
                            <button id="hiddenButton6" class="btn btn-block btn-primary" style="border-radius: 10px;display:none">Start Learning</button>
                        </p>
                        <!-- </div> -->



                    </div>
                </div>
            </a>
        </div>


        <a href="programming-tutorials-loged-in.php" class="btn btn-info center-block" style="border-radius: 10px;border:2px solid;margin-top:50px"><b>Explore More</b></a>


    </div>


    <!-- Container (Portfolio Section) -->
    <div class="container-fluid text-center bg-grey">
        <h2>Quotes We Love!</h2>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <h4>"When in doubt, use brute force :) "<br><span>Ken Thompson</span></h4>
                </div>

                <div class="item">
                    <h4>"UNIX is basically a simple operating system, but you have to be a genius to understand the simplicity"<br><span>Dennis Ritchie</span></h4>
                </div>

                <div class="item">
                    <h4>"See, you not only have to be a good coder to create a system like Linux, you have to be a sneaky bastard too"<br><span>Linus Torvalds</span></h4>
                </div>
                <br><br>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <br>


    <!-- Container (Contact Section) -->
    <div id="CONTACT" class="container-fluid bg-grey">

        <h2 class="text-center">CONTACT</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Swe,SUST</p>
                <p><span class="glyphicon glyphicon-phone"></span> +00 12121212</p>
                <p><span class="glyphicon glyphicon-envelope"></span> codenerd@gmail.com</p>
            </div>
            <div class="col-sm-7">
                <!-- <div class="col-sm-7"> -->
                <form id="contactform" class="form" method="POST">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <!-- <i class="glyphicon glyphicon-user"></i> -->
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <!-- <i class="glyphicon glyphicon-envelope"></i> -->
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <div class=" input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                        <textarea class="form-control" id="message" name="comments" placeholder="Comment" rows="5"></textarea>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input type="submit" class="btn btn-default pull-right" value="Send" name="send">
                        </div>
                    </div>

                </form>
            </div>

            <div class="contactformerror">

            </div>
        </div>
    </div>

    <script src="home.js"></script>

    <script>
        
        show1 = function() {
            $("#hiddenButton1").fadeIn(1000);
        }
        show2 = function() {
            $("#hiddenButton2").fadeIn(1000);
        }
        show3 = function() {
            $("#hiddenButton3").fadeIn(1000);
        }
        show4 = function() {
            $("#hiddenButton4").fadeIn(1000);
        }
        show5 = function() {
            $("#hiddenButton5").fadeIn(1000);
        }
        show6 = function() {
            $("#hiddenButton6").fadeIn(1000);
        }
    </script>


    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1000, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function() {
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>



</body>

</html>