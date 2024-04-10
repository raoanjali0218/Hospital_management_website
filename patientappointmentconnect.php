<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "hospitalmanagement";

$conn = mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn){
  die("connection failed:" . mysqli_connect_error());
}
if(isset($_POST['save'])){

  $patientid = $_POST['patientid'];
	$name = $_POST['name'];
	$disease = $_POST['disease'];
	$doctor = $_POST['doctor'];
	$slot = $_POST['slot'];

  $sql_query = "INSERT INTO patientappointment (patientid,name,disease,doctor,slot) VALUES('$patientid','$name','$disease','$doctor','$slot')";
    if(mysqli_query($conn,$sql_query)){
      echo "<script>alert('APPOINTMENT SCHEDULED SUCCESSFULLY!');</script>";

    }
    else{
      echo "error: " . $sql . "" . mysqli_error($conn);

    }
    mysqli_close($conn);
}




 ?>
