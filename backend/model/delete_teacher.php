<?php
// delete Teacher start
$tc_delete = '';
include_once('../controller/config.php');
if (isset($_POST['delete_teacher'])) {
  $teacher_id = $_POST['delete_id'];
  $teacher_img = trim($_POST['img']);
  $post_sql = "DELETE FROM teacher WHERE id = '$teacher_id' ";
  $notice_delete = mysqli_query($conn, $post_sql);
  if ($notice_delete) {
    unlink("teacher/" . $teacher_img);
    $tc_delete = "Teacher Delete Succesfull";
  } else {
    echo "not delete";
  }
}
