<?php
include_once("../model/add_student.php");
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
   Site Image
   <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
   <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Site Image</a></li>
  </ol>
 </section>
 <!-- ----- select image name from database --------  -->
 <?php
 include_once('../controller/config.php');
 $site_image = "SELECT * FROM site_image";
 $result = mysqli_query($conn, $site_image);
 $img_data = mysqli_fetch_assoc($result);
 ?>
 <!-- ----- select image name from database --------  -->
 <!-- Main content -->
 <section class="content">
  <div class="row" id="test123">
   <!-- left column -->
   <div class="col-md-7">
    <!-- general form elements -->
    <div class="box box-primary">
     <div class="box-header with-border">
      <h4 style="color:red;font-weight:bold"><?= $student_alert ?></h4>
      <div class="row">
       <div class="col-lg-10">
        <h3 class="text-white">Site Images</h3>

       </div>
       <div class="col-lg-2">
        <h3>
         </a>
        </h3>
       </div>
      </div>
     </div><!-- /.box-header -->
     <!-- form start -->
     <form role="form" action="" method="POST" enctype="multipart/form-data" id="form1" class="form-horizontal">
      <div class="box-body">
       <!-- -------- Fav Icone -------------  -->
       <div class="form-group" id="divPhoto">
        <div class="col-xs-3">
         <label>Site/Fav Icone(180*180 px)</label>
        </div>
        <div class="col-xs-3" id="divPhoto1" style="height:150px;">
         <img src="site_image/<?= $img_data['fav_icone'] ?>" id="output" style="width:130px;height:150px;" />
         <h4><?= $file_error ?></h4>
         <input required type="file" name="fav" id="fileToUpload" style="margin-top:7px;" />
        </div>
       </div> <br /> <br />

       <!-- -------- President -------------  -->
       <div class="form-group" id="divPhoto">
        <div class="col-xs-3">
         <label>The President image (348 * 220 px)</label>
        </div>
        <div class="col-xs-3" id="divPhoto1" style="height:150px;">
         <img src="site_image/<?= $img_data['president'] ?>" id="output" style="width:130px;height:150px;" />
         <h4><?= $file_error ?></h4>
         <input required type="file" name="president_img" id="fileToUpload" style="margin-top:7px;" />
        </div>
       </div> <br /> <br />
       <!-- -------- Principal -------------  -->
       <div class="form-group" id="divPhoto">
        <div class="col-xs-3">
         <label> Principal image (348 * 220 px)</label>
        </div>
        <div class="col-xs-3" id="divPhoto1" style="height:150px;">
         <img src="site_image/<?= $img_data['principal'] ?>" id="output" style="width:130px;height:150px;" />
         <h4><?= $file_error ?></h4>
         <input required type="file" name="principal_img" id="fileToUpload" style="margin-top:7px;" />
        </div>
       </div> <br /> <br />
       <!-- -------- Assistant -------------  -->
       <div class="form-group" id="divPhoto">
        <div class="col-xs-3">
         <label>Assistant Principal image (348 * 220 px)</label>
        </div>
        <div class="col-xs-3" id="divPhoto1" style="height:150px;">
         <img src="site_image/<?= $img_data['sub_principal'] ?>" id="output" style="width:130px;height:150px;" />
         <h4><?= $file_error ?></h4>
         <input required type="file" name="home_img" id="fileToUpload" style="margin-top:7px;" />
        </div>
       </div> <br /> <br />
       <!-- -------- Nav Logo -------------  -->
       <div class="form-group" id="divPhoto">
        <div class="col-xs-3">
         <label>School Logo (300*300 px)</label>
        </div>
        <div class="col-xs-3" id="divPhoto1" style="height:150px;">
         <img src="site_image/<?= $img_data['school_logo'] ?>" id="output" style="width:130px;height:150px;" />
         <h4><?= $file_error ?></h4>
         <input required type="file" name="school_logo" id="fileToUpload" style="margin-top:7px;" />
        </div>
       </div> <br /> <br />
       <!-- -------- Nav Logo -------------  -->
       <div class="form-group" id="divPhoto">
        <div class="col-xs-3">
         <label>Home Background-img (1000*550 px)</label>
        </div>
        <div class="col-xs-3" id="divPhoto1" style="height:150px;">
         <img src="site_image/<?= $img_data['home_bg'] ?>" id="output" style="width:130px;height:150px;" />
         <h4><?= $file_error ?></h4>
         <input required type="file" name="home_img" id="fileToUpload" style="margin-top:7px;" />
        </div>
       </div> <br /> <br />
       <!-- -------- Nav Logo -------------  -->
       <div class="form-group" id="divPhoto">
        <div class="col-xs-3">
         <label>History Background-img (1000*550 px)</label>
        </div>
        <div class="col-xs-3" id="divPhoto1" style="height:150px;">
         <img src="site_image/<?= $img_data['history_bg'] ?>" id="output" style="width:130px;height:150px;" />
         <h4><?= $file_error ?></h4>
         <input required type="file" name="history_img" id="fileToUpload" style="margin-top:7px;" />
        </div>
       </div> <br /> <br />
       <!-- -------- History font img -------------  -->
       <div class="form-group" id="divPhoto">
        <div class="col-xs-3">
         <label>History Font-img (1364*1036 px)</label>
        </div>
        <div class="col-xs-3" id="divPhoto1" style="height:150px;">
         <img src="site_image/<?= $img_data['history_font'] ?>" id="output" style="width:130px;height:150px;" />
         <h4><?= $file_error ?></h4>
         <input required type="file" name="history_imgf" id="fileToUpload" style="margin-top:7px;" />
        </div>
       </div> <br /> <br />
       <!-- -------- Hot LIne img -------------  -->
       <div class="form-group" id="divPhoto">
        <div class="col-xs-3">
         <label>Info/Hotline img(218*454 px)</label>
        </div>
        <div class="col-xs-3" id="divPhoto1" style="height:150px;">
         <img src="site_image/<?= $img_data['hotline'] ?>" id="output" style="width:130px;height:150px;" />
         <h4><?= $file_error ?></h4>
         <input required type="file" name="info_img" id="fileToUpload" style="margin-top:7px;" />
        </div>
       </div> <br /> <br />
       <h4 class="alert alert-danger">(jpg,png,jpeg file Only)</h4>
      </div><!-- /.box-body -->
      <div class="box-footer">
       <button type="submit" class="btn btn-primary" id="btnSubmit" name="submit">Submit</button>
      </div>
     </form>
    </div><!-- /.box -->
   </div>
  </div>
 </section><!-- End of form section -->