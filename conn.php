<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "authentication";

$name = $_POST['name'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$mob = $_POST['mob'];
$aadhaar = $_POST['aadhaar'];
$email = $_POST['email'];
$userid = $_POST['userid'];
$psw = $_POST['psw'];
$psw1 = $_POST['psw1'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
	echo"Connected to database";
}




$sql = "INSERT INTO user(name,address,dob,mob,aadhaar,email,userid,psw,psw1) VALUES ('$name','$address','$dob','$mob','$aadhaar','$email','$userid','$psw','$psw1')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$_SESSION['message'] ="You are now loged in";


header("Location: home.php");
?>
