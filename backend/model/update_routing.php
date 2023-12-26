<?php
if (isset($_GET['editId'])) {
 $id_edit = $_GET['editId'];
 $query1 = "SELECT * FROM routing WHERE id=$id_edit";
 $result1 = mysqli_query($conn, $query1);
 $row1 = mysqli_fetch_assoc($result1);
 $routing_ti = $row1['file'];
 $routing_title_old = trim($routing_ti);
}
$file_error = '';
if (isset($_POST['update_routing'])) {
 $routing_id = $_POST['edit_id'];
 $routing_title = $_POST['title'];
 $class_name= $_POST['class_name'];

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
   $upload = 'routing/' . $filename;
   $query = "UPDATE routing SET routing_title='$routing_title', class_id = '$class_name', file='$filename', slug ='$slug' WHERE id='$routing_id' ";
   $run = mysqli_query($conn, $query);

   if ($run) {
    $unlink = 'routing/'. $routing_title_old;
    unlink($unlink);
    move_uploaded_file($tempName, $upload);
    echo "<script>alert('Routing Edit Successfully With Image');</script>";
    echo "<script>window.location.href='all_routing.php'</script>";
   } else {
    echo "Error updating notice with file.";
   }
  } else {
   $file_error = "File must be a PDF.";
  }
 } else {
  // If no new file is uploaded, update only the title
  $query = "UPDATE routing SET routing_title='$routing_title', class_id = '$class_name', slug ='$slug' WHERE id='$routing_id' ";
  $run = mysqli_query($conn, $query);

  if ($run) {
   echo "<script>alert('Routing Edit Successfully Without Image');</script>";
   echo "<script>window.location.href='all_routing.php'</script>";
  } else {
   echo "Error updating notice without file.";
  }
 }
}
