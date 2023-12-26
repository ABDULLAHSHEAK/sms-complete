<?php
// include_once("../model/add_user.php");
if (!isset($_SERVER['HTTP_REFERER'])) {
 // redirect them to your desired location
 header('location:../index.php');
 exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<?php
if (isset($_POST['submit'])) {
 $class_name = $_POST['class_name'];
 $student_count = $_POST['student_count'];

 $sql = "INSERT INTO class_room(name,student_count) VALUES('$class_name','$student_count')";
 $result = mysqli_query($conn, $sql);
 if ($result) {
  echo "<script>alert('Class Room Added Successfully');</script>";
  echo "<script>window.location.href='class_room.php';</script>";
 }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Add Class Room
   <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
   <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Add Class Room</a></li>
  </ol>
 </section>

 <!-- Main content -->

 <!-- Main content -->
 <section class="content">
  <div class="row"><!-- left column -->
   <div class="col-md-6"><!-- general form elements -->
    <div class="box box-primary">
     <div class="box-header with-border">
      <h3 class="box-title">Add Classroom</h3>
     </div><!-- /.box-header -->
     <!-- //MSK-00097 form start -->
     <form role="form" action="" method="POST">
      <div class="box-body">
       <div class="form-group" id="divName">
        <label for="">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter classroom name" name="class_name" autocomplete="off">
       </div>
       <div class="form-group" id="divStudentCount">
        <label for="">Student Count</label>
        <input type="text" class="form-control" id="student_count" placeholder="Enter student count" name="student_count" autocomplete="off">
       </div>
      </div><!-- /.box-body -->
      <div class="box-footer">
       <input type="hidden" name="do" value="add_classroom" />
       <button type="submit" name="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
      </div>
     </form>
    </div><!-- /.box -->
   </div>
  </div>
 </section><!-- End of form section -->


 <?php include_once('footer.php'); ?>