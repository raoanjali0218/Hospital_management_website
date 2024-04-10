<?php

$server_name="localhost";
$username="root";
$password="";
$database_name="hospitalmanagement";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn){
  die("connection failed:" . mysqli_connect_error());
}
if(isset($_POST['save'])){

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
  $sql_query = "INSERT INTO hospitaltable (name,fathersname,city,state,numbers,pincode,
  age,gender,email,patientpre,allergy) VALUES('$name','$fathersname','$city','$state','$numbers','$pincode',
    '$age','$gender','$email','$patientpre','$allergy')";
    if(mysqli_query($conn,$sql_query)){
      // <script>alert("New Details Entered Successfully ");</script>
      echo "<script>alert('REGISTRATION SUCCESSFULLY!');</script>";


    }
    else{
      echo "error: " . $sql . "" . mysqli_error($conn);

    }
    mysqli_close($conn);
}




 ?>
