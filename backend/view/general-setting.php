<?php
include_once("../model/update_general_setting.php");
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
   General Setting
   <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
   <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">General Setting</a></li>
  </ol>
 </section>

 <!-- Main content -->
 <section class="content">
  <div class="row" id="test123">
   <!-- left column -->
   <div class="col-md-8">
    <!-- general form elements -->
    <div class="box box-primary">
     <div class="box-header with-border">
      <h4 style="color:red;font-weight:bold"><?= $update ?></h4>
      <div class="row">
       <div class="col-lg-10">
        <h3 class="text-white">General Setting</h3>
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
     $setting = "SELECT * FROM general_setting";
     $setting_query = mysqli_query($conn, $setting);
     $setting_data = mysqli_fetch_assoc($setting_query);
     ?>
     <form role="form" action="" method="POST" class="form-horizontal">
      <div class="box-body">
       <!-- -------- Site Title -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>Site Title</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="site_title" id="full_name" autocomplete="off" value="<?= $setting_data['site_title'] ?>">
        </div>
       </div>
       <!-- -------- School Name -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>School Name</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="school_name" autocomplete="off" value="<?= $setting_data['school_name'] ?>">
        </div>
       </div>
       <!-- -------- School Address -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>School Address</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="school_address" autocomplete="off" value="<?= $setting_data['school_address'] ?>">
        </div>
       </div>
       <!-- -------- established Year -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>Establish Year</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="established" autocomplete="off" value="<?= $setting_data['establish_year'] ?>">
        </div>
       </div>
       <!-- -------- EIIN Number -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>EIIN NO </label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="eiin_no" autocomplete="off" value="<?= $setting_data['eiin_no'] ?>">
        </div>
       </div>
       <!-- -------- School Code -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>School Code </label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="school_code" autocomplete="off" value="<?= $setting_data['school_code'] ?>">
        </div>
       </div>
       <!-- -------- Menu Text -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>Menu Text</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="menu_text" autocomplete="off" value="<?= $setting_data['menu_text'] ?>">
        </div>
       </div>
       <!-- -------- School Number -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>School Number 1</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="school_number1" autocomplete="off" value="<?= $setting_data['school_number1'] ?>">
        </div>
       </div>
       <!-- -------- School Number2 -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>School Number 2</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="school_number2" autocomplete="off" value="<?= $setting_data['school_number2'] ?>">
        </div>
       </div>
       <!-- -------- School Email -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>School Email</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="school_email" autocomplete="off" value="<?= $setting_data['school_email'] ?>">
        </div>
       </div>
       <!-- -------- Principal Email -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>Principal Email</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="principal_email" autocomplete="off" value="<?= $setting_data['principal_email'] ?>">
        </div>
       </div>
       <!-- -------- Website Address -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>Website Address</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="web_url" autocomplete="off" value="<?= $setting_data['website_url'] ?>">
        </div>
       </div>
       <!-- -------- Footer Text -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>Footer Text</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="footer" autocomplete="off" value="<?= $setting_data['footer'] ?>">
        </div>
       </div>
       <!-- -------- Footer URL -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>Footer URL</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" name="footer_url" autocomplete="off" value="<?= $setting_data['footer_url'] ?>">
        </div>
       </div>

       <!-- -------- section end ----------  -->
      </div><!-- /.box-body -->
      <div class="box-footer">
       <button type="submit" class="btn btn-primary" id="btnSubmit" name="save">Save</button>
      </div>
     </form>
    </div><!-- /.box -->
   </div>
  </div>
 </section><!-- End of form section -->