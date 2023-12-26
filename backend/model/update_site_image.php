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
  $sql2 = "UPDATE site_image SET $column_name = '$getname' ";
  $query2 = mysqli_query($conn, $sql2);
  if ($query2) {
   header("Location:site_image.php");
  }
 }
}
updateImg($conn, 'fav_submit', 'fav_img', 'fav_icone');
updateImg($conn, 'president_submit', 'president_img', 'president');
updateImg($conn, 'principal_submit', 'principal_img', 'principal');
updateImg($conn, 'sub_principal_submit', 'sub_principal_img', 'sub_principal');
updateImg($conn, 'school_submit', 'school_logo_img', 'school_logo');
updateImg($conn, 'home_submit', 'home_img', 'home_bg');
updateImg($conn, 'history_bg_submit', 'history_bg_img', 'history_bg');
updateImg($conn, 'history_font_submit', 'history_font_img', 'history_font');
updateImg($conn, 'hotline_submit', 'hotline_img', 'hotline');
