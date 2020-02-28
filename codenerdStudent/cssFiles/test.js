
// fun =  function(event,filename){
//     event.preventDefault();
// //	 var datatopost = $(this).serializeArray();
//     //    console.log(datatopost);
//     filename='"'+filename+'.php"';
//     $("#beforeCompiler").html("<div class='alert alert-danger'>"+filename +"</div>");
//     $.ajax({
//         url: "C-Home.php",
//         type: "POST",
//     	data: filename,
//         success: function(data) {
//             if (data) {
//                 $("#beforeCompiler").html(data);
//                 //              window.alert(data);
//             }
//         },
//         error: function() {
//             $("#beforeCompiler").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
//         }
//     });

// }

$("#quiz").click(function(event){
  event.preventDefault();
  $("#beforeCompiler").load("quiz.php");
});

$("#C-Home").click(function(event){
  //  fun(event,"C-Home");
  event.preventDefault();
  $("#code").prop("disabled", false);
  $("#beforeCompiler").load("C-Home.php");
});

$("#C-Environment-Setup").click(function(event){
    //  fun(event,"C-Home");
    event.preventDefault();
    $("#code").prop("disabled", false);
    $("#beforeCompiler").load("C-Environment-Setup.php");
  });
  $("#C-Program-Structure").click(function(event){
    //  fun(event,"C-Home");
    event.preventDefault();
    $("#code").prop("disabled", false);
    $("#beforeCompiler").load("C-Program-Structure.php");
  });
  $("#C-Variables").click(function(event){
    //  fun(event,"C-Home");
    event.preventDefault();
    $("#code").prop("disabled", false);
    $("#beforeCompiler").load("C-Variables.php");
  });
  $("#C-Storage-Classes").click(function(event){
    //  fun(event,"C-Home");
    event.preventDefault();
    $("#code").prop("disabled", false);
    $("#beforeCompiler").load("C-Storage-Classes.php");
  });
  $("#C-Loops").click(function(event){
    //  fun(event,"C-Home");
    event.preventDefault();
    $("#code").prop("disabled", false);
    $("#beforeCompiler").load("C-Loops.php");
  });
  $("#C-Functions").click(function(event){
    //  fun(event,"C-Home");
    event.preventDefault();
    $("#code").prop("disabled", false);
    $("#beforeCompiler").load("C-Functions.php");
  });
  $("#C-Data-Types").click(function(event){
    //  fun(event,"C-Home");
    event.preventDefault();
    $("#code").prop("disabled", false);
    $("#beforeCompiler").load("C-Data-Types.php");
  });
  $("#C-Constants-and-Literals").click(function(event){
    //  fun(event,"C-Home");
    event.preventDefault();
    $("#code").prop("disabled", false);
    $("#beforeCompiler").load("C-Constants-and-Literals.php");
  });

  $("#C-Basic-Syntax").click(function(event){
    //  fun(event,"C-Home");
    event.preventDefault();
    $("#code").prop("disabled", false);
    $("#beforeCompiler").load("C-Basic-Syntax.php");
  });


// $("#C - Environment Setup").click(function(event){
//     fun(event,this);
// });

// $("#C - Program Structure").click(function(event){
//     fun(event,this);
// });
// $("#C - Data Types").click(function(event){
//     fun(event,this);
// });
// $("#C - Basic Syntax").click(function(event){
//     fun(event,this);
// });
// $("#C - Variables").click(function(event){
//     fun(event,this);
// });
// $("#C - Constants").click(function(event){
//     fun(event,this);
// });
// $("#C - Operators").click(function(event){
//     fun(event,this);
// });
// $("C - Loops").click(function(event){
//     fun(event,this);
// });
// $("#C - File I/O").click(function(event){
//     fun(event,this);
// });

