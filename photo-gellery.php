<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
 <h6 class="heading">Photo Gellery</h6>
 <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Photo Gellery </a></li>
 </ul>
</div>
<!-- ################################################################################################ -->
</div>

<!-- ###------- Dynamic notice section ----------- ### -->
<?php include_once('components/dynamic-notice.php') ?>
<!-- ###------- Dynamic notice section ----------- ### -->

<!-- ----------- Main section Start ----------  -->
<div class="container">
 <div class="row">
  <div class="col-lg-9 main">
   <div class="card shadow">
    <div class="card-header bg-primary text-white">
     <h2>ফটো গ্যালারি </h2>
    </div>
    <div class="card-body">
     <div class="img">
      <div class="row">
       <!-- <div class="col-md-12"> -->
       <?php
       include_once('backend/controller/config.php');
       $query = "SELECT * FROM photo_gellery ORDER BY created_at DESC";
       $run = mysqli_query($conn, $query);
       if ($run) {
        while ($result = mysqli_fetch_assoc($run)) {
         $photo_id = $result["id"];
         $name = $result["img_title"];
       ?>
         <div class="col-md-2 col-sm-4 col-6">
          <div class="photo">
           <a href="backend/view/photo_gellery/<?= $name ?>">
            <img class="gellery" src="backend/view/photo_gellery/<?= $name ?>" alt="gellery_img">
           </a>
          </div>
         </div>
       <?php }
       } else {
        echo "No Image Found";
       } ?>
       <!-- </div> -->
      </div>
     </div>

    </div>
   </div>
  </div>

  <!-- ----------- sidebar section start ----------  -->
  <?php include_once('components/sidebar.php') ?>
  <!-- ----------- sidebar section start  ----------  -->
 </div>
</div>


<?php include_once("footer.php"); ?>