<?php
session_start();
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="user_login")){

	$email=$_POST["email"];
	$pass=$_POST["password"]; 
	$password = sha1($pass);
	
	$sql="SELECT * FROM admin WHERE email='$email'";	
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	
	$email1=$row['email'];
	$password1=$row['password'];
	$type=$row['type'];
	
	$msg=0;
	
	if($email==$email1 && $password==$password1){
	
			$sql1="SELECT * FROM admin where email='$email'";	
			$result1=mysqli_query($conn,$sql1);
			$row1=mysqli_fetch_assoc($result1);
	
			$index_number=$row1['index_number'];
			$_SESSION["index_number"]=$index_number;
			$_SESSION["type"]="Admin";
			header("Location: view/dashboard.php");
	}else{
		$msg+=1;//Email or Password is incorrect
		header("Location: view/login.php?do=login_error&msg=$msg");
		
	}
	
	echo $_SESSION["index_number"];
	echo $_SESSION["type"];

//header("Location:view/attendents.php?do=alert_from_insert&msg=$msg&msg1=$monthly_fee&student_late=$student_late&teacher_late=$teacher_late&intime=$intime&outtime=$outtime&alert=$alert");//MSK-000143-5

}
?>

