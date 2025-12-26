<?php

$host = "YOUR-RDS-ENDPOINT";
$user = "admin";
$pass = "YOUR_PASSWORD";
$db = "studentdb";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO students(name,email,phone) VALUES('$name','$email','$phone')";

if(mysqli_query($conn,$sql)){
    echo "Student Registered Successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
