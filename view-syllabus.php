<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
 <h6 class="heading">View Syllabus</h6>
 <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">View Syllabus</a></li>
 </ul>
</div>
<!-- ################################################################################################ -->
</div>

<!-- ###------- Dynamic notice section ----------- ### -->
<?php include_once('components/dynamic-notice.php') ?>
<!-- ###------- Dynamic notice section ----------- ### -->
<?php
include_once('backend/controller/config.php');
if (isset($_GET['syllabus'])) {
 $slug = $_GET['syllabus'];

 $sql = "SELECT * FROM syllabus s LEFT JOIN class_room c ON s.class = c.id WHERE slug = '$slug' ";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
 $create_at = date('d-m-Y', strtotime($row['date']));
}
?>
<!-- ----------- Main section Start ----------  -->

<div class="container">
 <div class="row">
  <div class="col-lg-9 main">
   <div class="card shadow">
    <div class="card-header bg-primary text-white">
     <h2>সিলেবাস</h2>
    </div>
    <div class="card-body">
     <h4 class="p-2"><strong> <u>সিলেবাস টাইটেল:-</u> </strong><?= $row['syllabus_title'] ?> <span>( <?=$create_at?> ) </span> <span>( <?= $row['name'] ?> ) </span></h4>
     <embed src="backend/view/syllabus/<?= $row['file'] ?>" width="800px" height="1000px" />
    </div>
   </div>
  </div>

  <!-- ----------- sidebar section start ----------  -->
  <?php include_once('components/sidebar.php') ?>
  <!-- ----------- sidebar section start  ----------  -->
 </div>
</div>


<?php include_once("footer.php"); ?>