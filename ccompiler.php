
<?php
    putenv("PATH=C:\MinGW\bin");


    

    $CC = "gcc";
    $out="a.exe";
    $code=$_POST["code"];
	$input=$_POST["input"];
	$filename_code="main.c";
	$filename_in="input.txt";
	$filename_error="error.txt";
    $executable="a.exe";
	$command=$CC." -lm ".$filename_code;	
	$command_error=$command." 2>".$filename_error;

    $file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	exec("cacls  $executable /g everyone:f"); 
	exec("cacls  $filename_error /g everyone:f");	
	shell_exec($command_error);
    $error=file_get_contents($filename_error);
    
    if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		//echo "<pre>$output</pre>";
        echo '<div  class="alert alert-success" >
        <label class="label label-primary" style="font-size:15px">
            Output:
        </label>
        <br><br>
        <textarea  class="form-control" name="output" rows="5">'.$output.'</textarea><br><br>
    </div>';
	}
// 	else if(!strpos($error,"error"))
// 	{
// 		echo "<div  class='alert alert-danger' >$error</div>";
// 		if(trim($input)=="")
// 		{
// 			$output=shell_exec($out);
// 		}
// 		else
// 		{
// 			$out=$out." < ".$filename_in;
// 			$output=shell_exec($out);
// 		}
// 		//echo "<pre>$output</pre>";
// 		echo "<div  class='alert alert-danger' >$output</div>";
//    //             echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
// 	}
	else
	{
		echo "<pre class='alert alert-danger'>$error</pre>";
	}
	exec("del $filename_code");
	exec("del *.o");
//	exec("del *.txt");
	exec("del $executable");
?>