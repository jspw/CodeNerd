<?php
session_start();

if(isset($_SESSION['user_id'])){
    header("location: test-html-logged-in.php");
}else{
	include("connection.php");
	
	$sql = "SELECT * from languages ";
	$result = mysqli_query($link,$sql);

if(!$result){
    echo '<div class="alert alert-danger">Error running the query!</div>';
	exit;
}

//log Out

include("logout.php");

//remember me
include("rememberme.php");

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<!-- bootsrtap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!-- custom css  -->
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="home.css">



	<!-- Font Awesome JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

	<!-- for text editor 
 -->

	<script src="jquery-linedtextarea.js"></script>
	<link href="jquery-linedtextarea.css" type="text/css" rel="stylesheet" />


	<!-- Google icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<title>CodeNerd</title>

	<style>



	</style>

</head>

<body>

	<div id="mySidebar" class="sidebar">
		<!-- <span href="javascript:void(0)" class="closebtn fas fa-arrow-left" onclick="closeNav()">x</span> -->
		<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a> -->
		<i href="javascript:void(0)" onclick="closeNav()" class=" closebtn fas fa-arrow-left" style="cursor: pointer ; margin-top: 70px"></i>

		<ul class="list-group">
			<li class="h4 title">HTML5 Tutorial:</li>
            
            <?php

                while($row = mysqli_fetch_array($result)){
                    if($row['name']=='html5'){
                        $username = $row['username']; 
                        $id = $row['id']; 
                        $header = $row['header']; 
                        $beforecompiler = $row['beforeCompiler'];
                        $afterCompiler = $row['afterCompiler']; 
                        $code = $row['code']; 
                        echo '
                        <li><a id ='.$id.' href="#" onclick="load('.$id.')">HTML5-'.$header.'</a></li>
                        ';
                    }
                    
                }


            ?>


			<li class="h4 title">Useful Resources of HTML5:</li>


			<li id="C - Questions &amp; Answers"><a href="/cprogramming/cprogramming_questions_answers.htm">C - Questions &amp; Answers</a></li>
			<li id="C - Quick Guide"><a href="/cprogramming/c_quick_guide.htm">C - Quick Guide</a></li>
			<li id="C - Useful Resources"><a href="/cprogramming/c_useful_resources.htm">C - Useful Resources</a></li>
			<li id="C - Discussion"><a href="/cprogramming/cprogramming_discussion.htm">C - Discussion</a></li>

			

			<a id="quiz" href="quiz.php"><li  class="h4 title">Quiz:</li></a>
		</ul>


	</div>

	<div id="main">
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
					<!-- <li><a href="home.php">Home</a></li> -->
					<li><a href="programming-tutorials.php">TECHNOLOGY</a></li>
					<li><a href="algorithms.php">ALGORITHM</a></li>

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


            </div>
			</div>



        </nav>
        

		<button style="margin-top: 70px" class="openbtn" onclick="openNav()">☰</button>

		<div id="beforeCompiler">

		</div>


                <!-- html text editor -->
    <div class="row">

        <div class="col-lg-6">
            <form id="submitform" class="form" method="POST">

                <label style="font-size: 20px">Write your HTML code here:</label>
                <p id="preview1" class="btn btn-success pull-right">Run</p><br><br>
                <textarea id="beforecompiler" name="beforecompiler" class="form-control" id="beforecompiler" rows="25" style="min-height: 95%;border-radius:5px"></textarea>

            </form>

        </div>


        <div id="preview" class="col-lg-6">
            <label style="font-size: 20px">Preview:</label><br><br>

            <div class="well" style="min-height: 100%;border-radius:0px">
                <div id="article1">

                </div>

            </div>


        </div>



    </div>

		<div id="info">


        </div>
    


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

	<!-- main js file  -->

	<script src="home.js"></script>  

	<!-- menu files of tuturials -->

	<script src="test.js"></script>

	<script>
		function openNav() {
			document.getElementById("mySidebar").style.width = "300px";
			document.getElementById("main").style.marginLeft = "300px";
		}

		function closeNav() {
			document.getElementById("mySidebar").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";
		}
	</script>

	<script>
        
              ///preview

      $("#preview1").click(function(event){
          event.preventDefault();
        //  window.alert("FUCK");
        var data = document.getElementById("beforecompiler").value;
        

        //delete the fucking class

        // while(data.match(/class="/g)){
        // var start = data.search("class=\"");
        // console.log(start);
        // for(i=start+7;i<data.length;i++){
        //     if(data[i]=="\"")
        //         {
        //             end=i;
        //             console.log(end);
        //             break;
        //         }
        // }
        // var str = data.substr(start,end-start+1);
        // console.log(str);
        // data=data.replace(str,"");

        // console.log(data);

        // }

        //filtering

        data= data.replace(/\=/g,"equalx");
        data= data.replace(/\[/g,"br31");
        data= data.replace(/\]/g,"br32");
    //    data= data.replace(/\{}/g,"br2");
    //    data= data.replace(/\()/g,"br1");




        $.ajax({
          url :"preview.php",
          type:"POST",
          cache: false,
          dataType:"html",
          data:data,
          success:function(data){
            if(data){
              $("#article1").html(data);
//              window.alert(data);
            }
          },
          error:function(){
            $("#article1").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
          }
        });

      });

        var load = function(data){
        //    console.log("bal"+data);
        $(this).click(function (event) { 
   //         event.preventDefault();
         });
        
            $.ajax({
				url: "load.php",
                type: "POST",
                data:{
                    data1:data
                },
				success: function(data) {
					if (data) {
						$("#beforeCompiler").html(data);
						//              window.alert(data);
					}
				},
				error: function() {
					$("#beforeCompiler").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
				}
            });

        } ;
            
	</script>

</body>

</html>