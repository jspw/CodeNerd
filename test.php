<?php
session_start();
include("connection.php");

if(isset($_SESSION['user_id'])){
    header("location: test-logged-in.php");
}

//log Out

include("logout.php");

//remember me
include("rememberme.php");
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
		<i href="javascript:void(0)" onclick="closeNav()" class=" closebtn fas fa-arrow-left" style="cursor: pointer ; margin-top: 30px"></i>

		<ul class="list-group">
			<li class="h4 title">C Programming Tutorial:</li>
			<li id="C-Home"><a href="#">C - Home</a></li>
			<!-- <li><a id="" href="/cprogramming/c_overview.htm">C - Overview</a></li> -->
			<li id="C-Environment-Setup"><a href="#">C - Environment Setup</a></li>
			<li id="C-Program-Structure"><a href="/cprogramming/c_program_structure.htm">C - Program Structure</a></li>
			<li id="C-Basic-Syntax"><a href="/cprogramming/c_basic_syntax.htm">C - Basic Syntax</a></li>
			<li id="C-Data-Types"><a href="/cprogramming/c_data_types.htm">C - Data Types</a></li>
			<li id="C-Variables"><a href="/cprogramming/c_variables.htm">C - Variables</a></li>
			<li id="C-Constants-and-Literals"><a href="/cprogramming/c_constants.htm">C - Constants</a></li>
			<li id="C-Storage-Classes"><a href="/cprogramming/c_storage_classes.htm">C - Storage Classes</a></li>
			<li id="C - Operators"><a href="/cprogramming/c_operators.htm">C - Operators</a></li>
			<li id="C - Decision Making"><a href="/cprogramming/c_decision_making.htm">C - Decision Making</a></li>
			<li id="C-Loops"><a href="/cprogramming/c_loops.htm">C - Loops</a></li>
			<li id="C-Functions"><a href="/cprogramming/c_functions.htm">C - Functions</a></li>
			<li id="C - Scope Rules"><a href="/cprogramming/c_scope_rules.htm">C - Scope Rules</a></li>
			<li id="C - Arrays"><a href="/cprogramming/c_arrays.htm">C - Arrays</a></li>
			<li id="C - Pointers"><a href="/cprogramming/c_pointers.htm">C - Pointers</a></li>
			<li id="C - Strings"><a href="/cprogramming/c_strings.htm">C - Strings</a></li>
			<li id="C - Structures"><a href="/cprogramming/c_structures.htm">C - Structures</a></li>
			<li id="C - Unions"><a href="/cprogramming/c_unions.htm">C - Unions</a></li>
			<li id="C - Bit Fields"><a href="/cprogramming/c_bit_fields.htm">C - Bit Fields</a></li>
			<li id="C - Typedef"><a href="/cprogramming/c_typedef.htm">C - Typedef</a></li>
			<li id="C - Input &amp; Output"><a href="/cprogramming/c_input_output.htm">C - Input &amp; Output</a></li>
			<li id="C - File I/O"><a href="/cprogramming/c_file_io.htm">C - File I/O</a></li>
			<li id="C - Preprocessors"><a href="/cprogramming/c_preprocessors.htm">C - Preprocessors</a></li>
			<li id="C - Header Files"><a href="/cprogramming/c_header_files.htm">C - Header Files</a></li>
			<li id="C - Type Casting"><a href="/cprogramming/c_type_casting.htm">C - Type Casting</a></li>
			<li id="C - Error Handling"><a href="/cprogramming/c_error_handling.htm">C - Error Handling</a></li>
			<li id="C - Recursion"><a href="/cprogramming/c_recursion.htm">C - Recursion</a></li>
			<li id="C - Variable Arguments"><a href="/cprogramming/c_variable_arguments.htm">C - Variable Arguments</a></li>
			<li id="C - Memory Management"><a href="/cprogramming/c_memory_management.htm">C - Memory Management</a></li>
			<li id="C - Command Line Arguments"><a href="/cprogramming/c_command_line_arguments.htm">C - Command Line Arguments</a></li>


			<li class="h4 title">C Programming useful Resources:</li>


			<li id="C - Questions &amp; Answers"><a href="/cprogramming/cprogramming_questions_answers.htm">C - Questions &amp; Answers</a></li>
			<li id="C - Quick Guide"><a href="/cprogramming/c_quick_guide.htm">C - Quick Guide</a></li>
			<li id="C - Useful Resources"><a href="/cprogramming/c_useful_resources.htm">C - Useful Resources</a></li>
			<li id="C - Discussion"><a href="/cprogramming/cprogramming_discussion.htm">C - Discussion</a></li>

			

			<a id="quiz" href="quiz.php"><li  class="h4 title">Quiz:</li></a>
		</ul>


	</div>

	<div id="main">


		<nav class="navbar navbar-inverse " role="navigation">
			<!-- <div class="container-fluid"> -->
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
					<li><a href="programming-tutorials.php">Technology</a></li>
					<li><a href="algorithms.php">Algorithm</a></li>
					<li><a href="#">About us</a></li>

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

			<!-- </div> -->


		</nav>


		<button class="openbtn" onclick="openNav()">☰</button>

		<div id="beforeCompiler">

		</div>

		<!-- <div class="container-fluid"> -->

		<h3>Welcome to the C Programming</h3>


		<form id="form" name="f2" method="POST">
			<label for="lang">Choose Language</label>

			<select class="form-control" name="language">
				<option value="c">C</option>
				<option value="cpp">C++</option>
				<option value="cpp11">C++11</option>
				<option value="java">Java</option>


			</select><br><br>
			<label class="label label-primary" style="font-size: 15px">Source Code:</label><br><br>
			<textarea id="code" class="form-control z-depth-1" name="code" rows="15"></textarea><br><br>

			<label class="label label-warning" style="font-size: 15px">Input:</label>
			<br><br>
			<textarea class="form-control z-depth-1" name="input" rows="5"></textarea><br><br>

			<button type="submit" id="st" class="btn btn-success" style="margin-bottom: 10px"><span class="glyphicon glyphicon-play"></span> Run Code</button>




		</form>

		<div id="info">

		</div>
		<!-- </div> -->

		<div id="afterCompiler">

		</div>


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
			document.getElementById("mySidebar").style.width = "200px";
			document.getElementById("main").style.marginLeft = "200px";
		}

		function closeNav() {
			document.getElementById("mySidebar").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";
		}
	</script>

	<!-- <script>
		$(function() {
			$(".lined").linedtextarea({
				selectedLine: 1
			});
		});
	</script> -->

	


	<script>
		//wait for page load to initialize script
		//listen for form submission
		$("#form").submit(function(event) {
			event.preventDefault();



			var datatopost = $(this).serializeArray();
			//    console.log(datatopost);

			$.ajax({
				url: "ccompiler.php",
				type: "POST",
				data: datatopost,
				success: function(data) {
					if (data) {
						$("#info").html(data);
						//              window.alert(data);
					}
				},
				error: function() {
					$("#info").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
				}
			});

		});

		// fun = function(event, filename) {
		// 	event.preventDefault();



		// 	//	 var datatopost = $(this).serializeArray();
		// 	//    console.log(datatopost);
		// 	filename = filename + ".php";

		// 	$.ajax({
		// 		url: "c-home.php",
		// 		type: "POST",
		// 		//	data: datatopost,
		// 		success: function(data) {
		// 			if (data) {
		// 				$("#beforeCompiler").html(data);
		// 				//              window.alert(data);
		// 			}
		// 		},
		// 		error: function() {
		// 			$("#beforeCompiler").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
		// 		}
		// 	});

		// 	//	$("#code").load("c.txt");

		// }

		// fun =  function(event,filename) {
		// 	event.preventDefault();

		// 	filename=filename+".php"
		// 	$("#lesson").load(filename);  
		// };


		// $("#c-home").click(function(event) {
		// 	fun(event, this);
		// });
	</script>



</body>

</html>