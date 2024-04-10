<?php
	$name = $_POST['name'];
	$fathersname = $_POST['fathersname'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$numbers = $_POST['numbers'];
	$pincode = $_POST['pincode'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $patientpre = $_POST['patientpre'];
  $allergy = $_POST['allergy'];


	// Database connection
	$conn = new mysqli('localhost','root','','hospital');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into 'hospital'.'hospital database management' ('name','fathersname','city','state','numbers','pincode','age','gender','email','patientpre','allergy') values('$name', '$fathersname', '$city', '$state', '$numbers', '$pincode', '$age','$gender', '$email', '$patientpre', '$allergy')");
		// $stmt->bind_param("ssssiiissss", $name, $fathersname, $city, $state, $numbers, $pincode, $age, $gender, $email, $patientpre, $allergy);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
