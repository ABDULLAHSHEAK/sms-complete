<?php
if (isset($_GET['edit_notice'])) {
 $id_edit = $_GET['edit_notice'];
 $query1 = "SELECT * FROM notice WHERE id=$id_edit";
 $result1 = mysqli_query($conn, $query1);
 $row1 = mysqli_fetch_assoc($result1);
 $notice_ti = $row1['file'];
 $notice_img_old = trim($notice_ti);
}
$file_error = '';
if (isset($_POST['update_notice'])) {
 $notice_id = $_POST['edit_id'];
 $notice_title = $_POST['edit_title'];
 $slug = str_replace(' ', '-', $_POST['edit_title']);
 $get_file_name = $_FILES['pdf']['name'];
 $tempName = $_FILES['pdf']['tmp_name'];
 $fileNameParts = explode('.', $_FILES['pdf']['name']);
 $fileExt = end($fileNameParts);
 $extension = array('pdf');

 // Check if a new PDF file is uploaded
 if (!empty($get_file_name)) {
  if (in_array($fileExt, $extension)) {
   $current_time = date('Y-m-d-H-i-s');
   $filename = $current_time . '_' . $get_file_name;
   $upload = 'notices/' . $filename;
   $query = "UPDATE notice SET title='$notice_title', file='$filename', slug ='$slug' WHERE id=$notice_id";
   $run = mysqli_query($conn, $query);

   if ($run) {
    $unlink = 'notices/' . $notice_img_old;
    unlink($unlink);
    move_uploaded_file($tempName, $upload);
    echo "<script>window.location.href='notices.php'</script>";
   } else {
    echo "Error updating notice with file.";
   }
  } else {
   $file_error = "File must be a PDF.";
  }
 } else {
  // If no new file is uploaded, update only the title
  $query = "UPDATE notice SET title='$notice_title', slug = '$slug' WHERE id=$notice_id";
  $run = mysqli_query($conn, $query);

  if ($run) {
   echo "<script>window.location.href='notices.php'</script>";
  } else {
   echo "Error updating notice without file.";
  }
 }
}
