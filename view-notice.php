<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
 <h6 class="heading">Our Goal</h6>
 <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Our Goal</a></li>
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
     <h2>নোটিশ</h2>
    </div>
    <div class="card-body">
     <h4><strong> <u>নোটিশ টাইটেল:-</u> </strong>গ্রিষ্মকালিন ছুটির নোটিশ<span>( ১/২/২০২৪ ) </span></h4>
     <embed src="pdf/notice.pdf" width="800px" height="1000px" />
    </div>
   </div>
  </div>

  <!-- ----------- sidebar section start ----------  -->
  <?php include_once('components/sidebar.php') ?>
  <!-- ----------- sidebar section start  ----------  -->
 </div>
</div>


<?php include_once("footer.php"); ?>