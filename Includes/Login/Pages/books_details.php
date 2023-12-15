<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
</head>
<body>
    <?php
    $con = mysqli_connect("localhost:3306", "root", "", "UserLogin");

    if (isset($_GET['file_id'])) {
        $id = mysqli_real_escape_string($con, $_GET['file_id']);
        $file_query = "SELECT * FROM files WHERE id = $id";
        $file_query_run = mysqli_query($con, $file_query);

        if ($file_query_run) {
            $file = mysqli_fetch_assoc($file_query_run);
            echo '<table>';
            echo '<tr><th>id</th><th>name</th><th>size</th><th>downloads</th></tr>';
            echo '<tr>';
            echo '<td>' . $file['id'] . '</td>';
            echo '<td>' . $file['name'] . '</td>';
            echo '<td>' . $file['size'] . '</td>';
            echo '<td>' . $file['downloads'] . '</td>';
            echo '</tr>';
            echo '</table>';
        } else {
            echo "Error in mysql query " . mysqli_error($con);
        }
    }
    ?>
</body>
</html>