<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>$column_query = "SELECT * FROM files";
    $column_query_run = mysqli_query($con, $column_query);
    <?php
    $con = mysqli_connect("localhost:3306", "root", "", "UserLogin");

    $column_query = "SELECT * FROM files";
    $column_query_run = mysqli_query($con, $column_query);

    $files = mysqli_fetch_all($column_query_run, MYSQLI_ASSOC );

   

if (isset($_GET['file_id'])) {
    $id = mysqli_real_escape_string($con, $_GET['file_id']);
    $file_query = "SELECT * FROM files WHERE id = $id";
    $file_query_run = mysqli_query($con, $file_query);


    if($file_query_run){
    $file = mysqli_fetch_assoc($file_query_run);
    $filepath = "Upload/" . $file['name'];

    if (file_exists($filepath)) {
        echo '<table>';
            echo '<tr><th>id</th><th>name</th><th>size</th><th>downloads</th></tr>';
            echo '<tr>';
            echo '<td>' . $file['id'] . '</td>';
            echo '<td>' . $file['name'] . '</td>';
            echo '<td>' . $file['size'] . '</td>';
            echo '<td>' . $file['downloads'] . '</td>';
            echo '</tr>';
            echo '</table>';   
        // header('Content-Type: application/pdf');
        // readfile($filepath);
        // exit;
    } else {
        echo "File not found";
    }
}else{
    echo "Error in mysql query ". mysqli_error($con);
}
}

    ?>
    
</body>
</html>