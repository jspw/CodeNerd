<?php

session_start();

include("logout.php");

if (!(isset($_SESSION['user_id']) && $_SESSION['user_id'] != '')) {
    


    echo '

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">

            <!-- <button class="btn brandB"> -->
            <a class="brandB" role="button" href="homet.php"><img class="img" src="codenerd.png" height="50" width="100"></a>
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
                
                <li><a href="#CONTACT">CONTACT</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right" style="margin-left: 1px">

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

<div class="container" style="margin-top: 200px">
    <div class="alert alert-warning">
        <p class="text-center" style="font-size: 20px">You need to be logged in to contribute in our website !</p>
    </div>
</div>

<div class="container footer" style="position: fixed;
left: 0;
bottom: 0;
width: 100%;
text-align: center;">
          <!-- Container (Contact Section) -->
  <div id="CONTACT" class="container-fluid bg-grey">

<h2 class="text-center">CONTACT</h2>
<div class="row">
  <div class="col-sm-5">
      <p>Contact us and we will get back to you within 24 hours.</p>
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

     

  </div>

    ';
} else {

    $beforecompiler=null;
    $aftercompiler=null;
    $code=null;


    include("connection.php");
    $id = $_SESSION['user_id'];
    $sql = "SELECT username FROM users WHERE user_id='$id'";
    $result = mysqli_query($link, $sql);
    if (!$result) {
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }
    //log the user in: Set session variables

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $username = $row['username'];
    echo '
            
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

                <li><a href="#CONTACT">CONTACT</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
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
            <label for="sel1">Select language/Technology:</label>
            <select type="text" name="language" id="language" class="form-control">
                <option>C</option>
                <option>Python3</option>
                <option>HTML5</option>
                <option>Java</option>
                <option>Bash</option>
            </select>
            
                <label for="header">Header:</label>
                <input class="form-control" type="text" name="header" id="header">

                <label for="beforecompiler">Article 1 (Before Compiler):</label>
                <p class="alert alert-info text-center">  Use html tags to look beautiful </p>
                <textarea id="beforecompiler" name="beforecompiler" class="form-control" id="beforecompiler" rows="20"></textarea>
                <p id="preview1" class="btn btn-primary pull-right">Preview</p>

                <label for="code">Code:</label>
                <textarea id="code" name="code" class="form-control" rows="10"></textarea>

                <label for="aftercompiler">Article 2(After Compiler):</label>
                <p class="alert alert-info text-center">  Use html tags to look beautiful </p>
                <textarea id="aftercompiler" name="aftercompiler" class="form-control" rows="20"></textarea>
                <p id="preview2" class="btn btn-primary pull-right">Preview</p>
                <br>

                <input type="submit" class="btn btn-success" value="Send">

                <div  id="datasendmessage"></div>


            </form>

        </div>


        <div id="preview" class="col-lg-6">
            <h3 class="text-center">Preview</h3>

            <div class="well">
                <label class="label label-success center-block" style="font-size: 20px">Article 1</label>
                <div id="article1"></div><br><br><br>
                <label class="center-block label label-success" style="font-size: 20px">Article 2</label>
                <div id="article2"></div>
                <div>

                </div>

            </div>

        </div>


    </div>

                    

</div>

<div class="container footer" >
          <!-- Container (Contact Section) -->
  <div id="CONTACT" class="container-fluid bg-grey">

<h2 class="text-center">CONTACT</h2>
<div class="row">
  <div class="col-sm-5">
      <p>Contact us and we will get back to you within 24 hours.</p>
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
              <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
          </div>
          <br>
          <div class="row">
              <div class="col-sm-12 form-group">
                  <input type="submit" class="btn btn-default pull-right" value="Send" name="send">
              </div>
          </div>

      </form>
  </div>

  <div id="contactformerror">

  </div>
</div>
</div>

     

  </div>



            
            ';
}
