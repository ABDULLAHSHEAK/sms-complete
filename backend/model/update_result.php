<?php
if (isset($_GET['editId'])) {
 $id_edit = $_GET['editId'];
 $query1 = "SELECT * FROM result WHERE id=$id_edit";
 $result1 = mysqli_query($conn, $query1);
 $row1 = mysqli_fetch_assoc($result1);
 $result_ti = $row1['file'];
 $result_title_old = trim($result_ti);
}
$file_error = '';
if (isset($_POST['update_result'])) {
 $result_id = $_POST['edit_id'];
 $result_title = $_POST['title'];
 $class_name = $_POST['class_name'];

 $slug = str_replace(' ', '-', $_POST['title']);
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
   $upload = 'result/' . $filename;
   $query = "UPDATE result SET result_title='$result_title', class_id = '$class_name', file='$filename', slug ='$slug' WHERE id='$result_id' ";
   $run = mysqli_query($conn, $query);

   if ($run) {
    $unlink = 'result/' . $result_title_old;
    unlink($unlink);
    move_uploaded_file($tempName, $upload);
    echo "<script>alert('Result Edit Successfully With Image');</script>";
    echo "<script>window.location.href='all_result.php'</script>";
   } else {
    echo "Error updating notice with file.";
   }
  } else {
   $file_error = "File must be a PDF.";
  }
 } else {
  // If no new file is uploaded, update only the title
  $query = "UPDATE result SET result_title='$result_title', class_id = '$class_name', slug ='$slug' WHERE id='$result_id' ";
  $run = mysqli_query($conn, $query);

  if ($run) {
   echo "<script>alert('Result Edit Successfully Without Image');</script>";
   echo "<script>window.location.href='all_result.php'</script>";
  } else {
   echo "Error updating notice without file.";
  }
 }
}
