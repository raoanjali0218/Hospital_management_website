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
	$email = $_POST['email'];
	$numbers = $_POST['numbers'];
	$donation = $_POST['donation'];
  $sql_query = "INSERT INTO donationtable (name,email,numbers,donation) VALUES('$name','$email','$numbers','$donation')";
    if(mysqli_query($conn,$sql_query)){
      echo "<script>alert('DONATED SUCCESSFULLY!');</script>";


          }
          else{
            echo "error: " . $sql . "" . mysqli_error($conn);

          }
          mysqli_close($conn);
      }




       ?>
