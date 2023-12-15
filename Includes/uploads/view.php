<?php
//  error_reporting(E_ALL);
//  ini_set('display_errors', 1);
// include('index.php');

 //db connection
 $con = mysqli_connect("localhost:3306", "root", "", "UserLogin");

if (isset($_GET['file_id'])) {
    $id = mysqli_real_escape_string($con, $_GET['file_id']);
    $file_query = "SELECT * FROM files WHERE id = $id";
    $file_query_run = mysqli_query($con, $file_query);


    if($file_query_run){
    $file = mysqli_fetch_assoc($file_query_run);
    $filepath = "Upload/" . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Type: application/pdf');
        readfile($filepath);
        exit;
    } else {
        echo "File not found";
    }
}else{
    echo "Error in mysql query ". mysqli_error($con);
}
}$con = mysqli_connect("localhost:3306", "root", "", "UserLogin");

if (isset($_GET['file_id'])) {
    $id = mysqli_real_escape_string($con, $_GET['file_id']);
    $file_query = "SELECT * FROM files WHERE id = $id";
    $file_query_run = mysqli_query($con, $file_query);


    if($file_query_run){
    $file = mysqli_fetch_assoc($file_query_run);
    $filepath = "Upload/" . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Type: application/pdf');
        readfile($filepath);
        exit;
    } else {
        echo "File not found";
    }
}else{
    echo "Error in mysql query ". mysqli_error($con);
}
}
?>