<?php
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
    $file_query = "SELECT * FROM files WHERE id = $id";
    $file_query_run = mysqli_query($con, $file_query);

    $file = mysqli_fetch_assoc($file_query_run);
    $filepath = "Upload/" . $file['name'];

    if (file_exists($filepath)) {
        // Increment download count
        $newcount = $file['downloads'] + 1;
        $update_query = "UPDATE files SET downloads = $newcount WHERE id = $id";
        $update_query_run = mysqli_query($con, $update_query);

        // Send headers for file download
        header("Content-Type: application/octet-stream");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=" . basename($filepath));
        header("Expires: 0");
        header("Cache-Control: must-revalidate");
        header("Pragma: public");
        header("Content-Length:" . filesize($filepath));

        ob_clean();
        flush();

        if (readfile($filepath) !== false) {
            exit;
        } else {
            echo "Error reading file";
        }
    } else {
        echo "File not found";
    }
}
?>