<?php
include_once('../controller/config.php');
$update = '';
if (isset($_POST['save'])) {
 $history = $_POST['history'];
 $goal = $_POST['goal'];
 $talk = $_POST['talk'];
 $principal_name = $_POST['principal_name'];
 $principal_talk = $_POST['principal_talk'];

 $sql = "UPDATE school_setting SET history = '$history', goal = '$goal', talk = '$talk', principal_name = '$principal_name' ,principal_talk = '$principal_talk'";
 $query = mysqli_query($conn, $sql);
 if ($query) {
  // echo "<script>alert('Successfully Updated');</script>";
  $update = "Data update successful";
  // echo "<script>window.location.href = 'general-setting.php';</script>";
 }
}
