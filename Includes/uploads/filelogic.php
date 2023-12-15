<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    set_time_limit(60);
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
   // include('index.php');

    //db connection
    $con = mysqli_connect("localhost:3306", "root", "", "UserLogin");

    $column_query = "SELECT * FROM files";
    $column_query_run = mysqli_query($con, $column_query);

    //array of files
    //fetch all entries in the table
    $files = mysqli_fetch_all($column_query_run, MYSQLI_ASSOC );
    
    //fetch row one by one
    // while($row = mysqli_fetch_assoc($column_query_run)){
    //     $files[] = $row;
    // }

    //check if button is clicked
    if(isset($_POST['save'])){
        //hold name of file
       $filename = $_FILES['myfile']['name'];
       $destination = 'Upload/' . $filename;
       //GET EXTENSION OF FILE
       $extension = pathinfo($filename,PATHINFO_EXTENSION);

       //file temp path
       $file = $_FILES['myfile']['tmp_name'];
       //file size
       $size = $_FILES['myfile']['size'];

       
             if(!in_array($extension,['png','pdf', 'zip'])){
                echo "Your file should have one of the following extensions .zip, .png, .pdf";
               }
             elseif($size > 1000000){
                echo "File size is too big";
               }
                 else{
                if(move_uploaded_file($file, $destination)){
                    $sql_query =  "INSERT INTO files (name,size,downloads) VALUES('$filename','$size',0)";
                    $sql_query_run = mysqli_query($con, $sql_query);
                    //if query is executed
                    if($sql_query_run){
                        echo 'File uploaded successfully';
                    }
                    else
                    {
                        echo "File to upload file";
                    }
                }
             }
            } 
            if(isset($_GET['file_id'])){
              //id of file
              $id = $_GET['file_id'];

              //query to get the contents of file
              $file_query = "SELECT * FROM files WHERE id = $id";
              $file_query_run = mysqli_query($con, $file_query);

              $file = mysqli_fetch_assoc($file_query_run);
              //full path of file
              $filepath = "Upload/" . $file['name'];

              echo $filepath . "File path";


              //boolean to check if file exists
              if(file_exists($filepath)){

                $newcount = $file['downloads'] + 1;
                $update_query = "UPDATE files SET downloads = $newcount WHERE id = $id";
                $update_query_run = mysqli_query($con, $update_query);

                header("Content-Type: application/octet-stream");
                header("Content-Description: File Transfer");
                header("Content-Disposition: attachment; filename=" . basename($filepath));
                header("Expires: 0");
                header("Cache-Control: must-revalidate");
                header("Pragma: public");
                header("Content-Length:".filesize($filepath));

                ob_clean();
                flush();
              
                if(readfile($filepath) !== false){
                    exit;
                    // echo "Error reading field";
                }
                else{
                // $newcount = $file['downloads'] + 1;
                // $update_query = "UPDATE files SET downloads = $newcount WHERE id = $id";
                // $update_query_run = mysqli_query($con, $update_query);
                echo "Error reading field";
                }
                        }
                    else{
                        echo 'File not found';
                    }
         }
    ?>
</body>
</html>