<?php include('../controller/config.php'); ?>
<?php
// session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}

if (isset($_POST['edit_notice'])) {
 $id = $_POST['edit_id'];

 $query = "SELECT * FROM `notice` WHERE id = '$id'";
 $run = mysqli_query($conn, $query);
 $result = mysqli_fetch_assoc($run);
 $title = $result['title'];
 $file_name = $result['file'];
}

// -------------- update notice --------------- 

if (isset($_POST['update_notice'])) {
 $id = $_POST['edit_id'];
 $edit_title = $_POST['edit_title'];
 $edit_file = $_FILES['pdf']['name'];
 $edit_temp = $_FILES['pdf']['tmp_name'];
 
}


?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>


<!-- ----------- breadcrumb -------------------   -->
<!-- ----------- breadcrumb -------------------   -->
<div class="content-wrapper">
     <section class="content-header">
    	<h1>
        	Edit Notices
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">edit notice</a></li>
        </ol>
	</section>
<!-- ----------- breadcrumb -------------------   -->
<!-- ----------- breadcrumb -------------------   -->

	<section class="content"> 
    	<div class="row">
        	<div class="col-md-10">
            	<div class="panel"><!--panel bg-maroon--> 
                	<div class="panel-heading bg-aqua-active">	
																		
                    	<div class="row">
                            <div class="col-lg-10">
                                <h3 class="text-white">Notice Edit</h3>
																																
                            </div>
                            <div class="col-lg-2">
                                <h3>
                                    <a href="notices.php" class="btn btn-success">Back
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>				
                    <div class="panel-body"><!--panel-body -->
                  

                           	<div class="box box-primary">
                	<!-- //MSK-00097 form start -->
                	<form role="form" action="" method="post" enctype="multipart/form-data">             
																				<div class="box-body">
                		   	<div class="form-group" id="divName">
																							<!-- <h4><?php echo  $post_publis_alert ?></h4> -->
                         <label for="title">Title*</label>
                           <input type="text" class="form-control" id="title" placeholder="Notice Title" name="edi_title" autocomplete="off" required value="<?= $title?>">                    
                    		</div>

                    		<div class="form-group" id="divStudentCount">
                      			<label for="">Notice* (PDF File Only)</label>
                          <input type="file" class="form-control" id="title" name="pdf" autocomplete="off" accept="pdf" required></input>
																																<!-- <h4 style="color: red;"><?php echo $file_error;?></h4> -->
                    		</div>

                    		<div class="form-group" id="divStudentCount">
                      			<label for="">File Name:</label>
                                <?=$file_name?> 
                    		</div>
                      <input type="text" name="edit_id" value="<?=$id?>">
                		</div><!-- /.box-body -->
                		<div class="box-footer">
                    		<button type="submit" class="btn btn-primary" id="btnSubmit" name="update_notice">Submit</button>
                 		</div>
                	</form>
              	</div><!-- /.box -->

                     </div>
            	</div><!--/. panel--> 
        	</div>
		</div><!--/.row --> 
	</section><!-- /.section -->
	
</div>

<?php include_once('footer.php');?>