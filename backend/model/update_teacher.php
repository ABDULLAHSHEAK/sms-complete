<?php
if (isset($_GET['editId'])) {
 $id = $_GET['editId'];
 $query = "SELECT * FROM `teacher` WHERE id = '$id'";
 $run = mysqli_query($conn, $query);
 $result = mysqli_fetch_assoc($run);
 $old_img = $result['image_name'];
}

$file_error = '';
if (isset($_POST['update_teacher'])) {
 $teacher_id = $_POST['edit_id'];
 $teaher_name = $_POST['full_name'];
 $teaher_title = $_POST['title'];
 $teaher_about = $_POST['about'];
 $teaher_address = $_POST['address'];
 $teaher_gender = $_POST['gender'];
 $teaher_phone = $_POST['phone'];
 $teaher_email = $_POST['email'];
 
 $slug = str_replace(' ', '-', $_POST['full_name']);
 $get_file_name = $_FILES['img']['name'];
 $tempName = $_FILES['img']['tmp_name'];
 $fileNameParts = explode('.', $_FILES['img']['name']);
 $fileExt = end($fileNameParts);
 $extension = array('jpg', 'png', 'jpeg');

 // Check if a new PDF file is uploaded
 if (!empty($get_file_name)) {
  if (in_array($fileExt, $extension)) {
   $current_time = date('Y-m-d-H-i-s');
   $filename = $current_time . '_' . $get_file_name;
   $upload = 'teacher/' . $filename;
   $query = "UPDATE teacher SET full_name = '$teaher_name', title = '$teaher_title', about = '$teaher_about', gender = '$teaher_gender', phone = '$teaher_phone', email = '$teaher_email', address = '$teaher_address', image_name = '$filename', slug = '$slug' WHERE id = '$teacher_id' ";
   $run = mysqli_query($conn, $query);

   if ($run) {
    $unlink = 'teacher/' . $old_img;
    unlink($unlink);
    move_uploaded_file($tempName, $upload);
    echo "<script>window.location.href='all_teacher.php'</script>";
   } else {
    echo "Error updating notice with file.";
   }
  } else {
   $file_error = "File must be a PDF.";
  }
 } else {
  // If no new file is uploaded, update only the title
  $query = "UPDATE teacher SET full_name = '$teaher_name', title = '$teaher_title', about = '$teaher_about', gender = '$teaher_gender', phone = '$teaher_phone', email = '$teaher_email', address = '$teaher_address', slug = '$slug' WHERE id = '$teacher_id' ";
  $run = mysqli_query($conn, $query);

  if ($run) {
   echo "<script>window.location.href='all_teacher.php'</script>";
  } else {
   echo "Error updating notice without file.";
  }
 }
}
