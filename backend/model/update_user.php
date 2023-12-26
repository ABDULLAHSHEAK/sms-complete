<?php
if (isset($_GET['editId'])) {
 $id_edit = $_GET['editId'];
 $query1 = "SELECT * FROM admin WHERE id=$id_edit";
 $result1 = mysqli_query($conn, $query1);
 $row1 = mysqli_fetch_assoc($result1);
 $user_ti = $row1['image_name'];
 $user_title_old = trim($user_ti);
}
$file_error = '';
if (isset($_POST['update_user'])) {
 $user_id = $_POST['edit_id'];
 $full_name = $_POST['full_name'];
 $user_name = $_POST['user_name'];
 $gender = $_POST['gender'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $pass = $_POST['password'];
 $password = sha1($pass);

 $slug = str_replace(' ', '-', $_POST['full_name']);
 $get_file_name = $_FILES['img']['name'];
 $tempName = $_FILES['img']['tmp_name'];
 $fileNameParts = explode('.', $_FILES['img']['name']);
 $fileExt = end($fileNameParts);
 $extension = array('jpg', 'jpeg', 'png');

 // Check if a new img file is uploaded
 if (!empty($get_file_name)) {
  if (in_array($fileExt, $extension)) {
   $current_time = date('Y-m-d-H-i-s');
   $filename = $current_time . '_' . $get_file_name;
   $upload = 'users/' . $filename;
   $query = "UPDATE admin SET full_name = '$full_name', i_name = '$user_name', gender ='gender', address = '$address', phone = '$phone', email = '$email', password = '$password', slug ='$slug', image_name ='$filename' WHERE id='$user_id' ";
   $run = mysqli_query($conn, $query);

   if ($run) {
    $unlink = 'users/' . $user_title_old;
    unlink($unlink);
    move_uploaded_file($tempName, $upload);
    echo "<script>alert('User Edit Successfully With Image');</script>";
    echo "<script>window.location.href='all_users.php'</script>";
   } else {
    echo "Error updating notice with file.";
   }
  } else {
   $file_error = "File must be a PDF.";
  }
 } else {
  // If no new file is uploaded, update only the title
  $query = "UPDATE admin SET full_name = '$full_name', i_name = '$user_name', gender ='gender', address = '$address', phone = '$phone', email = '$email', password = '$password', slug ='$slug' WHERE id ='$user_id' ";
  $run = mysqli_query($conn, $query);

  if ($run) {
   echo "<script>alert('User Edit Successfully Without Image');</script>";
   echo "<script>window.location.href='all_users.php'</script>";
  } else {
   echo "Error updating notice without file.";
  }
 }
}
