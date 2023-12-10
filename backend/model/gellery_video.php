<?php include('../controller/config.php'); ?>

<?php
$upload_alert = '';
$file_error = '';
if (isset($_POST['url_upload'])) {
 $get_url = $_POST['url'];
 $query = "INSERT INTO video_gellery (video_url) VALUES ('$get_url')";
 $run = mysqli_query($conn, $query);
 if ($run) {
  header("location:video_gellery.php");
  $upload_alert = "Video Added";
 } else {
 }
}
// --------- photo delete code -------- 

$delete = '';
if (isset($_POST['delete_video'])) {
  $video_id = $_POST['id'];
  $query = "DELETE FROM video_gellery WHERE id = '$video_id' ";
  $run = mysqli_query($conn, $query);
  if ($run) {
     $delete = "Video Delete Succesfull";
     echo "<script>window.location.href='../view/video_gellery.php'</script>";
  } else {
    echo "not delete";
  }
}

