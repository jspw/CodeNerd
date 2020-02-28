<?php

    session_start();

    if(!isset($_SESSION['user_id'])){
        echo '<div class="alert-danger text-capitalize text-center" style="font-size:20px">
        You need to log in to participate in a quiz !
        <br>
        <button class="btn btn-success" data-target="#loginmodal" data-toggle="modal">LogIn</button>
        </div>';
    }else {
        echo '<div class="alert-warning text-capitalize text-center" style="font-size:20px">Compiler will be turned off during the quiz!</div>
        <div class="container-fluid">
        <h5 style="color: black;">Q 1 - What is the output of the following code snippet?</h5>
            <pre>
#include<stdio.h>

main() 
        {
            short unsigned int i = 0; 
                       
            printf("%u\n", i--);
}
            </pre>

        <form>
            <div class="form-group">
              <label for="sel1">Select list (select one):</label>
              <select  class="form-control" id="sel2">
                <option id="a">A-0</option>
                <option  id="b">B-Compiler error</option>
                <option id="c">C-65535</option>
                <option id="d">D-32767</option>
              </select>
              <br>
              

              <div id="ans"></div>

            </div>
          </form>

          <script>
              $("#code").prop("disabled", true);
              
              $("#a").click(function(){
                $("#ans").removeClass("alert alert-danger");
                  $("#ans").addClass("alert alert-success").html("Right answer");
              });

              $("#b").click(function(){
                $("#ans").removeClass("alert alert-success");
                $("#ans").addClass("alert alert-danger").html("Wrong answer");
            });

            $("#c").click(function(){
                $("#ans").removeClass("alert alert-success");
                $("#ans").addClass("alert alert-danger").html("Wrong answer");
            });

            $("#d").click(function(){
                $("#ans").removeClass("alert alert-success");
                $("#ans").addClass("alert alert-danger").html("Wrong answer");
            });

            



          </script>
        
    </div>
        
        ';

        echo'
        <div class="container-fluid">
        <h5 style="color: black;"><span>Q 2</span> - The type name/reserved word ‘short’ is ___</h5>

        <form>
            <div class="form-group">
              <label for="sel1">Select list (select one):</label>
              <select  class="form-control" id="sel2">
                <option id="a1"><span>A</span> - short long</option>
                <option  id="b1"><span>B</span> - short char</option>
                <option id="c1"><span>C</span> - short float</option>
                <option id="d1"><span>D</span> - short int </option>
              </select>
              <br>
              

              <div id="ans1"></div>

            </div>
          </form>

          <script>
              $("#code").prop("disabled", true);
              
              $("#a1").click(function(){
                $("#ans1").removeClass("alert alert-success");
                  $("#ans1").addClass("alert alert-danger").html("Wrong answer");
              });

              $("#b1").click(function(){
                $("#ans1").removeClass("alert alert-success");
                $("#ans1").addClass("alert alert-danger").html("Wrong answer");
            });

            $("#c1").click(function(){
                $("#ans1").removeClass("alert alert-success");
                $("#ans1").addClass("alert alert-danger").html("Wrong answer");
            });

            $("#d1").click(function(){
                $("#ans1").removeClass("alert alert-danger");
                $("#ans1").addClass("alert alert-success").html("Right answer");
            });

            



          </script>
        
    </div>

        ';

    }

?>

