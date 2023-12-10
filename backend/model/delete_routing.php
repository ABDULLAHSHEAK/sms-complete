<?php 
// delete notices start
$routing_delete = '';
include_once('../controller/config.php');
if (isset($_POST['delete_routing'])) {
  $routing_id = $_POST['delete_id'];
  $routing_file = trim($_POST['delete_file']);
  $post_sql = "DELETE FROM routing WHERE id = '$routing_id' ";
  $routing_delete = mysqli_query($conn, $post_sql);
  if ($routing_delete) {
    unlink("routing/" . $routing_file);
     $routing_delete = "Routing Delete Succesfull";
  } else {
    echo "not delete";
  }
}
?>