<?php include('../controller/config.php'); ?>

<?php

$teacher_alert = "";
$file_error = '';
if (isset($_POST['submit'])) {

 $full_name = $_POST["full_name"];
 $user_name = $_POST["user_name"];
 $gender = $_POST["gender"];
 $address = $_POST["address"];
 $phone = $_POST["phone"];
 $email = $_POST["email"];
 $password =sha1($_POST["password"]);
 $slug = str_replace(" ", "-", $_POST["full_name"]);
 $get_img_name = $_FILES['img']['name'];
 $tempName = $_FILES['img']['tmp_name'];
 $fileNameParts = explode('.', $_FILES['img']['name']);
 $fileExt = end($fileNameParts);
 $extension = array('jpg', 'png', 'jpeg');

 if (in_array($fileExt, $extension)) {
  $current_time = date('Y-m-d-H-i-s');
  $filename = $current_time . '_' . $get_img_name;
  $upload = 'users/' . $filename;
  $query = "INSERT INTO admin (full_name,i_name,gender,address,phone,email,password,slug,image_name) VALUES ('$full_name','$user_name','$gender','$address','$phone','$email','$password','$slug','$filename')";
  $run = mysqli_query($conn, $query);
  if ($run) {
   move_uploaded_file($tempName, $upload);
   $teacher_alert = "User Added Succesfully";
   header('Location: user.php'); // Redirect should occur before any output
  } else {
   echo "error";
  }
 } else {
  $file_error = "File must be a ('jpg','png','jpeg').";
 }
}
