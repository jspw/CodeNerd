<?php

include("connection.php");
$sql = "SELECT * FROM demo";
$result = mysqli_query($link, $sql);
if (!$result) {
    echo "error";
    exit;
}

// $row = mysqli_fetch_row($result,MYSQLI_ASSOC);
// $username = $row['username'];
// $name = $row['name'];
// $beforCompiler = $row['beforCompiler'];
// $code = $row['code'];
// $afterCompiler = $row['afterCompiler'];

?>

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
        <div class="navbar-header text-center">
            <a class="brandB" role="button" href="mainpageloggedin.php"><img class="img" src="codenerd.png" height="50" width="100"></a>

            <button type="button" class="navbar-toggle" data-target="#navCol" data-toggle="collapse">

                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
        </div>
        <div class="navbar-collapse collapse text-center" id="navCol">
            <p style="color:white;font-size:30px">@root</p>

        </div>

    </div>
</nav>




<div class="container-fluid" style="margin-top: 60px">

    <div id="update">   

    </div>

    <div class="panel-group">

        <?php

        while ($row = mysqli_fetch_array($result)) {
            $username = $row['username'];
            $name = $row['name'];
            $id = $row['id'];
            $header = $row['header'];
            $beforecompiler = $row['beforeCompiler'];
            $afterCompiler = $row['afterCompiler'];
            $code = $row['code'];
        //    echo $id ." <br>";
            echo '
        <div class="panel panel-default">

        <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" href="' . '#' . $id . '">' . $name . ' - ' . $header . '</a>
            <p class="label label-primary pull-right">@'.$username.'</p>
            </h4>

           
            
            </div>

            <div id="' . $id . '" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="container">
                    ' . $beforecompiler . '
                </div>
                <div class="container">
                   <pre> ' . $code . '</pre>
                </div>
                <div class="container">
                    ' . $afterCompiler . '
                </div>
                <div class="btn-group pull-right" >
                    
                    <button id="'.$id.'accept" class="btn btn-success" onclick="myFunction(this.id)" >Accept</button>
                    <button id="'.$id.'reject" class="btn btn-danger" style="margin-left:2px" onclick="myFunction(this.id)">Reject</button>
                </div> 
            </div>
            
            
        </div>

    </div>
        ';
        }
        ?>
    </div>
</div>

<script>
    var myFunction = function(id) {
        $.ajax({
            url: "select.php",
            type: "POST",
            dataType: "text",
            data:{
                status:id
            },
            success: function(data) {
                if (data) {
                    //
                    $("#update").html(data);
                    setInterval(function(){ 
                        location.reload();
                    }, 500);

                }

            },
            error: function() {
                $("#update").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            }
        });
    }
</script>