<?php include('env.php'); include('session.php');
// ini_set('display_errors', 1);

if(!isset($_GET['id'])){
    // header('HTTP/1.1 403 Forbidden');
    echo 'Unauthorised';
    header("Location: {$pathValue}/login.php");
}
    // $idtosend = $_GET['id'];

    $filetocall = $_GET['id'];
    
    // echo 'before exec ';

    exec("php javafile.php $filetocall 2>&1", $output);
    // echo($output);
    // print_r($output);
    shell_exec('java newreadfile');
    
    if(file_exists($filetocall)){
        

        echo readfile($filetocall);
    }
    else{
        echo 'Problem in loading file';
    }


   
    
    ?>
   
    
