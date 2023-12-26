<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
  // redirect them to your desired location
  header('location:../index.php');
  exit;
}
$current_year = date('Y');
$current_month = date('F');
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<style>
  td {
    width: 70px;
    height: 70px;
    text-align: center;
    position: relative;
    border: 2px solid #fff;
  }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Dashboard</a></li>
    </ol>
  </section>

  <?php
  include_once('../controller/config.php');

  $my_index = $_SESSION["index_number"];

  $sql = "SELECT * FROM admin WHERE index_number='$my_index'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $name = $row['i_name'];

  ?>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Student</span>
            <?php
            include_once('../controller/config.php');

            // $sql1="SELECT count(id) FROM student WHERE _status=''";
            $total_count1 = 0;


            ?>
            <span class="info-box-number">55</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Teacher</span>
            <?php
            include_once('../controller/config.php');

            $sql2 = "SELECT count(id) FROM teacher";
            $total_count2 = 0;

            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            $total_count2 = $row2['count(id)'];

            ?>
            <span class="info-box-number"><?php echo "22" ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Monthly Income</span>
            <span class="info-box-number"><small>$</small><?php echo '44' ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Income</span>

            <span class="info-box-number"><small>$</small><?php echo '55' ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <h5><?php echo $name; ?>,<strong><span style="color:#cf4ed4;"> Welcome back! </span></strong></h5>

    <h1>Calender : <?= $current_month . ' - ' ?> <?= $current_year ?></h1>
    <div class="container mt-5">
      <div class="row mx-auto">
        <div class="col-md-2"></div>
        <div class="col-md-7">
          <div class="table_content">
            <table class="calendar" id="calendar">
              <thead>
                <tr id="dayNamesRow"></tr>
              </thead>
              <tbody id="calendarBody"></tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>

</div><!-- /.content-wrapper -->

<?php include_once('footer.php'); ?>