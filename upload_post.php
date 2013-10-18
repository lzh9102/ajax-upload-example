<?php
// requires php 4.1.0 or later

$uploaddir = '/data/uploads/';
$uploadfile = $uploaddir . basename($_FILES['file1']['name']);

echo '<p>';
if (move_uploaded_file($_FILES['file1']['tmp_name'], $uploadfile)) {
    header("HTTP/1.0 200 OK");
    echo "upload success";
} else {
    header("HTTP/1.0 500 Internal Server Error");
    echo "upload failed";
    print_r($_FILES);
}

echo "</p>";

?>
