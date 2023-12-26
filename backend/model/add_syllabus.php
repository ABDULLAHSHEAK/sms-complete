<?php
$syllabus_publis_alert = "";
$file_error = '';
if (isset($_POST['add_syllabus'])) {
    $routing_title = $_POST['title'];
    $class = $_POST['class_name'];
    $slug = str_replace(' ', '-', $_POST['title']);
    $get_file_name = $_FILES['pdf']['name'];
    $tempName = $_FILES['pdf']['tmp_name'];
    $fileNameParts = explode('.', $_FILES['pdf']['name']);
    $fileExt = end($fileNameParts);
    $extension = array('pdf');

    if (in_array($fileExt, $extension)) {
        $current_time = date('Y-m-d-H-i-s');
        $filename = $current_time . '_' . $get_file_name;
        $upload = 'syllabus/' . $filename;
        $query = "INSERT INTO syllabus (class,syllabus_title,file,slug) VALUES ('$class','$routing_title','$filename','$slug')";
        $run = mysqli_query($conn, $query);
        if ($run) {
            move_uploaded_file($tempName, $upload);
            $routing_publis_alert = "Syllabus Added Succesfully";
        } else {
            echo "error";
        }
    } else {
        $file_error = "File must be a PDF.";
    }
}
