<html>
<body>
	<?php
		$username=$_POST["username"];
		$password=$_POST["password"];
		$email="a@b";
		$servername="localhost";
		$dbname="stocktalk";
		$conn = new mysqli($servername,"host","password",$dbname);
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		}
		$sql = "INSERT INTO users(username,password,email) VALUES('{$username}','{$password}','{$email}')";
		if($conn->query($sql)===TRUE)
		{
		$sql = "CREATE table $username (
				id int primary key AUTO_INCREMENT,
				name varchar(20),	
				scrip varchar(20),
				price float(10)
				)";
		if($conn->query($sql)===TRUE)
		{
			header('Location: dash.html');
			
		}
	    }
		$conn->close();
	?>

</body>
</html>