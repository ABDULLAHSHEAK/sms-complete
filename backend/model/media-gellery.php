<?php include('../controller/config.php'); ?>

<?php
$photo_add = '';
$file_error = '';
if (isset($_POST['upload'])) {

 $get_img_name = $_FILES['img']['name'];
 $tempName = $_FILES['img']['tmp_name'];
 $fileNameParts = explode('.', $_FILES['img']['name']);
 $fileExt = end($fileNameParts);
 $extension = array('jpg', 'png', 'jpeg');

 if (in_array($fileExt, $extension)) {
  $current_time = date('Y-m-d-H-i-s');
  $filename = $current_time . '_' . $get_img_name;
  $upload = 'media/' . $filename;
  $query = "INSERT INTO media (img_name) VALUES ('$filename')";
  $run = mysqli_query($conn, $query);
  if ($run) {
   move_uploaded_file($tempName, $upload);
   // header('Location: media.php?page=2'); // Redirect should occur before any output
   $photo_add = "Photo Added Succesfully";
  } else {
   echo "error";
  }
 } else {
  $file_error = "File must be a ('jpg','png','jpeg').";
 }
}

// --------- photo delete code -------- 

$routing_delete = '';
if (isset($_POST['delete_photo'])) {
 $photo_id = $_POST['id'];
 $photo_title = trim($_POST['img']);
 $post_sql = "DELETE FROM media WHERE id = '$photo_id' ";
 $routing_delete = mysqli_query($conn, $post_sql);
 if ($routing_delete) {
  unlink("media/" . $photo_title);
  $routing_delete = "Delete Succesfull";
 } else {
  echo "not delete";
 }
}
