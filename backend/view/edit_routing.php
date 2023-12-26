<?php
include_once("../controller/config.php");
include_once("../model/update_routing.php");
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
if (isset($_GET['editId'])) {
 $id_edit = $_GET['editId'];
 if (empty($id_edit)) {
  echo "<script>
 window.location.href = 'all_routing.php'
</script>";
 }
}
?>


<?php
if (isset($_GET['editId'])) {
 $id = $_GET['editId'];

 $query = "SELECT * FROM `routing` WHERE id = '$id' ";
 $run = mysqli_query($conn, $query);
 $result = mysqli_fetch_assoc($run);
}

?>


<!-- ----------- breadcrumb -------------------   -->
<!-- ----------- breadcrumb -------------------   -->
<div class="content-wrapper">
 <section class="content-header">
  <h1>
   Edit Class Routing
   <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
   <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Edit Class Routing</a></li>
  </ol>
 </section>
 <!-- ----------- breadcrumb -------------------   -->
 <!-- ----------- breadcrumb -------------------   -->

 <section class="content">
  <div class="row">
   <div class="col-md-10">
    <div class="panel"><!--panel bg-maroon-->
     <div class="panel-heading bg-aqua-active">

      <div class="row">
       <div class="col-lg-10">
        <h3 class="text-white">Edit Class Routing</h3>

       </div>
       <div class="col-lg-2">
        <h3>
         <a href="all_routing.php" class="btn btn-success">Back
         </a>
        </h3>
       </div>
      </div>
     </div>
     <div class="panel-body"><!--panel-body -->


      <div class="box box-primary">
       <!-- //MSK-00097 form start -->
       <form role="form" action="" method="post" enctype="multipart/form-data">
        <div class="box-body">
         <!-- ---------- title ---------  -->
         <div class="form-group" id="divName">
          <label for="title">Routing Title*</label>
          <input type="text" class="form-control" id="title" placeholder="Notice Title" name="title" autocomplete="off" value="<?= $result['routing_title'] ?>">
         </div>
         <!-- ---------- Class ---------  -->
         <div class="form-group" id="divName">
          <label for="title">Select Class*</label>
          <select name="class_name" id="" class="form-control">
           <option value="">Select Class</option>
           <?php
           $classquery = "SELECT * FROM class_room";
           $classRun = mysqli_query($conn, $classquery);
           while ($classResult = mysqli_fetch_assoc($classRun)) {
           ?>
            <option value="<?= $classResult['id'] ?>"><?= $classResult['name'] ?></option>

           <?php } ?>
          </select>
         </div>
         <!-- ---------- File ---------  -->
         <div class="form-group" id="divStudentCount">
          <label for="">Notice* (PDF File Only)</label>
          <input type="file" class="form-control" id="title" name="pdf" autocomplete="off" accept="pdf"></input>
          <h4 style="color: red;"><?php echo $file_error; ?></h4>
         </div>
         <!-- --------------- --  -->
         <div class="form-group" id="divStudentCount">
          <label for="">File Name:</label>
          <?= $result['file'] ?>
         </div>
         <input type="hidden" name="edit_id" value="<?= $id ?>">
        </div><!-- /.box-body -->
        <div class="box-footer">
         <button type="submit" class="btn btn-primary" id="btnSubmit" name="update_routing">SSave Changesubmit</button>
        </div>
       </form>
      </div><!-- /.box -->

     </div>
    </div><!--/. panel-->
   </div>
  </div><!--/.row -->
 </section><!-- /.section -->

</div>

<?php include_once('footer.php'); ?>