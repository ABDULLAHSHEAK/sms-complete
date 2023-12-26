<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
	// redirect them to your desired location
	header('location:../index.php');
	exit;
}
?>
<?php include('../model/delete_student.php'); ?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<style>
	body {
		overflow-y: scroll;
	}

	.msk-scroll {
		overflow-y: scroll;
	}

	.form-control-feedback {
		pointer-events: auto;
	}

	.set-width-tooltip+.tooltip>.tooltip-inner {
		min-width: 180px;
	}

	.modal-content1 {
		position: absolute;
		left: 25%;
	}

	@media only screen and (max-width: 500px) {

		.modal-content1 {

			width: 100%;
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
		from {
			top: -300px;
			opacity: 0
		}

		to {
			top: 0;
			opacity: 1
		}
	}

	@keyframes animatetop {
		from {
			top: -300px;
			opacity: 0
		}

		to {
			top: 0;
			opacity: 1
		}
	}
</style>

<div class="content-wrapper">

	<section class="content-header">
		<h1>
			All Teachers
			<small>Preview</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">All Student</a></li>
		</ol>
	</section>

	<!-- ---------------------------------------------------------
                Table Section Start 
    --------------------------------------------------------- -->
	<section class="content"> <!-- Start of table section -->
		<div class="row" id="table1"><!--MSK-000132-1-->
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<div class="row">
							<div class="col-lg-10">
								<h4><?php echo $student_delete ?></h4>
								<h3 class="text-white">All Student Info</h3>

							</div>
							<div class="col-lg-2">
								<h3>
									<a href="student.php" class="btn btn-success btn-sm">Add Student
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
								<th>Student Name</th>
								<th>Father`s Name</th>
								<th>Student Number</th>
								<th>Roll Number</th>
								<th>Reg Number</th>
								<th>Student Class</th>
								<th>Student Photo</th>
								<th>Created At</th>
								<th>Action</th>
							</thead>
							<tbody>
								<?php

								include_once('../controller/config.php');
								$sql = "SELECT * FROM student1 s LEFT JOIN class_room c ON s.class_name = c.id ORDER BY s.created_at DESC ";
								$result = mysqli_query($conn, $sql);
								$count = 0;
								$cant_remove = 0;
								$cant_remove1 = 0;
								if (mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										$count++;
										$id = $row['id'];
										$name = $row['full_name'];
										$student_slug = $row['slug'];
										$create_at = date('d-m-Y', strtotime($row['created_at']));
								?>
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $row['full_name']; ?></td>
											<td><?php echo $row['fa_name']; ?></td>
											<td><?php echo $row['student_phone']; ?></td>
											<td><?php echo $row['roll']; ?></td>
											<td><?php echo $row['reg']; ?></td>
											<td><?php echo $row['name']; ?></td>
											<td><img src="student/<?php echo $row['img']; ?>" alt="Teacher Photo" width="50"></td>
											<td><?php echo $create_at ?></td>
											<td>
												<div style="display: flex;">

													<div style="margin-right: 5px;">
														<a href="edit_student.php?editStudent=<?= $id ?>" class="btn btn-info btn-xs">Edit</a>
													</div>
													<!-- ------ delete button --------  -->
													<div style="margin-right: 5px;">
														<form action="" class="mt-2" method="POST" onsubmit="return confirm('Are you sure want to delete ?')" enctype="multipart/form-data">
															<input type="hidden" name="id" value="<?= $student_slug ?> ">
															<input type="hidden" name="img" value="<?= $row['img'] ?> ">
															<button type="submit" name="delete" value="Delete" class="confirm-delete btn btn-danger btn-xs">Delete</button>
														</form>
													</div>
													<!-- ------ view button --------  -->
													<div style="margin-right: 5px;">
														<form action="">
															<a href="student_profile.php?student=<?= $student_slug ?>" class="btn btn-warning btn-xs">View</a>
														</form>
													</div>

												</div>
											</td>
										</tr>
								<?php }
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- End of table section -->

	

</div><!-- /.content-wrapper -->
<?php include_once('footer.php'); ?>