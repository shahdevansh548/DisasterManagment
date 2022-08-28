<?php

/**
* This page will save username/password data in cookies if remember box is checked
* If remember box is not checked, cookies will be cleared/deleted.
* Website: www.TutorialsClass.com
* Script Link: 
**/

if(!empty($_POST["remember"])) {
	setcookie ("email",$_POST["email"],time()+ 3600);
	setcookie ("password",$_POST["pass"],time()+ 3600);
	//echo "Cookies Set Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	//echo "Cookies Not Set";
}



// Grab User submitted information
$email = $_POST["email"];
$pass = $_POST["pass"];

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

// Select the database to use
$sql = "SELECT * FROM volunteer WHERE email='$email' AND pass='$pass'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "Welcome  " . $row["email"];
        header("Location: ../dashboard/examples/vdashboard.php?name=".$row['email']);
    }
} else {
	?>
    <script>
    	alert('Invalid Credentials!');
    	window.location = "http://localhost:4000/hackstomp/Login_v1/vlogin.html";
    </script>
<?php
//header("Location: localhost:4000/hackstomp/Login_v1/vlogin.html");
}
$conn->close();
?>




