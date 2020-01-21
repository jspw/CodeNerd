<?php
session_start();

if (!isset($_SESSION['user_id'])) {
	header("location: test-html.php");
} else {
	include("connection.php");

	$sql = "SELECT * from languages ";
	$result = mysqli_query($link, $sql);

	if (!$result) {
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
		<i href="javascript:void(0)" onclick="closeNav()" class=" closebtn fas fa-arrow-left" style="cursor: pointer ; margin-top: 70px"></i>

		<ul class="list-group">
			<li class="h4 title">HTML5 Tutorial:</li>

			<?php

			while ($row = mysqli_fetch_array($result)) {
				if ($row['name'] == 'html5') {
					$username = $row['username'];
					$id = $row['id'];
					$header = $row['header'];
					$beforecompiler = $row['beforeCompiler'];
					$afterCompiler = $row['afterCompiler'];
					$code = $row['code'];
					echo '
                        <li><a id =' . $id . ' href="#" onclick="load(' . $id . ')">HTML5-' . $header . '</a></li>
                        ';
				}
			}


			?>


			<li class="h4 title">Useful Resources of HTML5:</li>


			<li id="C - Questions &amp; Answers"><a href="/cprogramming/cprogramming_questions_answers.htm">C - Questions &amp; Answers</a></li>
			<li id="C - Quick Guide"><a href="/cprogramming/c_quick_guide.htm">C - Quick Guide</a></li>
			<li id="C - Useful Resources"><a href="/cprogramming/c_useful_resources.htm">C - Useful Resources</a></li>
			<li id="C - Discussion"><a href="/cprogramming/cprogramming_discussion.htm">C - Discussion</a></li>

			<a id="quiz" href="quiz.php">
				<li class="h4 title">Quiz:</li>
			</a>
		</ul>


	</div>

	<div id="main">


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
				<!-- Navigation bar collaspe -->

				<div class="navbar-collapse collapse" id="navCol">
					<ul class="nav navbar-nav">
						<!-- <li><a href="home.php">Home</a></li> -->
						<li><a href="programming-tutorials-loged-in.php">TECHNOLOGY</a></li>
						<li><a href="algorithms-logged-in.php">ALGORITHM</a></li>


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
						<li role="presentation">
							<a href="#"><span class="glyphicon glyphicon-bell"></span> Notifications<span class="badge">4</span></a>

						</li>
						<li role="presentation">
							<?php
							include('connection.php');

							$id = $_SESSION['user_id'];
							//    echo "Id is : " . $id;
							$sql = "SELECT username FROM users WHERE user_id='$id'";
							$result = mysqli_query($link, $sql);
							if (!$result) {
								echo '<div class="alert alert-danger">Error running the query!</div>';
								exit;
							}
							//log the user in: Set session variables

							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$username = $row['username'];

							echo ' <a href="profile.php"><span class="glyphicon glyphicon-user"></span> ' . $username . '</a>  ';

							?>
						</li>


						<li><a href="home.php?logout=1">LogOut</a></li>

						<!-- <form class="navbar-form navbar-right">
                        <input  class="btn btn-success " type="button" value="Logout" >
                        
                    </form> -->
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


		//load data of programming tutorials from database
		var load = function(data) {
			//    console.log("bal"+data);
			$(this).click(function(event) {
				//         event.preventDefault();
			});

			$.ajax({
				url: "load.php",
				type: "POST",
				data: {
					data1: data
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

		};
	</script>

</body>

</html>