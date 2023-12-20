<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
 <h6 class="heading">View-Notice</h6>
 <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">View-Notice</a></li>
 </ul>
</div>
<!-- ################################################################################################ -->
</div>

<!-- ###------- Dynamic notice section ----------- ### -->
<?php include_once('components/dynamic-notice.php') ?>
<!-- ###------- Dynamic notice section ----------- ### -->

<?php
include_once('backend/controller/config.php');
if (isset($_GET['notice'])) {
 $slug = $_GET['notice'];

 $sql = "SELECT * FROM notice WHERE slug = '$slug' ";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
 $create_at = date('d-m-Y', strtotime($row['created_at']));
}
?>
<!-- ----------- Main section Start ----------  -->

<div class="container">
 <div class="row">
  <div class="col-lg-9 main">
   <div class="card shadow">
    <div class="card-header bg-primary text-white">
     <h2>নোটিশ</h2>
    </div>
    <div class="card-body">
     <h4 class="p-3"><strong> <u>নোটিশ টাইটেল:-</u> </strong><?= $row['title'] ?><span>( <?= $create_at ?> ) </span></h4>
     <embed src="backend/view/notices/<?= $row['file'] ?>" width="800px" height="1000px" />
    </div>
   </div>
  </div>

  <!-- ----------- sidebar section start ----------  -->
  <?php include_once('components/sidebar.php') ?>
  <!-- ----------- sidebar section start  ----------  -->
 </div>
</div>


<?php include_once("footer.php"); ?>