<?php
include_once("../model/update_site_image.php");
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
 $side_data = mysqli_fetch_assoc($result);
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
      <div class="row">
       <div class="col-lg-10">
        <h3 class="text-white">Home Page Images Setting</h3>

       </div>
       <div class="col-lg-2">
        <h3>
         </a>
        </h3>
       </div>
      </div>
     </div><!-- /.box-header -->
     <!-- form start -->
     <!-- form start -->
     <div role="form" class="form-horizontal">
      <div class="box-body">
       <!-- -------- Fav Icone image -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>Site/Fav Icone(180*180 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['fav_icone'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=1" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="fav_img" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="fav_submit">Save</button>
         </form>
        </div>
       </div>

       <!-- -------- President image -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>The President image (348 * 220 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['president'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=1" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="president_img" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="president_submit">Save</button>
         </form>
        </div>
       </div>

       <!-- -------- Principal image -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>Principal image (348 * 220 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['principal'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=1" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="principal_img" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="principal_submit">Save</button>
         </form>
        </div>
       </div>

       <!-- -------- Assistant Principal image -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>Assistant Principal image (348 * 220 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['sub_principal'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=1" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="sub_principal_img" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="sub_principal_submit">Save</button>
         </form>
        </div>
       </div>

       <!-- -------- School Logo  -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>School Logo (300*300 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['school_logo'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=1" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="school_logo_img" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="school_submit">Save</button>
         </form>
        </div>
       </div>

       <!-- -------- Home Background-img -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>Home Background-img (1000*550 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['home_bg'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=1" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="home_img" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="home_submit">Save</button>
         </form>
        </div>
       </div>

       <!-- -------- History Background-img  -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>History Background-img (1000*550 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['history_bg'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=1" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="history_bg_img" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="history_bg_submit">Save</button>
         </form>
        </div>
       </div>

       <!-- -------- History font-img  -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>History Font-img (1364*1036 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['history_font'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=1" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="history_font_img" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="history_font_submit">Save</button>
         </form>
        </div>
       </div>

       <!-- -------- Info/Hotline img -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>Info/Hotline img(218*454 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['hotline'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=1" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="hotline_img" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="hotline_submit">Save</button>
         </form>
        </div>
       </div>
      </div><!-- /.box-body -->
     </div>
    </div><!-- /.box -->
   </div>
  </div>
 </section><!-- End of form section -->
</div>
<?php include_once('footer.php'); ?>