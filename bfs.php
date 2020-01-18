<?php
session_start();

if(isset($_SESSION['user_id'])){
    include("connection.php");
    header("location: bfs-logged-in.php");

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
/* .centered
{
  margin: auto;
  width: 50%;
  
  
} */
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
/* code{
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
} */


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
            
            <li><a class="active" href="./bfs.php">Breadth First Search</a></li>
            <li><a href="./dfs.php">Depth First Search</a></li>

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

    <div style="margin-top:50px;padding:0px;height:auto;">
  <h1 class="centered">Breadth First Search</h1>
  
  <div dir="ltr"><div class="centered">
      <img  class="img-responsive  center-block"  alt="breadth first search demo" src="https://codeabbey.github.io/data/breadth_first_search_1.gif" /><br/>
      <span class="hint">Breadth-First Search builds a short and divergent spanning tree</span>
  </div>
  
  <p><strong>Breadth-First Search</strong> with its complement <a href="./dfs.html">Depth-First Search</a> are two popular methods of
  searching in the graph.
  They are building blocks for many other more special algorithms. At the same time each of them may be implemented in
  several different ways.</p>
  
  <p>The words <strong>Breadth-First</strong> in the name reflect the manner of search - from any vertex we are trying to investigate all
  neighbors as soon as possible. Because of this the search process looks as following:</p>
  
  <ol>
  <li>at first we visit the initial node itself - let us call it <code>level 0</code>;</li>
  <li>then we visit all nodes immediately reachable from the initial node - let us call them <code>level 1</code>;</li>
  <li>on the next step we reach all nodes immediately reachable from level 1 and call them <code>level 2</code>.</li>
  </ol>
  
  <p>And so on with the general rule that at level <code>K+1</code> we visit all neighbors of all nodes of level <code>K</code>, of course except
  ones already visited on previous steps. At the picture above initial node is <code>A</code>, while the first level consists of
  <code>B</code>, <code>C</code>, and <code>D</code> - and the second contains remaining <code>E</code>, <code>F</code> and <code>G</code>.</p>
  
  <p>The manner in which the algorithm visits vertices resembles the spreading of the wave when it floods the shore. Due to
  this fact particular implementation of the <strong>BFS</strong> on a rectangular grid is sometimes called <strong>Wave Algorithm</strong> - see
  the following picture to decide whether this name is correct:</p>
  
  <div class="centered">
      <img alt="wave algorithm demo" class="img-responsive  center-block" src="https://codeabbey.github.io/data/breadth_first_search_2.gif"/><br/>
      <span class="hint">Wave algorithm is just another incarnation of the BFS</span>
  </div>
  
  <hr />
  
  <h3>Typical application</h3>
  
  <p>If the graph is connected, <strong>BFS</strong> will visit all of its nodes. If for each node we will remember where we got to it
  from - then the resulting set of edges will represent a <strong>tree</strong> connecting all nodes (so-called <strong>spanning tree</strong>).</p>
  
  <p>The tree built by <strong>BFS</strong> at the same time represents the shortests paths from initial vertex to any other (for the
  graph with the edges of equal weights - otherwise more special algorithm, like <a href="./dijkstra-in-the-network">Dijkstra</a>
  should be used).</p>
  
  <p>The puzzle Word Ladders gives an example of a problem when <strong>BFS</strong> is most suitable.</p>
  
  <p>Other popular usage is for discovering if the graph is connected or consists of several izolated parts. It also allows
  to mark which vertex belongs to which part. However this task could be by <strong>DFS</strong> also.</p>
  
  <h3>Algorithm implementation</h3>
  
  <p>Usually we prefer to use a <strong>Queue</strong> to keep the track of the nodes which we are going to visit soon.
  This data structure provides two operations, let us call them <code>add</code> and <code>remove</code> for putting new elements to it and
  fetching them later. The core property is that elements are removed in the same order in which they were stored - this
  is often called <code>FIFO</code>, i.e. <strong>first in, first out</strong>. For example if you add elements to the end of the list and remove
  them from the beginning - it will work as a queue.</p>
  
  <p>We also need some way to mark vertices as <code>seen</code> - it could be array of flags or set to which we will add ids of vertices
  or something like this.</p>
  
  <p>That's how algorithm works:</p>
  
  <ol>
  <li>We add the initial node to <code>queue</code> and mark it as <code>seen</code>.</li>
  <li>Remove the next element from the <code>queue</code> and call it <code>current</code>.</li>
  <li>Get all neighbors of the <code>current</code> node which are not yet marked as <code>seen</code>.</li>
  <li>Store all these neighbors into the <code>queue</code> and mark them all as <code>seen</code>.</li>
  <li>Repeat from the step <code>2</code> until the <code>queue</code> becomes empty.</li>
  </ol>
  
  <p>Usually we perform some additional actions along with these core steps. For example:</p>
  
  <ul>
  <li>after fetching each vertex from the <code>queue</code> we may print its name out - this will give us a list of the vertices
  of the graph (or its connected component) in the order of visiting by <strong>BFS</strong>;</li>
  <li>if using hashtable (aka dictionary) or array for <code>seen</code> we can store here not only the fact that the node was seen,
  but also the id of the vertex from which it was seen - as the result the hashtable will describe the tree of
  the shortest paths at the end;</li>
  <li>distance to the given vertex from the initial one could be stored in a separate array or hashtable.</li>
  </ul>
  
  <p>You also can read <a href="http://en.wikipedia.org/wiki/Breadth-first_search">wikipedia article</a> to get more clear idea.</p>
  
  <hr />
  
  <h3>Problem statement</h3>

<p>You are given an undirected and unweighted graph with vertices identifided by integers.
The goal is to run <strong>BFS</strong> over it as described above, <strong>starting from the node <code>0</code></strong>.</p>

<p>As output you should produce the <code>seen</code> array which shows where each vertex was visited from.</p>

<p>To avoid ambiguosity please at the step <code>3</code> sort all fetched neighbors in order of increasing their id numbers.</p>

<p><strong>Input data</strong> will contain the amount of nodes <code>N</code> and the amount of edges <code>M</code>.<br />
Then <code>M</code> lines will follow each containing ids of two nodes connected by an edge. Node ids are integers between <code>0</code> and <code>N-1</code>.<br />
<strong>Answer</strong> should contain the <code>seen</code> array as described above. It should have <code>-1</code> for the initial node.</p>

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
-1 0 0 0 1 2 3
</code></pre>

<p><em>This example is from the picture above, only vertices are labeled with <code>0...6</code> instead of <code>A...F</code>.</em></p>
</div>
  
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