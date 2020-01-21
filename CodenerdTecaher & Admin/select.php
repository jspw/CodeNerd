<?php
include("connection.php");
    $status = $_POST['status'];
    $id=substr( $status,0,-6);
    $status=trim($status,$id);
    $id = $id+0;
 //   echo ($id);
//    echo $id . "  ".$status;
    if($status=="accept"){

     //   echo $id;

        //get the data from demo
        $sql = "SELECT * FROM demo WHERE id='$id'";
        $result = mysqli_query($link,$sql);

        if(!$result){
            echo '<div class="alert alert-danger">Error running the query!</div>';
            exit;
        }
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $username = $row['username'];
        $name = $row['name'];
        // $id = $row['id'];
        $header = $row['header'];
        $beforecompiler = $row['beforeCompiler'];
        $aftercompiler = $row['afterCompiler'];
        $code = $row['code'];


        //insert data into new table for the general students

        $sql= "INSERT INTO languages (`username`,`name`,`header`,`beforeCompiler`,`code`,`afterCompiler`) VALUES('$username','$name','$header','$beforecompiler','$code','$aftercompiler')";
         $result = mysqli_query($link,$sql);


         if(!$result){
            echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>'; 
        
            echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';  //this will say the last runing mysql code error
            exit;
        }else{
            echo '<div class="alert alert-success">Article accepted successfully</div>'; 
        }

                //delete deta of demo

                $sql = "DELETE FROM demo WHERE id='$id'";
                $result = mysqli_query($link,$sql);
        
        
                if(!$result){
                   echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>'; 
               
                   echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';  //this will say the last runing mysql code error
                   exit;
        
                }else{
                    echo '<div class="alert alert-warning">Article deleted successfully</div>'; 
        
                }




    }else if($status=="reject"){
         //delete deta of demo
        

         $sql = "DELETE  FROM demo WHERE id='$id'";
         $result = mysqli_query($link,$sql);

         if(!$result){
            echo '<div class="alert alert-danger">There was an error deleting data from the database!</div>'; 
        
            echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';  //this will say the last runing mysql code error
            exit;
        }else{
            echo '<div class="alert alert-warning">Rejected Article deleted successfully</div>'; 
        }
    }

?>