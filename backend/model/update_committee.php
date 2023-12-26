<?php
// for delete old image 
if (isset($_GET['editId'])) {
 $id_edit = $_GET['editId'];
 $query1 = "SELECT * FROM committee WHERE id=$id_edit";
 $result1 = mysqli_query($conn, $query1);
 $row1 = mysqli_fetch_assoc($result1);
 $committee_ti = $row1['image_name'];
 $committee_img_old = trim($committee_ti);
}
if (isset($_POST['update_committee'])) {
 $id = $_POST['com_id'];
 $full_name = $_POST['full_name'];
 $title = $_POST['title'];
 $about = $_POST['about'];
 $gender = $_POST['gender'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $address = $_POST['address'];

 $slug = str_replace(' ', '-', $_POST['full_name']);
 $get_file_name = $_FILES['img']['name'];
 $tempName = $_FILES['img']['tmp_name'];
 $fileNameParts = explode('.', $_FILES['img']['name']);
 $fileExt = end($fileNameParts);
 $extension = array('jpg', 'jpeg', 'png');

 // Check if a new PDF file is uploaded
 if (!empty($get_file_name)) {
  if (in_array($fileExt, $extension)) {
   $current_time = date('Y-m-d-H-i-s');
   $filename = $current_time . '_' . $get_file_name;
   $upload = 'committee/' . $filename;
   $query = "UPDATE committee SET full_name ='$full_name', title ='$title', about ='$about', gender ='$gender', phone ='$phone', email ='$email', address ='$address',image_name ='$filename', slug ='$slug' WHERE id='$id' ";
   $run = mysqli_query($conn, $query);

   if ($run) {
    $unlink = 'committee/' . $committee_img_old;
    unlink($unlink);
    move_uploaded_file($tempName, $upload);
    echo "<script>alert('Committee Edit Successfully With Image');</script>";
    echo "<script>window.location.href='all_committee.php'</script>";
   } else {
    echo "Error updating notice with file.";
   }
  } else {
   $file_error = "File must be a PDF.";
  }
 } else {
  // If no new file is uploaded, update only the title
  $query = "UPDATE committee SET full_name ='$full_name', title ='$title', about ='$about', gender ='$gender', phone ='$phone', email ='$email', address ='$address', slug ='$slug' WHERE id='$id' ";
  $run = mysqli_query($conn, $query);

  if ($run) {
   echo "<script>alert('Committee Edit Successfully Without Image');</script>";
   echo "<script>window.location.href='all_committee.php'</script>";
  } else {
   echo "Error updating notice without file.";
  }
 }
}
