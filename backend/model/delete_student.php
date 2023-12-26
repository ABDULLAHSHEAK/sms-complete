<?php
// delete Student start
$student_delete = '';
include_once('../controller/config.php');
if (isset($_POST['delete'])) {
 $id = $_POST['id'];
 $img = trim($_POST['img']);
 $post_sql = "DELETE FROM student1 WHERE slug = '$id' ";
 $delete = mysqli_query($conn, $post_sql);
 if ($delete) {
  unlink("student/" . $img);
  $student_delete = "Student Delete Succesfull";
 } else {
  echo "not delete";
 }
}
