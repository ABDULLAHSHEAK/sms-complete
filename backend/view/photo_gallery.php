<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include('../model/gellery.php'); ?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<style>

body { 
	overflow-y:scroll;
}
.msk-scroll{
	overflow-y:scroll;
}
.form-control-feedback {
   pointer-events: auto;
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
     min-width:180px;
}
.modal-content1 {
   position: absolute;
   left: 25%; 
}

@media only screen and (max-width: 500px) {
	
	.modal-content1 {
		
	 	width:100%;
	  	position: static;
		
	}

}

.msk-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s

}


/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

</style>

<div class="content-wrapper">
 
    <section class="content-header">
    	<h1>
        	Photo Gallery 
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Photo Gallery</a></li>
        </ol>
	</section>

    <!-- ---------------------------------------------------------
                Table Section Start 
    --------------------------------------------------------- -->
        <section class="content" > <!-- Start of table section -->
    	<div class="row" id="table1"><!--MSK-000132-1-->
        	<div class="col-md-12">
            	<div class="box">
               <div class="row mx-auto">
                 <div class="upload">
                  <div class="col-md-2"></div>
                  <form action="" method="POST" enctype="multipart/form-data">
                   <div class="col-md-6" style="padding: 30px;">
                      <input type="file" class="form-control" name="img">
                   </div>
                    <div class="col-md-2" style="padding: 30px;">
                       <button class="btn btn-primary" type="submit" name="Photo_upload">Upload</button>
                    </div>
                    <?=$photo_add?>
                  </form>
                    <div class="col-md-2"></div>
                 </div>
               </div>
              	</div>
                <div class="img">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $query = "SELECT * FROM photo_gellery ORDER BY created_at DESC";
                            $run = mysqli_query($conn, $query);
                          if($run){
                              while($result = mysqli_fetch_assoc($run)){
                                $photo_id = $result["id"];
                                $name = $result["img_title"];
                            ?>
                            <div class="col-md-2 col-sm-4 col-6">
                                <div class="photo">
                                    <img class="gellery" src="photo_gellery/<?= $name ?>" alt="gellery_img"> 
                                     <form action="" class="mt-2" method="POST" onsubmit="return confirm('Are you sure want to delete ?')" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $photo_id ?> ">
                                    <input type="hidden" name="img" value="<?=  $name ?> ">
                                    <center><button type="submit" name="delete_photo" value="Delete" class="confirm-delete dlt-btn">Delete</button></center>
                                </form>
                                 </div>
                            </div>
                            <?php }
                          }else{
                            echo "No Image Found";
                          } ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</section> <!-- End of table section -->
  	 
</div><!-- /.content-wrapper -->  
</div>