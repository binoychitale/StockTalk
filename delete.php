<?php
	session_start();
	$name = $_POST["name"];
	$servername="localhost";
		$dbname="stocktalk";
		$uname= $_SESSION['username'];
		$conn = new mysqli($servername,"host","password",$dbname);
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		}
		$sql = "DELETE FROM $uname WHERE name='$name'";
		//if($conn->query($sql))
		//{
			$conn->query($sql); 
			
			echo "ok";
			//header('Location: dash.html');
			
		//}
		$conn->close();

?>