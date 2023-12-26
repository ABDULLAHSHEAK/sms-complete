<?php
// delete Users start
$user_delete = '';
include_once('../controller/config.php');
if (isset($_POST['delete'])) {
 $id = $_POST['id'];
 $img = trim($_POST['img']);
 $post_sql = "DELETE FROM admin WHERE id = '$id' ";
 $delete = mysqli_query($conn, $post_sql);
 if ($delete) {
  unlink("users/" . $img);
  $user_delete = "User Delete Succesfull";
 } else {
  echo "not delete";
 }
}
