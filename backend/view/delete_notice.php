<?php 
// delete notices start
$notic_delete = '';
include_once('../controller/config.php');
if (isset($_POST['delete_notice'])) {
  // var_dump($_POST['delete_img']);
  // var_dump($_POST);
  $notice_id = $_POST['delete_id'];
  $notice_file = trim($_POST['delete_file']);
  $post_sql = "DELETE FROM notice WHERE id = '$notice_id' ";
  $notice_delete = mysqli_query($conn, $post_sql);
  if ($notice_delete) {
    unlink("notices/" . $notice_file);
     $notic_delete = "Notice Delete Succesfull";
  } else {
    echo "not delete";
  }
}
?>