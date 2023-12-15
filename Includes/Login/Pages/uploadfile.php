<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>

<?php
include ('/home/e-vans/projects/Sign up/vendor/autoload.php');

if (isset($_POST['upload'])) {
    $file = new \Includes\controllers\Uploader('myFile'); // Specify the input file name.
    $file->path('/home/e-vans/projects/Sign up/Includes/Uploads/'); // Specify the files destination path.
    $file->createRandomName(); // Generate random name.
    $file->upload(); // move uploaded files (You should call this method at the end).

    // Display errors as array
    $file->displayUploadErrors();

    // Check if the files uploaded or not
    if ($file->success()) {
	    // Success
		echo 'Files have been uploaded';
	} else {
		// Failed
        echo 'Failed';
	}
    }
?>


<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="myFile[]" multiple="multiple">
	<button type="submit" name="upload">upload</button>
</form>
    
</body>
</html>
