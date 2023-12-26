<?php include('../controller/config.php'); ?>

<?php
$photo_add = '';
$file_error = '';
if (isset($_POST['Photo_upload'])) {

    $get_img_name = $_FILES['img']['name'];
    $tempName = $_FILES['img']['tmp_name'];
    $fileNameParts = explode('.', $_FILES['img']['name']);
    $fileExt = end($fileNameParts);
    $extension = array('jpg','png','jpeg');

    if (in_array($fileExt, $extension)) {
        $current_time = date('Y-m-d-H-i-s');
        $filename = $current_time . '_' . $get_img_name;
        $upload = 'photo_gellery/' . $filename;
        $query = "INSERT INTO photo_gellery (img_title) VALUES ('$filename')";
        $run = mysqli_query($conn, $query);
        if ($run) {
            move_uploaded_file($tempName, $upload);
            header('Location: photo_gallery.php');
          		    $photo_add = "Photo Added Succesfully";
        } else {
            echo "error";
        }
    } else {
        $file_error = "File must be a ('jpg','png','jpeg').";
    }
}

// --------- photo delete code -------- 

$routing_delete = '';
if (isset($_POST['delete_photo'])) {
  $photo_id = $_POST['id'];
  $photo_title = trim($_POST['img']);
  $post_sql = "DELETE FROM photo_gellery WHERE id = '$photo_id' ";
  $routing_delete = mysqli_query($conn, $post_sql);
  if ($routing_delete) {
    unlink("photo_gellery/" . $photo_title);
     $routing_delete = "Routing Delete Succesfull";
  } else {
    echo "not delete";
  }
}

