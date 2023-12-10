<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include('../model/delete_syllabus.php'); ?>
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
        	Syllabus 
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Syllabus</a></li>
        </ol>
	</section>

    <!-- ---------------------------------------------------------
                Table Section Start 
    --------------------------------------------------------- -->
        <section class="content" > <!-- Start of table section -->
    	<div class="row" id="table1"><!--MSK-000132-1-->
        	<div class="col-md-10">
            	<div class="box">
                	<div class="box-header">
                  	 	<div class="row">
                            <div class="col-lg-10">
                                <h4><?php echo $syllabus_delete ?></h4>
                                <h3 class="text-white">All Syllabus</h3>																								
                            </div>
                            <div class="col-lg-2">
                                <h3>
                                    <a href="syllabus.php" class="btn btn-success btn-sm">Add Syllabus 
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                	</div><!-- /.box-header -->
                	<div class="box-body table-responsive" style="overflow-x:auto;">
                    	<!--MSK-00101-->
                		<table id="example1" class="table table-bordered table-striped">
                    		<thead>
                        		<th>SL</th>
                            	<th>Syllabus Title</th>
                            	<th>Class</th>
                            	<th>Created At</th>
                            	<th>Action</th>
                        	</thead>
                        	<tbody>
<?php

include_once('../controller/config.php');
$sql="SELECT s.id ,s.file,s.syllabus_title , s.date , c.name FROM syllabus s LEFT JOIN class_room c ON s.class = c.id ORDER BY date DESC";
$result=mysqli_query($conn,$sql);
$count = 0;
$cant_remove=0;
$cant_remove1=0;
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){	
	$count++;
	$id=$row['id'];
    $create_at = date('d-m-Y',strtotime($row['date']));
?>   
            <tr>
               <td><?php echo $count; ?></td>
               <td><?php echo $row['syllabus_title']; ?></td>
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $create_at ?></td>
               <td>  
           <div style="display: flex;">

           <div style="margin-right: 5px;">
             <form action="">
             <a href="edit_notic.php?editId = <?= $id ?>" class="btn btn-info btn-xs">Edit</a>
             </form>
           </div>

            <div style="margin-right: 5px;">
            <!-- ----------- delete button -----------  -->
             <form action="" class="mt-2" method="POST" onsubmit="return confirm('Are you sure want to delete ?')" enctype="multipart/form-data">
                <input type="hidden" name="delete_id" value="<?=  $row['id'] ?> ">
                <input type="hidden" name="delete_file" value="<?=  $row['file'] ?> ">
                <button type="submit" name="delete_syllabus" value="Delete" class="confirm-delete btn btn-danger btn-xs">Delete</button>
             </form>
            </div>

             <div style="margin-right: 5px;">
                <form action="">
                    <a href="#" class="btn btn-warning btn-xs">View</a>
                </form>
             </div>

           </div>
                               		</td>                                
                            	</tr>
<?php } } ?>
                        	</tbody>
                    	</table>	                
               		</div>
              	</div>
            </div>
		</div>
	</section> <!-- End of table section -->
    
	<!-- //MSK-00103 Modal-Update form -->  
	<div class="modal msk-fade" id="modalUpdateform" tabindex="-1" role="dialog" aria-labelledby="modalUpdateform" aria-hidden="true">  
  		<div class="modal-dialog">
    		<div class="container">
            	<div class="row ">	
           			<div class="col-md-6">
                		<div class="panel">
        					<div class="panel-heading bg-orange">               
        						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          						<h4 class="modal-title custom_align" id="Heading">Edit Notice</h4>
   							</div>
                            <div class="panel-body"> <!-- Start of modal body--> 
                                <div class="form-group" id="divNameUpdate">
                                    <label for="">Name</label>
                                    <input class="form-control" type="title" id="name1" name="name" autocomplete="off">
                                </div> 
                                <div class="form-group" id="divSCountUpdate">
                                    <label for="">Student Count</label>
                                    <input class="form-control " type="text" id="student_count1" name="student_count" autocomplete="off">
                                </div>
                            </div><!--/.modal body-->
                            <div class="panel-footer bg-gray-light">
                                <input type="hidden" name="id" id="id" value="">
                                <button type="button" onClick="Updateclassroom(this)" id="btnSubmit1" class="btn btn-info" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                            </div><!--/.panel-footer-->  
            			</div><!--/.panel--> 
            		</div><!--/.col-md-6-->
            	</div><!--/.row-->                                    
        	</div><!-- /.modal-content -->  		 
  		</div><!-- /.modal-dialog -->        
	</div><!--/.Modal-Update form --> 
    

<
  	 
</div><!-- /.content-wrapper -->  
</div>