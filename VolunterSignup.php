<?php
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
}// Selecting Database from Server
$pass=$_POST['VolunterPassword'];
$phone = $_POST['VolunterPhone'];
$email = $_POST['VolunterEmail'];
$position = $_POST['VolunterPosition'];

//Insert Query of SQL

$sql = "INSERT INTO user( password, email, phone_number, position ) VALUES (\"".$pass."\",\"".$email."\",\"".$phone."\",\"".$position."\")";
echo $sql;
if ($conn->query($sql) == TRUE)
{
//Insert Query of SQL
	?>
	<script>
    	alert('Successfully Signed Up!');
    </script>
<?php
header("Location: index.html");
}
else {
	?>
    <script>
    	alert('Incorrect Details!');
    	//window.location = "VolunterSignup.php";
    </script>
<?php
//header("Location: localhost:4000/hackstomp/Login_v1/vlogin.html");
}
$conn->close();
?>

