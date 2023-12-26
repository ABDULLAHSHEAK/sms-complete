<?php
// delete Result start
$result_delete = '';
include_once('../controller/config.php');
if (isset($_POST['delete_result'])) {
  $result_id = $_POST['delete_id'];
  $result_file = trim($_POST['delete_file']);
  $post_sql = "DELETE FROM result WHERE id = '$result_id' ";
  $result_delete = mysqli_query($conn, $post_sql);
  if ($result_delete) {
    unlink("routing/" . $result_file);
    $routing_delete = "Result Delete Succesfull";
  } else {
    echo "not delete";
  }
}
