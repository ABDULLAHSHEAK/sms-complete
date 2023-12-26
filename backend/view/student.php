<?php
include_once("../model/add_student.php");
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
	.msk-col-md-4 {
		width: 28%;
	}

	.modal {
		overflow-y: auto;
	}

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

	.msk-image-error {
		border: 1px solid #f44336;

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

	@media only screen and (max-width: 500px) {

		#divGender1,
		#divPhone1,
		#divEmail1 {

			width: 75%;

		}

	}
</style>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Student
			<small>Preview</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Student</a></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row" id="test123">
			<!-- left column -->
			<div class="col-md-7">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h4 style="color:red;font-weight:bold"><?= $student_alert ?></h4>
						<div class="row">
							<div class="col-lg-10">
								<h3 class="text-white">Add Student</h3>

							</div>
							<div class="col-lg-2">
								<h3>
									<a href="all_student.php" class="btn btn-success btn-sm">View
									</a>
								</h3>
							</div>
						</div>
					</div><!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="" method="POST" enctype="multipart/form-data" id="form1" class="form-horizontal">
						<div class="box-body">
							<!-- -------- Full Name -------------  -->
							<div class="form-group" id="divFullName"> <!-- full name -->
								<div class="col-xs-3">
									<label>Full Name*</label>
								</div>
								<div class="col-xs-9">
									<input type="text" class="form-control" placeholder="Enter full name" name="full_name" id="full_name" autocomplete="off" required>
								</div>
							</div>
							<!-- -------- fathers Name -------------  -->
							<div class="form-group" id="divFullName"> <!-- full name -->
								<div class="col-xs-3">
									<label>Father Name*</label>
								</div>
								<div class="col-xs-9">
									<input type="text" class="form-control" placeholder="Enter student father name" name="fa_name" id="full_name" autocomplete="off" required>
								</div>
							</div>
							<!-- -------- Motehrs Name -------------  -->
							<div class="form-group" id="divFullName"> <!-- full name -->
								<div class="col-xs-3">
									<label>Mother Name*</label>
								</div>
								<div class="col-xs-9">
									<input type="text" class="form-control" placeholder="Enter student mother name" name="ma_name" id="full_name" autocomplete="off" required>
								</div>
							</div>
							<!-- -------- Mobile Number -------------  -->
							<div class="form-group" id="divFullName"> <!-- full name -->
								<div class="col-xs-3">
									<label>Student Phone Number</label>
								</div>
								<div class="col-xs-9">
									<input type="text" class="form-control" placeholder="Enter student phone number" name="student_phone" id="full_name" autocomplete="off">
								</div>
							</div>
							<!-- -------- student father Mobile Number -------------  -->
							<div class="form-group" id="divFullName"> <!-- full name -->
								<div class="col-xs-3">
									<label>Student Father Phone Number*</label>
								</div>
								<div class="col-xs-9">
									<input type="text" class="form-control" placeholder="Enter student father phone number" name="student_fa_phone" id="full_name" autocomplete="off" required>
								</div>
							</div>
							<!-- -------- email -------------  -->
							<div class="form-group tt2 " id="divEmail">
								<div class="col-xs-3">
									<label>Student Email</label>
								</div>
								<div class="col-xs-6" id="divEmail1">
									<input type="text" class="form-control" placeholder="Enter valid email address" name="email" autocomplete="off">
								</div>
							</div>
							<!-- ----------------------- address -----------  -->
							<div class="form-group" id="divIName">
								<div class="col-xs-3">
									<label>Student Address*</label>
								</div>
								<div class="col-xs-9">
									<input type="text" class="form-control" placeholder="Student Address" name="student_address" autocomplete="off" required>
								</div>
							</div>
							<!-- -------- birth day -------------  -->
							<div class="form-group tt2 " id="divEmail">
								<div class="col-xs-3">
									<label>Birth Date*</label>
								</div>
								<div class="col-xs-6" id="divEmail1">
									<input type="date" class="form-control" placeholder="Enter valid email address" name="birth_date" id="email" autocomplete="off" required>
								</div>
							</div>

							<!-- -------- gender -------------  -->
							<div class="form-group" id="divGender">
								<div class="col-xs-3">
									<label>Gender*</label>
								</div>
								<div class="col-xs-4" id="divGender1">
									<select name="gender" class="form-control" id="gender" required>
										<option>Select Gender</option>
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
							</div>
							<!-- -------- Roll -------------  -->
							<div class="form-group" id="divPhone">
								<div class="col-xs-3">
									<label>Roll </label>
								</div>
								<div class="col-xs-4" id="divPhone1">
									<input type="tel" class="form-control" placeholder="Student Roll" name="roll" id="phone" autocomplete="off">
								</div>
							</div>
							<!-- -------- reg -------------  -->
							<div class="form-group" id="divPhone">
								<div class="col-xs-3">
									<label>Registration Number </label>
								</div>
								<div class="col-xs-4" id="divPhone1">
									<input type="tel" class="form-control" placeholder="Student Reg" name="reg" id="phone" autocomplete="off">
								</div>
							</div>
							<!-- -------- Class -------------  -->
							<div class="form-group" id="divPhone">
								<div class="col-xs-3">
									<label for="title">Select Class*</label>
								</div>
								<div class="col-xs-4" id="divPhone1">
									<select name="class_name" id="" class="form-control">
										<option value="">Select Class</option>
										<?php
										$classquery = "SELECT * FROM class_room";
										$classRun = mysqli_query($conn, $classquery);
										while ($classResult = mysqli_fetch_assoc($classRun)) {
										?>
											<option value="<?= $classResult['id'] ?>"><?= $classResult['name'] ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<!-- -------- photo -------------  -->
							<div class="form-group" id="divPhoto">
								<div class="col-xs-3">
									<label>Photo*(jpg,png,jpeg file Only)</label>
								</div>
								<div class="col-xs-3" id="divPhoto1" style="height:150px;">
									<img id="output" style="width:130px;height:150px;" />
									<h4><?= $file_error ?></h4>
									<input required type="file" name="img" id="fileToUpload" style="margin-top:7px;" />
								</div>
							</div>
						</div><!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" class="btn btn-primary" id="btnSubmit" name="submit">Submit</button>
						</div>
					</form>
				</div><!-- /.box -->
			</div>
		</div>
	</section><!-- End of form section -->
</div>
<?php include_once('footer.php'); ?>