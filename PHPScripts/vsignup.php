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
$pss=$_POST['pass'];
$cntact = $_POST['contact'];
$mail = $_POST['email'];
$addr= $_POST['address'];
$cname=$_POST['carname'];
$cno=$_POST['carno'];

//Insert Query of SQL

$sql = "insert into volunteer( pass,  phone_no,email, addr,car_name, car_no,uid) values ('$pss','$cntact','$mail','$addr','$cname','$cno',1)";

if ($conn->query($sql) == TRUE)
{
//Insert Query of SQL
	?>
	<script>
    	alert('Successfully Signed Up!');
    </script>
<?php
header("Location: 	Login_v1/vlogin.html");
}
else {
	?>
    <script>
    	alert('Incorrect Details!');
    	window.location = "Login_v1/volsignup.html";
    </script>
<?php
//header("Location: localhost:4000/hackstomp/Login_v1/vlogin.html");
}
$conn->close();
?>

