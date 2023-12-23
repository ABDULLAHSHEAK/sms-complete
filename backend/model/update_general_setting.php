<?php
include_once('../controller/config.php');
$update = '';
if (isset($_POST['save'])) {
 $site_title = $_POST['site_title'];
 $school_name = $_POST['school_name'];
 $school_address = $_POST['school_address'];
 $established = $_POST['established'];
 $eiin_no = $_POST['eiin_no'];
 $school_code = $_POST['school_code'];
 $menu_text = $_POST['menu_text'];
 $school_number1 = $_POST['school_number1'];
 $school_number2 = $_POST['school_number2'];
 $school_email = $_POST['school_email'];
 $principal_email = $_POST['principal_email'];
 $website_url = $_POST['web_url'];
 $footer = $_POST['footer'];
 $footer_url = $_POST['footer_url'];

 $sql = "UPDATE general_setting SET site_title = '$site_title', school_name = '$school_name', school_address = '$school_address', establish_year = '$established', eiin_no = '$eiin_no', school_code = '$school_code', menu_text = '$menu_text', school_number1 = '$school_number1', school_number2 = '$school_number2', school_email = '$school_email', principal_email = '$principal_email' , website_url = '$website_url', footer = '$footer' , footer_url = '$footer_url'";
 $query = mysqli_query($conn, $sql);
 if ($query) {
  // echo "<script>alert('Successfully Updated');</script>";
  $update = "Data update successful";
  $_SESSION['run'] = 'update';
  // echo "<script>window.location.href = 'general-setting.php';</script>";
 }
}
?>
