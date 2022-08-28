<?php

$name = $_POST["Voluteer_Name"];
$email = $_POST["Voluteer_Email"];
$pass = $_POST["Voluteer_Password"];
$age = $_POST["Voluteer_Age"];
$position = $_POST["Voluteer_Position"];
$phone = $_POST["Voluteer_Phone"];

// Connect to the database
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "hack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Make sure we connected successfully
if(! $conn){
    die('Connection Failed'.mysql_error());
}

// Select the database to use
$sql = "";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "Welcome  " . $row["email"];
        header("Location: ../dashboard/examples/dashboard.php?name=".$row['email']);
    }
} else {
	?>
    <script>
    	alert('Invalid Credentials!');
    	window.location = "http://localhost:4000/hackstomp/Login_v1/ulogin.html";
    </script>
<?php
//header("Location: localhost:4000/hackstomp/Login_v1/vlogin.html");
}
$conn->close();
?>




