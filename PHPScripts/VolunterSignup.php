<?php
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
}// Selecting Database from Server
$pass=$_POST['VolunterPassword'];
$phone = $_POST['VolunterPhone'];
$email = $_POST['VolunterEmail'];
$addr = $_POST['VolunterAddress'];
$position = $_POST['VolunterPosition'];

//Insert Query of SQL

$sql = "insert into volunteer( password, email, phone_number, address, position ) values ('$pass','$email','$phone','$addr','$position')";

if ($conn->query($sql) == TRUE)
{
//Insert Query of SQL
	?>
	<script>
    	alert('Successfully Signed Up!');
    </script>
<?php
//header("Location: 	Login_v1/vlogin.html");
}
else {
	?>
    <script>
    	alert('Incorrect Details!');
    	//window.location = "Login_v1/volsignup.html";
    </script>
<?php
//header("Location: localhost:4000/hackstomp/Login_v1/vlogin.html");
}
$conn->close();
?>

