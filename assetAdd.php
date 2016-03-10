<?php
	session_start();
	$name = $_POST['name'];
	$scrip = $_POST['scrip'];
	$price = $_POST['price'];
	$servername="localhost";
		$dbname="stocktalk";
		$uname= $_SESSION['username'];
		$conn = new mysqli($servername,"host","password",$dbname);
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		}
		$sql = "INSERT INTO $uname(name,scrip,price) VALUES('$name','$scrip','$price')";
		//if($conn->query($sql))
		//{
			$conn->query($sql); 
			echo $sql;
			//header('Location: dash.html');
			
		//}
		$conn->close();

?>