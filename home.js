

//Ajax call for signup form


$("#signupform").submit(function(event){ 
   
    event.preventDefault();   //prevent default php processing
    
    var datatopost = $(this).serializeArray();
    console.log(datatopost);
    //send data to signup.php using AJAX
    $.ajax({
        url: "signup.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#signupmessage").html(data);
            }
        },
        error: function(){
            $("#signupmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});


//Ajax Call for the login form
$("#loginform").submit(function(event){ 
    
    event.preventDefault();
    
    var datatopost = $(this).serializeArray();
 //   console.log(datatopost);
 //   console.log("Hwlaw");
    //send them to login.php using AJAX
    $.ajax({
        url: "login.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#loginmessage').html(data);   
            }
        },
        error: function(){
            $("#loginmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});


//Ajax Call for the forgot password form

$("#forgotpasswordform").submit(function(event){ 
  
    event.preventDefault();

    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to signup.php using AJAX
    $.ajax({
        url: "forgotpassword.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            
            $('#forgotpasswordmessage').html(data);
        },
        error: function(){
            $("#forgotpasswordmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});


//contact message 
$("#contactform").submit(function(event){
    event.preventDefault();

    var datatopost = $(this).serializeArray();
    console.log(datatopost);
//    console.log(datatopost);
    //send them to signup.php using AJAX
    $.ajax({
        url: "contact.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            
            $('#contactformerror').html(data);
        },
        error: function(){
            $("#contactformerror").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });
});
