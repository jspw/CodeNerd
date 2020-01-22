<?php
    include("header.php");
    include("connection.php");

?>

<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="card-design.css">
    <link rel="stylesheet" type="text/css" href="home.css">


    <!-- icons  -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <title>CodeNerd</title>



</head>
<body>

<!-- <h1 style="margin-top: 60px">Search Page </h1>    -->

<div class="container-fluid" style="margin-top: 70px">

    <div id="update">

    </div>

    <div class="panel-group">

        <?php

            if(isset($_POST['go'])){
                $search = mysqli_real_escape_string($link,$_POST['search']);
                $sql = "SELECT * FROM languages WHERE `name` LIKE '%$search%' OR `header` LIKE '%$search%'  OR `beforeCompiler` LIKE '%$search%' OR   `code` LIKE '%$search%'  OR `afterCompiler` LIKE '%$search%' ";

                $result = mysqli_query($link,$sql);
                if(!$result){
                    echo '<div class="alert alert-danger">There was an error in searching !</div>'; 
                
                    echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';  //this will say the last runing mysql code error
                    exit;
                }
                $queryResult = mysqli_num_rows($result);

            if($queryResult>0){
                echo '<div style="font-size:25px" class="label label-info text-center">Search results for : "'.$search .'"</div><br><br>';
                //search found
                while($row = mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $name = $row['name'];
                    $username= $row['username'];
                    $header = $row['header'];
                    $beforecompiler = $row['beforeCompiler'];
                    $afterCompiler = $row['afterCompiler'];
                    $code = $row['code'];
            
            
            echo '
        <div class="panel panel-default">

        <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" href="' . '#' . $id . '">' . $name . ' - ' . $header . '</a>
            <p class="label label-primary pull-right">@'.$username.'</p>
            </h4>

           
            
            </div>

            <div id="' . $id . '" class="panel-collapse collapse">
            <div class="well panel-body">
                <div class="container">
                    ' . $beforecompiler . '
                </div>
                <div class="container">
                    ' . $code . '
                </div>
                <div class="container">
                    ' . $afterCompiler . '
                </div>

            </div>
            
            
        </div>

    </p>
        ';
        }

    }else {
        echo '<div class="alert alert-warning">There is no result matching your search</div>';
    }

}

        ?>
    </div>
</div>

</body>

</html>