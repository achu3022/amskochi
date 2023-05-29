<?php
include('../admin/config/database.php');
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$course=$_POST["course"];
$pin=$_POST["pin"];
$address=$_POST["address"];

$sql="INSERT INTO enquiry (slno,name,phone,address,pin,email,course) VALUES ('','$fname','$phone','$address','$pin','$email','$course')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    //header("location:../index.html");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

?>