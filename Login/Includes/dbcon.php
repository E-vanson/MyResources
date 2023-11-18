<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$con = mysqli_connect("localhost:3307","root","","UserLogin");
if(mysqli_connect_errno()){
    echo "Couldn't connect....error" . mysqli_connect_errno();
}
?>
</body>
</html>

