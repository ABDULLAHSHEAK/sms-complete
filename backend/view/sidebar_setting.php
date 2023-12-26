<?php
include_once("../model/update_sidebar_img.php");
if (!isset($_SERVER['HTTP_REFERER'])) {
 // redirect them to your desired location
 header('location:../index.php');
 exit;
}
?>
<!-- ----------- select data from database ------------ -->
<?php
include_once('../controller/config.php');
$sidebar = "SELECT * FROM sidebar_setting";
$result = mysqli_query($conn, $sidebar);
$side_data = mysqli_fetch_assoc($result);

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
   Sidebar Setting
   <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
   <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Sidebar Setting</a></li>
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
      <div class="row">
       <div class="col-lg-10">
        <h3 class="text-white">Sidebar Setting</h3>
       </div>
       <div class="col-lg-2">
        <h3>
         </a>
        </h3>
       </div>
      </div>
     </div><!-- /.box-header -->

     <!-- ----------- select data from database ------------ -->
     <!-- form start -->
     <div role="form" class="form-horizontal">
      <div class="box-body">
       <!-- -------- President image -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>The President image (300*250 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['president_img'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=0" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="pre_img" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="pre_submit">Save</button>
         </form>
        </div>
       </div>

       <!-- -------- principal image -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>The Principal image (300*250 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['principal_img'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=0" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="princ_img" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="princ_submit">Save</button>
         </form>
        </div>
       </div>

       <!-- -------- sub principal image -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>The Sub-Principal image (300*250 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['sub_principal_img'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=0" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="sub_principal_img" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="sub_principal_submit">Save</button>
         </form>
        </div>
       </div>

       <!-- -------- Info image -------------  -->
       <div class="setting">
        <div class="form-group" id="divPhoto">
         <div class="col-xs-3">
          <label>The Info image (256*939 px)</label>
         </div>
         <div class="col-xs-3" id="divPhoto1" style="height:150px;">
          <img src="media/<?= $side_data['info_img'] ?>" id="output" style="width:130px;height:150px;" class="media_img" />
         </div>
        </div>
        <div style="text-align: center;margin: 10px 0 20px 50px;display: flex;">
         <a href="media.php?page=0" class="btn btn-warning" style="margin-right: 5px;">Upload</a>
         <!-- <a href="">Save</a> -->
         <form action="" method="POST">
          <input type="text" name="info_image" value="<?= $img_name ?>" hidden>
          <button class="btn btn-primary" type="submit" id="pre_img" name="info_submit">Save</button>
         </form>
        </div>
       </div>
       <!-- ------- name ---------  -->
       <form action="" method="POST">

        <!-- --------- principal name ------------  -->

        <div class="form-group" id="divFullName"> <!-- full name -->
         <div class="col-xs-3">
          <label for="presidentName">President Nane</label>
         </div>
         <div class="col-xs-9">
          <input type="text" class="form-control" name="presidentName" autocomplete="off" value="<?= $side_data['president_name'] ?>">
         </div>
        </div>

        <!-- --------- principal name ------------  -->
        <div class="form-group" id="divFullName"> <!-- full name -->
         <div class="col-xs-3">
          <label for="principalName">Principal Nane</label>
         </div>
         <div class="col-xs-9">
          <input type="text" class="form-control" name="principalName" autocomplete="off" value="<?= $side_data['principal_name'] ?>">
         </div>
        </div>

        <!-- --------- Sub principal name ------------  -->
        <div class="form-group" id="divFullName"> <!-- full name -->
         <div class="col-xs-3">
          <label for="subPrincipalName">Assistant Principal Nane</label>
         </div>
         <div class="col-xs-9">
          <input type="text" class="form-control" name="subPrincipalName" autocomplete="off" value="<?= $side_data['sub_principal_name'] ?>">
         </div>
        </div>

        <button type="submit" class="btn btn-primary" name="save_name">Update</button>
       </form>
      </div><!-- /.box-body -->
     </div>
    </div><!-- /.box -->
   </div>
  </div>
 </section><!-- End of form section -->
</div>
 <?php include_once('footer.php'); ?>