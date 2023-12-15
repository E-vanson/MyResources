<!DOCTYPE html>
<?php
include('filelogic.php');
include('view.php');
?>
<html lang="en">
<head>s
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload with php</title>
</head>
<body>
<div class="container">
<div class="row">
<form action="filelogic.php" method="post" enctype="multipart/form-data"> 
<h3>Upload files</h3>
<input type="file" name="myfile"> <br>
<button type="submit" name="save">Upload</button>
</form>
</div>
<div class="row">
    <table>
        <thead>
            <th>Id</th>
            <th>File Name</th>
            <th>Size in Mb</th>
            <th>Downloads</th>
            <th colspan="2">Actions</th>
        </thead>
        <tbody>
            <?php
            foreach($files as $file):  $con = mysqli_connect("localhost:3306", "root", "", "UserLogin");
            ?>
            <tr>
                <td><?php echo $file['id'];?></td>
                <td><?php echo $file['name'];?></td>
                <td><?php echo $file['size'] / 1000 . "KB";?></td>
                <td><?php echo $file['downloads'];?></td>
                <td><a href="index.php?file_id=<?php echo $file['id'];?>">Download</a></td>
                <!-- <td><a href="download.php?file_id=<?php ?>">Download</a></td>-->
                <td><a href="view.php?file_id=<?php echo $file['id'];?>" target='_blank'>View PDF</a></td> 
            </tr>
            <?php endforeach ;?>
        </tbody>
    </table>
</div>
</div>
</body>
