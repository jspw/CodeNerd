<?php
include ("connection.php");

    $id = $_POST['data1'];

    $sql = "SELECT * from languages WHERE id = '$id'";
    $result = mysqli_query($link,$sql);

    if (!$result) {
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

   if($row){
    $beforecompiler = $row['beforeCompiler'];
    $aftercompiler = $row['afterCompiler'];
    $code = $row['code'];

    $data = array(
        'beforecompiler' => $beforecompiler,
        'aftercompiler' => $aftercompiler,
        'code' => $code,
    );

    // $data['beforecompiler'] = mb_convert_encoding($data['beforecompiler'], 'UTF-8', 'UTF-8');
    // $data['aftercompiler'] = mb_convert_encoding($data['aftercompiler'], 'UTF-8', 'UTF-8');
    // $data['code'] = mb_convert_encoding($data['code'], 'UTF-8', 'UTF-8');

    // foreach($data['data'] as $value) {
    //     echo $value['type'];
    // }

    // print_r($data);
    // echo ($data);
 //   echo ($data);

    echo json_encode($data);

     }

?>