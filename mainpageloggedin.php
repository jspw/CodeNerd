<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="home.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <title>CodeNerd</title>

</head>


<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- <button class="btn brandB"> -->
                    <a class="brandB" role="button" href="#" ><img class = "img" src="codenerd.png"  height="50" width="100"></a> 
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
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Algorithm</a></li>


                        <!-- DropDown Menu -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Courses
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">C++</a></li>
                          <li><a href="#">Java</a></li>
                          <li><a href="#">Python</a></li>
                        </ul>
                      </li>

                    <li><a href="#">Help</a></li>

                </ul>

                <form class="navbar-form navbar-left" role="search" method="POST">
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
                    <li  role="presentation">
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a>
                    </li>


                    <li><a href="index.php?logout=1">LogOut</a></li>
                
                    <!-- <form class="navbar-form navbar-right">
                        <input  class="btn btn-success " type="button" value="Logout" >
                        
                    </form> -->
                </ul>
            </div>

        </div>
    </nav>
    

    <div class="container-fluid" style ="margin-top: 50px">
        <div class="row">
            <div class="col-sm-4 col-md-2">
                <a class="thumbnail">
                    <img src="python.png" alt="feature" height="200px" width="150px">
                    <div class="caption">
                        <h3>Product Title</h3>
                        <p>This is the best</p>
                        <p>Description</p>
                        <p>
                            <a  href="#" class="btn btn-primary btn-lg" role="button">Add to Watch list</a>
                            <a  href="#" class="btn btn-success btn-lg" role="button">Add to busket</a>
                        </p>
                    </div>
                </a>
            </div>
            
            <div class="col-sm-4 col-md-2">
                <a class="thumbnail">
                    <img src="python.png" alt="feature" height="200px" width="150px">
                    <div class="caption">
                        <h3>Product Title</h3>
                        <p>This is the best</p>
                        <p>Description</p>
                        <p>
                            <a  href="#" class="btn btn-primary btn-lg" role="button">Add to Watch list</a>
                            <a  href="#" class="btn btn-success btn-lg" role="button">Add to busket</a>
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-md-2">
                <a class="thumbnail">
                    <img src="python.png" alt="feature" height="200px" width="150px">
                    <div class="caption">
                        <h3>Product Title</h3>
                        <p>This is the best</p>
                        <p>Description</p>
                        <p>
                            <a  href="#" class="btn btn-primary btn-lg" role="button">Add to Watch list</a>
                            <a  href="#" class="btn btn-success btn-lg" role="button">Add to busket</a>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>

</body>

</html>
