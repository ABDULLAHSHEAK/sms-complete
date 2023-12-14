<?php include('../controller/config.php'); ?>

<?php

$student_alert = "";
$file_error = '';
if (isset($_POST['submit'])) {

	$full_name = $_POST["full_name"];
	$father_name = $_POST["fa_name"];
	$mother_name = $_POST["ma_name"];
	$student_phone = $_POST["student_phone"];
	$student_fa_phone = $_POST["student_fa_phone"];
	$email = $_POST["email"];
	$student_address = $_POST["student_address"];
	$birth_date = $_POST["birth_date"];
	$gender = $_POST["gender"];
	$roll = $_POST["roll"];
	$reg = $_POST["reg"];
	$class_name = $_POST["class_name"];
	$slug = str_replace(" ", "-", $_POST["full_name"]);
	$get_img_name = $_FILES['img']['name'];
	$tempName = $_FILES['img']['tmp_name'];
	$fileNameParts = explode('.', $_FILES['img']['name']);
	$fileExt = end($fileNameParts);
	$extension = array('jpg', 'png', 'jpeg');

	if (in_array($fileExt, $extension)) {
		$current_time = date('Y-m-d-H-i-s');
		$filename = $current_time . '_' . $get_img_name;
		$upload = 'student/' . $filename;
		$query = "INSERT INTO student1 (full_name, fa_name, ma_name, student_phone, student_fa_phone, email, student_address, birth_date, gender, roll, reg, class_name, slug, img) VALUES ('$full_name', '$father_name', '$mother_name', '$student_phone', '$student_fa_phone', '$email', '$student_address', '$birth_date', '$gender', '$roll', '$reg', '$class_name', '$slug', '$filename')";
		$run = mysqli_query($conn, $query);

		if ($run) {
			move_uploaded_file($tempName, $upload);
			header('Location: student.php'); // Redirect should occur before any output
			$student_alert = "Student Added Succesfully";
		} else {
			echo "error";
		}
	} else {
		$file_error = "File must be a ('jpg','png','jpeg').";
	}
}
