<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
 <h6 class="heading">Video Gellery</h6>
 <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Video Gellery </a></li>
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
     <h2>ভিডিও গ্যালারি </h2>
    </div>
    <div class="card-body">
     <div class="img">
      <div class="row">
       <!-- <div class="col-md-12"> -->
       <?php
       include_once('backend/controller/config.php');
       $query = "SELECT * FROM video_gellery ORDER BY created_at DESC";
       $run = mysqli_query($conn, $query);
       if ($run) {
        while ($result = mysqli_fetch_assoc($run)) {
         $video_id = $result["id"];
         $name = $result["video_url"];
       ?>
         <div class="col-md-3 col-sm-4 col-6">
          <div class="photo">
           <!-- <img class="gellery" src="photo_gellery/<?= $name ?>" alt="gellery_img"> -->
           <iframe src="<?= $name ?>" class="gellery" frameborder="0" style="max-width: 400px;width:100%"></iframe>
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