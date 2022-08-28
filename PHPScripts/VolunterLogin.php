<?php
// Grab User submitted information

$name = $_POST["VolunterName"];
$pass = $_POST["VolunterPassword"];
$age = $_POST["VolunterAge"];
$email = $_POST["VolunterEmail"];
$phone = $_POST["VolunterPhone"];
$position = $_POST['VolunterPosition'];

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
$sql = "SELECT * FROM user WHERE user_id='$name' AND password='$pass' AND email='$email' AND phone_number='$phone' AND position='$position'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "Welcome  " . $row["email"];
       // header("Location: ../dashboard/examples/vdashboard.php?name=".$row['email']);  Login Successful
    }
} else {
	?>
    <script>
    	alert('Invalid Credentials!');
    	//window.location = "http://localhost:4000/hackstomp/Login_v1/vlogin.html";  Wrong Credentials
    </script>
<?php
//header("Location: localhost:4000/hackstomp/Login_v1/vlogin.html");
}
$conn->close();
?>




