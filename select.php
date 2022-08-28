<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "hack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$dis= $_GET['disaster'];
$lat = $_GET['latitude'];
$long = $_GET['longitude'];
$ct = $_GET['city'];

//echo $dis." ".$ct;

$sql = "SELECT * FROM `disaster_event`";
$result = $conn->query($sql);
$f=1;
$num = $result->num_rows;
if ($num > 0) {
	$row = $result->fetch_assoc();
    if($row["city"]==$ct){
    	//echo $row["city"];
    	$f=$row["flag"];
    	$f++;
    	$sql = "UPDATE `disaster_event` SET `flag`=".$f." WHERE `city`='".$ct."'";
    	//echo $sql;
    	if ($conn->query($sql) === TRUE) {
		    //echo "Record updated successfully";
		    $uni_rl="Location: http://localhost:8080/welfare/active_disaster.php?flag=".$f."&change=0";
		    header($uni_rl);
		} else {
		    echo "Error updating record: " . $conn->error;
		}
    }
    else{
	    $sql = "INSERT INTO `disaster_event`(`dis_name`, `latitude`, `longitude`, `city`, `flag`) VALUES ('".$dis."','".$lat."','".$long."','".$ct."',".$f.")";
		//echo $sql;
		if ($conn->query($sql) === TRUE) {
			//echo "Event created";
			$uni_rl="Location: http://localhost:8080/welfare/active_disaster.php?flag=".$f."&change=1";
			header($uni_rl);
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}	 
	}   
}
else if($num==0){
		$sql = "INSERT INTO `disaster_event`(`dis_name`, `latitude`, `longitude`, `city`, `flag`) VALUES ('".$dis."','".$lat."','".$long."','".$ct."',".$f.")";
		//echo $sql;
		if ($conn->query($sql) === TRUE) {
			//echo "Event created";
			$uni_rl="Location: http://localhost:8080/welfare/active_disaster.php?flag=".$f."&change=1";
			header($uni_rl);
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}	
}
else{
	echo "Error";
}

$conn->close();
?>