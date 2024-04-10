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

  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$comment = $_POST['comment'];

  $sql_query = "INSERT INTO hospitalcontact (fullname,email,phonenumber,comment) VALUES('$fullname','$email','$phonenumber','$comment')";
    if(mysqli_query($conn,$sql_query)){
      echo "<script>alert('MESSAGE HAS BEEN SENT SUCCESSFULLY!');</script>";

    }
    else{
      echo "error: " . $sql . "" . mysqli_error($conn);

    }
    mysqli_close($conn);
}




 ?>
