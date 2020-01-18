<?php
session_start();

if(isset($_SESSION['user_id'])){
    include("connection.php");
    header("location: dfs-logged-in.php");


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
    .centered
    {
      margin: auto;
      width: 50%;
      
      
    }
    a{
        color: lightsalmon;
    }
    h1,.hint{
      text-align: center;
      letter-spacing: 2px;
    }
    h3{
        letter-spacing: 2px;
    }
    code{
      color: darkred;
      background-color: lavenderblush ;
    }
    .sura {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 15%;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }
    
    
    li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }
    
    li a.active {
      background-color:#555;
      color: white;
    }
    
    li a:hover:not(.active) {
      background-color: #555;
      color: white;
    }
    </style>

</head>

<body>

	<div id="mySidebar" class="sidebar">
		<!-- <span href="javascript:void(0)" class="closebtn fas fa-arrow-left" onclick="closeNav()">x</span> -->
		<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a> -->
		<i href="javascript:void(0)" onclick="closeNav()" class=" closebtn fas fa-arrow-left" style="cursor: pointer ; margin-top: 30px"></i>

		<ul class="list-group">
			<li class="h4 title">Graph Traversal:</li>
            
            <li><a href="bfs.php">Breadth First Search</a></li>
            <li ><a class="active" href="dfs.php">Depth First Search</a></li>

            <a id="quiz" href="quiz.php"><li  class="h4 title">Quiz:</li></a>
            
            <a id="quiz" href="problems.php"><li  class="h4 title">Problems:</li></a>
		</ul>


	</div>

	<div id="main">


		<nav class="navbar navbar-inverse " role="navigation">
			<!-- <div class="container-fluid"> -->
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
			<!-- Navigation bar collaspe -->

			<div class="navbar-collapse collapse" id="navCol">
				<ul class="nav navbar-nav">
					<!-- <li><a href="home.php">Home</a></li> -->
					<li><a href="programming-tutorials-loged-in.php">TECHNOLOGY</a></li>
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
            <form class="nav navbar-form navbar-right">
                <li><input class="btn btn-success " type="button" value="Login" data-target="#loginmodal" data-toggle="modal"></li>

            </form>
            <!-- Sign Up Button  -->
            <form class="nav navbar-form navbar-right">
                <li><input class="btn btn-info" type="button" value="Signup" data-target="#signupmodal" data-toggle="modal"></li>
            </form>

            </ul>

			</div>

			<!-- </div> -->


		</nav>


		<button class="openbtn" onclick="openNav()"><i class="glyphicon glyphicon-indent-left"></i></button>

    
    <div class="well">

    <div style="margin-top:50px;padding:1px 16px;height:auto;">
  <h1 class="centered">Depth First Search</h1>
  
  <div dir="ltr"><div class="centered">
    <img alt="depth first search demo" src="./img/dfs.gif"/><br/>
    <span class="hint">Depth First Search builds a long and skinny spanning tree</span>
</div>

<p><strong>Depth-First Search</strong> with its complement <a href="./project.html">Breadth-First Search</a> are two popular methods
of searching in the graph. It is recommended to <strong>solve the exercise on BFS first</strong>.</p>

<p>The <strong>Depth-First</strong> words in the title of the algorithm explain its behavior. For each discovered vertex it tries to
choose any single neighbor node and proceed searching from it. Searching from via other neighbors is carried out only
after the chosen branch is completely investigated.</p>

<p>This algorithm also builds spanning tree (if the graph is connected), but unlike <strong>BFS</strong> it creates long branches
(though few of them). If we are lucky as with graph represented on the picture above, the whole tree could contain
a single branch at all!</p>

<p>This makes the algorithm unsuitable for searching shortest paths. Though in some cases it is convenient when we want
to check the existence of <strong>any</strong> path between two nodes.</p>

<p>The problem of finding the loop (or loops) in a <strong>directed</strong> graph is easily solved by <strong>DFS</strong> while <strong>BFS</strong> can
instead give us not a loop but two paths to the same vertex. Of course if the graph is undirected it will also be a
solution.</p>

<h3>Algorithm Implementation</h3>

<p>Nice thing is that we need only slight modification of <strong>BFS</strong> to convert it to <strong>DFS</strong>:</p>

<ol>
<li>we should use a <code>Stack</code> instead of the <code>Queue</code> for storing vertices;</li>
<li>we do not check whether node was <code>seen</code> when storing neighbors in the stack - instead we perform this checking when
retrieving the node from it.</li>
</ol>

<p>You probably know that the <code>Stack</code> is similar to <code>Queue</code>, but the elements are retrieved in the reversed order, which
is often called <code>LIFO</code>, i.e. <strong>Last in, First out</strong>. If we add elements to the end of array and retrieve it from the
end also, then it is just the implementation of the stack.</p>

<p>So here is the detailed steps of the algorithm:</p>

<ol>
<li>We add the initial node to <code>stack</code>.</li>
<li>Remove the next element from the <code>stack</code> and call it <code>current</code>.</li>
<li>If the <code>current</code> node was <code>seen</code> then skip it (going to step <code>6</code>).</li>
<li>Otherwise mark the <code>current</code> node as <code>seen</code>.</li>
<li>Get all neighbors of the <code>current</code> node and add all them to <code>stack</code>.</li>
<li>Repeat from the step <code>2</code> until the <code>stack</code> becomes empty.</li>
</ol>

<p>You also can read <a href="http://en.wikipedia.org/wiki/Depth-first_search">wikipedia article</a> to get more clear idea.</p>

<hr />

<h3>Problem Statement</h3>

<p>Again you should produce the array representing the spanning tree built by the algorithm. There are different ways to
extend the algorithm to allow it remember where you came from to which nodes.</p>

<p>To avoid ambiguosity please take care that neighbors should be tried in order of increasing their ids (like in <strong>BFS</strong>
problem).</p>

<p><strong>Input data</strong> will contain the amount of nodes <code>N</code> and the amount of edges <code>M</code>.<br />
Then <code>M</code> lines will follow each containing ids of two nodes connected by an edge. Node ids are integers between <code>0</code> and <code>N-1</code>.<br />
<strong>Answer</strong> should contain the array of values: <code>a[i]</code> should contain the index of the node from which <code>i-th</code> one was
visited by the algorithm. It should have <code>-1</code> for the initial node, i.e. <code>a[0]=-1</code>.</p>

<p>Example:</p>

<pre><code>input data:
7 10
0 1
2 0
0 3
1 4
4 3
2 3
5 2
6 3
4 6
6 5

answer:
-1 0 3 4 1 2 5
</code></pre>



<p>Another example:</p>

<pre><code>input data
4 4
0 1
1 2
3 1
2 0

answer
-1 0 1 1
</code></pre>

<p><em>Here we go from node <code>0</code> to <code>1</code>, then from here to <code>2</code> and this node appears to be "terminal" - it have no unvisited
neighbors, so we track back to node <code>1</code> and from here visit the remaining <code>3</code>.</em></p>
</div>

    </div>


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

	</script>



</body>

</html>