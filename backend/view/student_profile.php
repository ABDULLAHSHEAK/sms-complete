<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
	// redirect them to your desired location
	header('location:../index.php');
	exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<style>
	.form-control-feedback {

		pointer-events: auto;

	}

	.msk-set-width-tooltip+.tooltip>.tooltip-inner {

		min-width: 180px;
	}

	.msk-set-color-tooltip+.tooltip>.tooltip-inner {

		min-width: 180px;
		background-color: red;
	}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			My Profile
			<small>Preview</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">My Profile</a></li>
		</ol>
	</section>

	<?php
	include_once('../controller/config.php');

	if (isset($_GET['student'])) {
		$slug = $_GET['student'];

		$sql = "SELECT * FROM student1 s LEFT JOIN class_room c ON s.class_name = c.id WHERE slug = '$slug' ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		$create_at = date('d-m-Y', strtotime($row['created_at']));
	}
	?>

	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="panel"><!--panel bg-maroon-->
					<div class="panel-heading bg-aqua-active">
						<h4 class="panel-title" id="hname"><?php echo $row['full_name'] ?></h4>
					</div>
					<div class="panel-body"><!--panel-body -->
						<div class="row" id="my_profile">
							<div class="col-md-3">
								<img id="photo2" alt="User Pic" src="student/<?php echo $row['img'] ?>" class="img-circle img-responsive">
							</div>
							<div class=" col-md-9">
								<table class="table table-bordered table-striped table-responsiv">
									<tbody>
										<tr>
											<td class="col-md-4">Full Name</td>
											<td> <?php echo $row['full_name'] ?> </td>
										</tr>
										<tr>
											<td>Father`s Name</td>
											<td><?php echo $row['fa_name'] ?> </td>
										</tr>
										<tr>
											<td>Mother`s Name</td>
											<td><?php echo $row['ma_name'] ?> </td>
										</tr>
										<tr>
											<td>Student Phone</td>
											<td><?php echo $row['student_phone'] ?> </td>
										</tr>
										<tr>
											<td>Guardian Phone</td>
											<td><?php echo $row['student_fa_phone'] ?> </td>
										</tr>
										<tr>
											<td>Student Email</td>
											<td><?php echo $row['email'] ?> </td>
										</tr>
										<tr>
											<td>Address</td>
											<td><?php echo $row['student_address'] ?> </td>
										</tr>
										<tr>
											<td>Date Of Birth</td>
											<td><?php echo $row['birth_date'] ?> </td>
										</tr>
										<tr>
											<td>Gender</td>
											<td><?php echo $row['gender'] ?> </td>
										</tr>
										<tr>
											<td>Roll Number</td>
											<td><?php echo $row['roll'] ?> </td>
										</tr>
										<tr>
											<td>Reg Number</td>
											<td><?php echo $row['reg'] ?> </td>
										</tr>
										<tr>
											<td>Class</td>
											<td><?php echo $row['name'] ?> </td>
										</tr>
										<tr>
											<td>Data Insert Date</td>
											<td><?php echo $create_at ?> </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel-footer text-right" id="panel_footer">
						<a href="all_student.php" class="btn btn-sm btn-warning">Back</a>
						<span class="pull-right"></span>
					</div>
				</div><!--/. panel-->
			</div>
		</div><!--/.row -->
	</section><!-- /.section -->

</div><!-- /.content-wrapper -->

<?php include_once('footer.php'); ?>