<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="home.css"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- <script src="bootstrap.min.js"></script> -->


    <!-- <link rel="stylesheet" href="card-design.css"> -->

    <title>CodeNerd</title>

</head>




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
            <li><a href="#TECHNOLOGY">TECHNOLOGY</a></li>
                    <li><a href="algorithms-logged-in.php">ALGORITHM</a></li>

                <li><a href="#CONTACT">CONTACT</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
            <li role="presentation">
                        <a href="#"><span class="glyphicon glyphicon-bell"></span> Notifications<span class="badge">4</span></a>
                          
                     </li>
                <li role="presentation">
                    <a href="profile.php"><span class="glyphicon glyphicon-user"></span> ' . $username . '</a>



                </li>


                <li><a href="homet.php?logout=1">LogOut</a></li>
            </ul>
        </div>

    </div>
</nav>

<div class="container">
    <div class="row" style="margin-top: 100px">

        <div class="col-lg-6">
            <form id="submitform" class="form" method="POST">
            

            
                <label for="header">Name:</label>
                <input class="form-control" type="text" name="header" id="header">

                <label for="beforecompiler">Description:</label>
                <p class="alert alert-info text-center">  Use html tags to look beautiful </p>
                <textarea id="beforecompiler" name="beforecompiler" class="form-control" id="beforecompiler" rows="20"></textarea>
                <p id="preview1" class="btn btn-primary pull-right">Preview</p>
                <br>

                <input type="submit" class="btn btn-success" value="Send">

                <div  id="datasendmessage"></div>


            </form>

        </div>


        <div id="preview" class="col-lg-6">
            <h3 class="text-center">Preview</h3>

            <div class="well">
                <div id="article1"></div>

            </div>

        </div>


    </div>

                    

</div>