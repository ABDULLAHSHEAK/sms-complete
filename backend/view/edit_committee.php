<?php
include_once("../model/add_committee.php");
include_once("../model/update_committee.php");
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
 window.location.href = 'notices.php'
</script>";
 }
}

if (isset($_GET['editId'])) {
 $id = $_GET['editId'];
 $query = "SELECT * FROM `committee` WHERE id = '$id'";
 $run = mysqli_query($conn, $query);
 $result = mysqli_fetch_assoc($run);
}

?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Edit Board of Directors
   <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Edit Committees</a></li>
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
        <h3 class="text-white">Edit Board of Directors(Committee)</h3>

       </div>
       <div class="col-lg-2">
        <h3>
         <a href="all_committee.php" class="btn btn-success btn-sm">Back
         </a>
        </h3>
       </div>
      </div>
     </div><!-- /.box-header -->
     <!-- form start //MSK-00097-->
     <form role="form" action="" method="POST" enctype="multipart/form-data" id="form1" class="form-horizontal">
      <div class="box-body">
       <!-- -------- Full Name -------------  -->
       <div class="form-group" id="divFullName"> <!-- full name -->
        <div class="col-xs-3">
         <label>Full Name*</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" placeholder="Enter full name" name="full_name" id="full_name" autocomplete="off" value="<?= $result['full_name'] ?>">
        </div>
       </div>
       <!-- ----------------------- title -----------  -->
       <div class="form-group" id="divIName">
        <div class="col-xs-3">
         <label>Committee Title*</label>
        </div>
        <div class="col-xs-9">
         <input type="text" class="form-control" placeholder="Ex: Bangla Teacher" name="title" id="i_name" autocomplete="off" value="<?= $result['title'] ?>">
        </div>
       </div>
       <!-- -------- about -------------  -->
       <div class="form-group" id="divAddress">
        <div class="col-xs-3">
         <label>About Committee*</label>
        </div>
        <div class="col-xs-9">
         <!-- <input type="text" class="form-control" placeholder="Enter address" name="address" id="address" autocomplete="off">  -->
         <textarea placeholder="Enter About Teacher" name="about" cols="30" rows="10" class="form-control"> <?= $result['about'] ?></textarea>
        </div>
       </div>
       <!-- -------- gender -------------  -->
       <div class="form-group" id="divGender">
        <div class="col-xs-3">
         <label>Gender*</label>
        </div>
        <div class="col-xs-4" id="divGender1">
         <select name="gender" class="form-control" id="gender" required>
          <option>Select Gender</option>
          <option>Male</option>
          <option>Female</option>
         </select>
        </div>
       </div>
       <!-- -------- Number -------------  -->
       <div class="form-group" id="divPhone">
        <div class="col-xs-3">
         <label>Phone Number* </label>
        </div>
        <div class="col-xs-4" id="divPhone1">
         <input type="tel" class="form-control" placeholder="123-456-7890" name="phone" id="phone" autocomplete="off" value="<?= $result['phone'] ?>">
        </div>
       </div>
       <!-- -------- email -------------  -->
       <div class="form-group tt2 " id="divEmail">
        <div class="col-xs-3">
         <label>Email(Optional)</label>
        </div>
        <div class="col-xs-6" id="divEmail1">
         <input type="text" class="form-control" placeholder="Enter valid email address" name="email" id="email" autocomplete="off" value="<?= $result['email'] ?>">
        </div>
       </div>
       <!-- -------- Address -------------  -->
       <div class="form-group tt2 " id="divEmail">
        <div class="col-xs-3">
         <label>Address</label>
        </div>
        <div class="col-xs-6" id="divEmail1">
         <input type="text" class="form-control" placeholder="Enter valid email address" name="address" id="email" autocomplete="off" value="<?= $result['address'] ?>">
        </div>
       </div>
       <!-- -------- photo -------------  -->
       <div class="form-group" id="divPhoto">
        <div class="col-xs-3">
         <label>Photo*(jpg,png,jpeg file Only)</label>
        </div>
        <div class="col-xs-3" id="divPhoto1" style="height:150px;">
         <img src="committee/<?= $result['image_name'] ?>" id="output" style="width:130px;height:150px;" />
         <h4><?= $file_error ?></h4>
         <input type="file" name="img" id="fileToUpload" style="margin-top:7px;" />
        </div>
       </div>
       <input type="hidden" name="com_id" value="<?= $result['id'] ?>">
      </div><!-- /.box-body -->
      <div class="box-footer">
       <button type="submit" class="btn btn-primary" id="btnSubmit" name="update_committee">Save Changes</button>
      </div>
     </form>
    </div><!-- /.box -->
   </div>
  </div>
 </section><!-- End of form section -->