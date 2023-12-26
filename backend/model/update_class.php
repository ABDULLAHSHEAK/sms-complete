<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
 // redirect them to your desired location
 header('location:../index.php');
 exit;
}
?>
<?php include_once('../view/head.php'); ?>
<?php include_once('../view/header_admin.php'); ?>
<?php include_once('../view/sidebar.php'); ?>
<?php include_once('../view/alert.php'); ?>
<?php include_once('../controller/config.php'); ?>
<?php
if (isset($_POST['edit_submit'])) {
 $edit_id = $_POST['update_id'];
 $class_name = $_POST['edit_name'];
 $student_count = $_POST['edit_count'];
 // update class room
 $sql2 = "UPDATE class_room SET name = '$class_name', student_count = '$student_count' WHERE id = '$edit_id' ";
 $result2 = mysqli_query($conn, $sql2);
 if ($result2) {
  echo "<script>window.location.href='../view/class_room.php';</script>";
 }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Edit Class Room
   <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
   <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Edit Class Room</a></li>
  </ol>
 </section>

 <!-- Main content -->
 <?php
 if (isset($_POST['edit_class'])) {
  $edit_id = $_POST['edit_id'];
  $sql = "SELECT * FROM class_room WHERE id = '$edit_id' ";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
 }
 ?>
 <!-- Main content -->
 <section class="content">
  <div class="row"><!-- left column -->
   <div class="col-md-6"><!-- general form elements -->
    <div class="box box-primary">
     <div class="box-header with-border">
      <h3 class="box-title">Edit Classroom</h3>
     </div><!-- /.box-header -->
     <form role="form" action="" method="POST">
      <div class="box-body">
       <div class="form-group" id="divName">
        <label for="">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter classroom name" name="edit_name" autocomplete="off" value="<?= $row['name'] ?>">
       </div>
       <div class="form-group" id="divStudentCount">
        <label for="">Student Count</label>
        <input type="text" class="form-control" id="student_count" placeholder="Enter student count" name="edit_count" autocomplete="off" value="<?= $row['student_count'] ?>">
       </div>
      </div><!-- /.box-body -->
      <div class="box-footer">
       <input type="hidden" name="update_id" value="<?= $row['id'] ?>" />
       <button type="submit" name="edit_submit" class="btn btn-primary" id="btnSubmit">Submit</button>
      </div>
     </form>
    </div><!-- /.box -->
   </div>
  </div>
 </section><!-- End of form section -->