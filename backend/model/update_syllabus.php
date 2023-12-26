<?php
if (isset($_GET['editId'])) {
 $id_edit = $_GET['editId'];
 $query1 = "SELECT * FROM syllabus WHERE id=$id_edit";
 $result1 = mysqli_query($conn, $query1);
 $row1 = mysqli_fetch_assoc($result1);
 $syllabus_ti = $row1['file'];
 $syllabus_title_old = trim($syllabus_ti);
}
$file_error = '';
if (isset($_POST['update_syllabus'])) {
 $syllabus_id = $_POST['edit_id'];
 $syllabus_title = $_POST['title'];
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
   $upload = 'syllabus/' . $filename;
   $query = "UPDATE syllabus SET syllabus_title='$syllabus_title', class = '$class_name', file='$filename', slug ='$slug' WHERE id='$syllabus_id' ";
   $run = mysqli_query($conn, $query);

   if ($run) {
    $unlink = 'syllabus/' . $syllabus_title_old;
    unlink($unlink);
    move_uploaded_file($tempName, $upload);
    echo "<script>alert('Syallabus Edit Successfully With Image');</script>";
    echo "<script>window.location.href='all_syllabus.php'</script>";
   } else {
    echo "Error updating notice with file.";
   }
  } else {
   $file_error = "File must be a PDF.";
  }
 } else {
  // If no new file is uploaded, update only the title
  $query = "UPDATE syllabus SET syllabus_title='$syllabus_title', class = '$class_name', slug ='$slug' WHERE id='$syllabus_id' ";
  $run = mysqli_query($conn, $query);

  if ($run) {
   echo "<script>alert('Syllabus Edit Successfully Without Image');</script>";
   echo "<script>window.location.href='all_syllabus.php'</script>";
  } else {
   echo "Error updating notice without file.";
  }
 }
}
