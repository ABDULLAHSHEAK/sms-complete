<?php
// delete committee start
$cm_delete = '';
include_once('../controller/config.php');
if (isset($_POST['delete_committee'])) {
  $committeer_id = $_POST['id'];
  $committee_img = trim($_POST['img']);
  $post_sql = "DELETE FROM committee WHERE id = '$committeer_id' ";
  $notice_delete = mysqli_query($conn, $post_sql);
  if ($notice_delete) {
    unlink("committee/" . $committee_img);
    $tc_delete = "Committee Delete Succesfull";
  } else {
    echo "not delete";
  }
}
