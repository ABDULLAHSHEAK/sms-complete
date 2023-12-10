<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
 <h6 class="heading">View Result</h6>
 <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">View Result</a></li>
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
     <h2>পরিক্ষার ফলাফল</h2>
    </div>
    <div class="card-body">
     <h4><strong> <u>ফলাফল টাইটেল:-</u> </strong>নবম শ্রেনীর বার্ষিক পরিক্ষার ফলাফল <span>( ২০/১/২০২৪ ) </span></h4>
     <embed src="pdf/result.pdf" width="800px" height="1000px" />
    </div>
   </div>
  </div>

  <!-- ----------- sidebar section start ----------  -->
  <?php include_once('components/sidebar.php') ?>
  <!-- ----------- sidebar section start  ----------  -->
 </div>
</div>


<?php include_once("footer.php"); ?>