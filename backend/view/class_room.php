<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
	// redirect them to your desired location
	header('location:../index.php');
	exit;
}
?>
<?php include('delete_notice.php'); ?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>
<?php
if (isset($_POST['delete_class'])) {
	$class_id = $_POST['delete_id'];
	$sql = "DELETE FROM class_room WHERE id = '$class_id'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Class Room Deleted Successfully');</script>";
		echo "<script>window.location.href='class_room.php';</script>";
	}
}
?>
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Class Room
			<small>Preview</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Class Room</a></li>
		</ol>
	</section>

	<!-- ---------------------------------------------------------
                Table Section Start 
    --------------------------------------------------------- -->
	<section class="content"> <!-- Start of table section -->
		<div class="row" id="table1"><!--MSK-000132-1-->
			<div class="col-md-10">
				<div class="box">
					<div class="box-header">
						<div class="row">
							<div class="col-lg-10">
								<h4><?php echo $notic_delete ?></h4>
								<h3 class="text-white">All Classes</h3>

							</div>
							<div class="col-lg-2">
								<h3>
									<a href="add_class.php" class="btn btn-success btn-sm">Add Class
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
								<th>Class Name</th>
								<th>Student Count</th>
								<th>Created At</th>
								<th>Action</th>
							</thead>
							<tbody>
								<?php

								include_once('../controller/config.php');
								$sql = "SELECT * FROM class_room ORDER BY created_at DESC ";
								$result = mysqli_query($conn, $sql);
								$count = 0;
								if (mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										$count++;
										$id = $row['id'];
										$create_at = date('d-m-Y', strtotime($row['created_at']));
								?>
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $row['name']; ?></td>
											<td><?php echo $row['student_count']; ?></td>
											<td><?php echo $create_at ?></td>
											<td>
												<div style="display: flex;">

													<div style="margin-right: 5px;">
														<form action="../model/update_class.php" method="POST">
															<input type="hidden" name="edit_id" value="<?= $row['id'] ?> ">
															<button type="submit" name="edit_class" value="Edit" class="confirm-delete btn btn-info btn-xs">Edit</button>
														</form>
													</div>

													<div style="margin-right: 5px;">
														<form action="" class="mt-2" method="POST" onsubmit="return confirm('Are you sure want to delete ?')" enctype="multipart/form-data">
															<input type="hidden" name="delete_id" value="<?= $row['id'] ?> ">
															<button type="submit" name="delete_class" value="Delete" class="confirm-delete btn btn-danger btn-xs">Delete</button>
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