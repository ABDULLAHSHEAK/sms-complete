<?php
include_once("../model/update_school_setting.php");
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

<style>
 .msk-col-md-4 {
  width: 28%;
 }

 .modal {
  overflow-y: auto;
 }

 .form-control-feedback {

  pointer-events: auto;

 }

 .msk-set-width-tooltip+.tooltip>.tooltip-inner {

  min-width: 180px;
 }

 .msk-set-color-tooltip+.tooltip>.tooltip-inner {

  min-width: 180px;
  background-color: red;
 }

 .msk-image-error {
  border: 1px solid #f44336;

 }

 .msk-fade {

  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
 }

 /* Add Animation */
 @-webkit-keyframes animatetop {
  from {
   top: -300px;
   opacity: 0
  }

  to {
   top: 0;
   opacity: 1
  }
 }

 @keyframes animatetop {
  from {
   top: -300px;
   opacity: 0
  }

  to {
   top: 0;
   opacity: 1
  }
 }

 @media only screen and (max-width: 500px) {

  #divGender1,
  #divPhone1,
  #divEmail1 {

   width: 75%;

  }

 }
</style>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   School Setting
   <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">School Setting</a></li>
  </ol>
 </section>

 <!-- Main content -->
 <section class="content">
  <div class="row" id="test123">
   <!-- left column -->
   <div class="col-md-7">
    <!-- general form elements -->
    <div class="box box-primary">
     <div class="box-header with-border">
      <h4 style="color:red;font-weight:bold"><?= $update ?></h4>
      <div class="row">
       <div class="col-lg-10">
        <h3 class="text-white">School Setting</h3>
       </div>
       <div class="col-lg-2">
        <h3>
         </a>
        </h3>
       </div>
      </div>
     </div><!-- /.box-header -->
     <!-- form start -->
     <?php
     include_once('../controller/config.php');
     $school_setting = "SELECT * FROM school_setting";
     $result = mysqli_query($conn, $school_setting);
     $school_data = mysqli_fetch_assoc($result);
     ?>
     <form role="form" action="" method="POST" enctype="multipart/form-data" id="form1" class="form-horizontal">
      <div class="box-body">
       <!-- -------- School History -------------  -->
       <div class="form-group" id="divAddress">
        <div class="col-xs-3">
         <label>School History</label>
        </div>
        <div class="col-xs-9">
         <textarea placeholder="Enter School Short History" name="history" cols="30" rows="10" class="form-control"><?= $school_data['history'] ?></textarea>
        </div>
       </div>
       <!-- -------- Our Goal -------------  -->
       <div class="form-group" id="divAddress">
        <div class="col-xs-3">
         <label>Our Goal</label>
        </div>
        <div class="col-xs-9">
         <textarea placeholder="Enter School Goal" name="goal" cols="30" rows="10" class="form-control"><?= $school_data['goal'] ?></textarea>
        </div>
       </div>
       <!-- -------- Our Talk -------------  -->
       <div class="form-group" id="divAddress">
        <div class="col-xs-3">
         <label>Our Talk</label>
        </div>
        <div class="col-xs-9">
         <textarea placeholder="Enter School Talk" name="talk" cols="30" rows="10" class="form-control"><?= $school_data['talk'] ?></textarea>
        </div>
       </div>

       <!-- -------- Principal Name -------------  -->
       <div class="form-group" id="divAddress">
        <div class="col-xs-3">
         <label>Principal Name</label>
        </div>
        <div class="col-xs-9">
         <input type="text" placeholder="Enter Principal Name" name="principal_name" class="form-control" value="<?= $school_data['principal_name']?>">
        </div>
       </div>

       <!-- -------- Principal Talk -------------  -->
       <div class="form-group" id="divAddress">
        <div class="col-xs-3">
         <label>Principal Talk</label>
        </div>
        <div class="col-xs-9">
         <textarea placeholder="Enter School Talk" name="principal_talk" cols="30" rows="10" class="form-control"><?= $school_data['principal_talk'] ?></textarea>
        </div>
       </div>

       <!-- ----------- end content ---------  -->
      </div><!-- /.box-body -->
      <div class="box-footer">
       <button type="submit" class="btn btn-primary" id="btnSubmit" name="save">Update</button>
      </div>
     </form>
    </div><!-- /.box -->
   </div>
  </div>
 </section><!-- End of form section -->