<?php
// Grab User submitted information
$email = $_POST['NGOEmail'];
$pass = $_POST["NGOPassword"];

// Connect to the database
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "hack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Make sure we connected successfully
if(! $conn)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
$sql = "SELECT * FROM ngo WHERE password='".$pass."' AND email='".$email."'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Welcome ";
        header("Location:index.html");
    }
} else {
	?>
    <script>
    	alert('Invalid Credentials!');
    	window.location = "NGOLoginForm.php";
    </script>
<?php
//header("Location: localhost:4000/hackstomp/Login_v1/vlogin.html");
}
$conn->close();
?>




