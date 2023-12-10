<?php 
// delete notices start
$syllabus_delete = '';
include_once('../controller/config.php');
if (isset($_POST['delete_syllabus'])) {
  $syllabus_id = $_POST['delete_id'];
  $syllabus_file = trim($_POST['delete_file']);
  $post_sql = "DELETE FROM syllabus WHERE id = '$syllabus_id' ";
  $routing_delete = mysqli_query($conn, $post_sql);
  if ($routing_delete) {
    unlink("syllabus/" . $syllabus_file);
     $routing_delete = "Syllabus Delete Succesfull";
  } else {
    echo "not delete";
  }
}
?>