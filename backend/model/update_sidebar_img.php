<?php
include_once('../controller/config.php');

if (isset($_GET['image'])) {
 $get_image_id = $_GET['image'];
 $sql = "SELECT * FROM media WHERE id = '$get_image_id' ";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
 $img_name = $row['img_name'];
};

function updateImg($conn, $sub_btn, $input_name, $column_name)
{
 if (isset($_POST[$sub_btn])) {
  $getname = $_POST[$input_name];
  $sql2 = "UPDATE sidebar_setting SET $column_name = '$getname' ";
  $query2 = mysqli_query($conn, $sql2);
  if ($query2) {
   echo "<script>alert('Class Room Added Successfully');</script>";
   header("Location:sidebar_setting.php");
  }
 }
}
updateImg($conn, 'pre_submit', 'pre_img', 'president_img');
updateImg($conn, 'princ_submit', 'princ_img', 'principal_img');
updateImg($conn, 'sub_principal_submit', 'sub_principal_img', 'sub_principal_img');
updateImg($conn, 'info_submit', 'info_image', 'info_img');
updateImg($conn, 'save_name', 'presidentName', 'president_name');
updateImg($conn, 'save_name', 'principalName', 'principal_name');
updateImg($conn, 'save_name', 'subPrincipalName', 'sub_principal_name');
