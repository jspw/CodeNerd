<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- for text editor 
 -->

 <script src="jquery-linedtextarea.js"></script>
  <link href="jquery-linedtextarea.css" type="text/css" rel="stylesheet" />
  

  <!-- Google icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <title>Compiler</title>

  <style>



  </style>

</head>

<body>
  <div class="container-fluid">
    <h3>Welcome to the Fucking Compiler</h3>

    <form  id="form" name="f2" method="POST">
      <label for="lang">Choose Language</label>

      <select class="form-control" name="language">
        <option value="c">C</option>
        <option value="cpp">Python3</option>
        <option value="cpp11">C++11</option>
        <option value="java">Java</option>


      </select><br><br>
        <label class="label label-primary" style="font-size: 15px">Source Code:</label><br><br>
        <textarea  class="lined z-depth-1" name="code" rows="15" cols="150"></textarea><br><br>

        <label class="label label-warning" style="font-size: 15px">Input:</label>
        <br><br>
        <textarea class="form " name="input" rows="5" cols="30"></textarea><br><br>
        
      <button type="submit" id="st" class="btn btn-success" style="margin-bottom: 10px"><span class="glyphicon glyphicon-play" ></span> Run Code</button>

      


    </form>

    <div id="info">

    </div>
  </div>






  <script>
$(function() {
	$(".lined").linedtextarea(
		{selectedLine: 1}
	);
});
</script>


  <script>
    //wait for page load to initialize script
      //listen for form submission
      $("#form").submit(function(event){
        event.preventDefault();

        var datatopost = $(this).serializeArray();
    //    console.log(datatopost);

        $.ajax({
          url :"compile.php",
          type:"POST",
          data:datatopost,
          success:function(data){
            if(data){
              $("#info").html(data);
//              window.alert(data);
            }
          },
          error:function(){
            $("#info").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
          }
        });

      });
  </script>


</body>

</html>