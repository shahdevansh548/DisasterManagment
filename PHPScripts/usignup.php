<?php

// Connect to the database
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "hackstomp";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Make sure we connected successfully
if(! $conn)
{
    die('Connection Failed'.mysql_error());
}
 // Selecting Database from Server

$pass=$_POST['pass'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$sql = "INSERT INTO user ( password, email, phone_number, address)
		VALUES ('$pass', '$email', '$contact', '$address')";

if ($conn->query($sql)==TRUE)
{
//Insert Query of SQL
?>
<script>
    	alert('Successfully Signed Up!');
    </script>
<?php
header("Location: 	Login_v1/login.html");
}
else {
	?>
    <script>
    	alert('Incorrect Details!');
    	window.location = "signupuser.html";
    </script>
<?php
//header("Location: localhost:4000/hackstomp/Login_v1/vlogin.html");
}
$conn->close();
?>


=