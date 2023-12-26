<?php include('../controller/config.php'); ?>

<?php
$teacher_alert = "";
$file_error = '';
if (isset($_POST['submit'])) {
    $full_name = $_POST["full_name"];
    $title = $_POST["title"];
    $about = $_POST["about"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $slug = str_replace(" ", "-", $_POST["full_name"]);
    $get_img_name = $_FILES['img']['name'];
    $tempName = $_FILES['img']['tmp_name'];
    $fileNameParts = explode('.', $_FILES['img']['name']);
    $fileExt = end($fileNameParts);
    $extension = array('jpg', 'png', 'jpeg');

    if (in_array($fileExt, $extension)) {
        $current_time = date('Y-m-d-H-i-s');
        $filename = $current_time . '_' . $get_img_name;
        $upload = 'teacher/' . $filename;
        $query = "INSERT INTO teacher (full_name,title,about,gender,phone,email,address,slug,image_name) VALUES ('$full_name','$title','$about','$gender','$phone','$email','$address','$slug','$filename')";
        $run = mysqli_query($conn, $query);
        if ($run) {
            move_uploaded_file($tempName, $upload);
            header('Location: teacher.php'); 
            $teacher_alert = "Teacher Added Succesfully";
        } else {
            echo "error";
        }
    } else {
        $file_error = "File must be a ('jpg','png','jpeg').";
    }
}
