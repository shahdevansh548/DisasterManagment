<?php

// Connect to the database
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "hack";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Make sure we connected successfully
if(! $conn)
{
    die('Connection Failed'.mysql_error());
}
 // Selecting Database from Server
if(isset($_POST['Submit'])) {
$name = $_POST['NGOName'];
$pass = $_POST['NGOPassword'];
$email = $_POST['NGOEmail'];
$contact = $_POST['NGOContact'];
$address = $_POST['NGOLocation'];
$volNumber = $_POST['VolunterNo'];

$sql="INSERT INTO `ngo`(`email`, `name`, `contact`, `password`, `volunter_no`) VALUES (\"".$email."\",\"".$name."\",\"".$contact."\",\"".$pass."\",\"".$volNumber."\")";
if ($conn->query($sql)==TRUE)
{
//Insert Query of SQL
?>
<script>
    	alert('Successfully Signed Up!');
    </script>
<?php
header("Location:VolunterLoginForm.php");
}
else {
	?>
    <script>
    	alert('Incorrect Details!');
    	window.location = "NGOSignupForm1.php";
    </script>
<?php
header("Location: localhost:4000/hackstomp/Login_v1/vlogin.html");
}
}
$conn->close();
?>



