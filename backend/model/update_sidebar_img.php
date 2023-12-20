<?php
include_once('../controller/config.php');

$sidebar = "SELECT * FROM sidebar_setting";
$result = mysqli_query($conn, $sidebar);
$side_data = mysqli_fetch_assoc($result);

$info_image = $side_data['info_img'];
// $president_image = $side_data['president_img'];
// $principal_image = $side_data['principal_img'];
// $sub_image = $side_data['info_imgsub_principal_img']; // Corrected variable name

$file_error = '';

if (isset($_POST['submit'])) {
 $get_img_name = $_FILES['info']['name'];
 $temp_name = $_FILES['info']['tmp_name'];
 $fileNameParts = explode('.', $_FILES['info']['name']);
 $fileExt = end($fileNameParts);
 $extension = array('jpg', 'png', 'jpeg');

 if (in_array($fileExt, $extension)) {
  $current_time = date('Y-m-d-H-i-s');
  $filename = $current_time . '_' . $get_img_name;
  $upload = 'sidebar/' . $filename;
  $post_update = "UPDATE sidebar_setting SET info_img = '$filename'";
  $update_query = mysqli_query($conn, $post_update);

  if ($update_query) {
   $unlink_img = "sidebar/" . $info_image; // Change $post_img to $filename
   unlink($unlink_img);
   move_uploaded_file($temp_name, $upload);
   // $run = mysqli_query($conn, $query); // Change $conn to $con and $query to $run
  }
 } else {
  $file_error = "File must be a ('jpg','png','jpeg')";
 }
}

// if (isset($_POST['submit'])) {
//  $get_sub_name = $_FILES['sub']['name'];
//  $temp_name_sub = $_FILES['sub']['tmp_name'];
//  $fileNameParts_sub = explode('.', $_FILES['sub']['name']);
//  $fileExt_sub = end($fileNameParts_sub);
//  $extension_sub = array('jpg', 'png', 'jpeg');

//  if (in_array($fileExt_sub, $extension_sub)) {
//   $current_time = date('Y-m-d-H-i-s');
//   $filename = $current_time . '_' . $get_sub_name;
//   $upload = 'sidebar/' . $filename;
//   $post_update = "UPDATE sidebar_setting SET info_img = '$filename'";
//   $update_query = mysqli_query($conn, $post_update);

//   if ($update_query) {
//    $unlink_img = "sidebar/" . $sub_image; // Change $post_img to $filename
//    unlink($unlink_img);
//    move_uploaded_file($temp_name_sub, $upload);
//    // $run = mysqli_query($conn, $query); // Change $conn to $con and $query to $run
//   }
//  } else {
//   $file_error = "File must be a ('jpg','png','jpeg')";
//  }
// }
