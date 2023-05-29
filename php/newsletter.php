<?php
include('../admin/config/database.php');
$email=$_POST["email"];
$sql="INSERT INTO newsletter (slno,email) VALUES ('','$email')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:../index.html");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  