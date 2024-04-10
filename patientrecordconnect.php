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
  $medicationallergies = $_POST['medicationallergies'];
  $familyhistory = $_POST['familyhistory'];
  $medicalhistory = $_POST['medicalhistory'];
  $physicalexam = $_POST['physicalexam'];
  $allergies = $_POST['allergies'];
  $lastappointmenthistory = $_POST['lastappointmenthistory'];
  $sql_query = "INSERT INTO patientrecordtable (name,medicationallergies,familyhistory,medicalhistory,physicalexam,allergies,
  lastappointmenthistory) VALUES('$name','$medicationallergies','$familyhistory','$medicalhistory','$physicalexam','$allergies',
    '$lastappointmenthistory')";
    if(mysqli_query($conn,$sql_query)){
      echo "<script>alert(' PATIENT RECORD REGISTERED SUCCESSFULLY!');</script>";

    }
    else{
      echo "error: " . $sql . "" . mysqli_error($conn);

    }
    mysqli_close($conn);
  }




  ?>
