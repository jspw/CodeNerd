

<!doctype html>
<html lang="en">

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

<body>

    <?php

    include("header.php");
    ?>

    <script src="index.js"></script>
    <script>
        $(document).ready();
              $("#submitform").submit(function(event){
        event.preventDefault();

        var datatopost = $(this).serializeArray();
    //    console.log(datatopost);

        $.ajax({
          url :"senddata.php",
          type:"POST",
          data:datatopost,
          success:function(data){
            if(data){
              $("#datasendmessage").html(data);
//              window.alert(data);
            }
          },
          error:function(){
            $("#datasendmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
          }
        });

      });

      ///preview

      $("#preview1").click(function(event){
          event.preventDefault();
        //  window.alert("FUCK");
        var data = document.getElementById("beforecompiler").value;
        

        //delete the fucking class

        while(data.match(/class="/g)){
        var start = data.search("class=\"");
        console.log(start);
        for(i=start+7;i<data.length;i++){
            if(data[i]=="\"")
                {
                    end=i;
                    console.log(end);
                    break;
                }
        }
        var str = data.substr(start,end-start+1);
        console.log(str);
        data=data.replace(str,"");

        console.log(data);

        }

        //filtering

        data= data.replace(/\=/g,"equal");
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


      // article 2



      $("#preview2").click(function(event){
        
          event.preventDefault();
        //  window.alert("FUCK");
        var data = document.getElementById("aftercompiler").value;


        //delete the fucking class

        while(data.match(/class="/g)){
        var start = data.search("class=\"");
        console.log(start);
        for(i=start+7;i<data.length;i++){
            if(data[i]=="\"")
                {
                    end=i;
                    console.log(end);
                    break;
                }
        }
        var str = data.substr(start,end-start+1);
        console.log(str);
        data=data.replace(str,"");


        }

        //filtering
        data= data.replace(/\=/g,"equal");
        data= data.replace(/\[/g,"br31");
        data= data.replace(/\]/g,"br32");


        
        $.ajax({
          url :"preview.php",
          type:"POST",
          cache: false, //important or else you might get wrong data returned to you,
          datatype: "html", //expected data format from process.php
        //  dataType:'text',
          data:{
            data1:data
          },
          success:function(data){
            if(data){
              $("#article2").html(data);
//              window.alert(data);
            }
          },
          error:function(){
            $("#article2").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
          }
        });

      });

    </script>



</body>


</html>