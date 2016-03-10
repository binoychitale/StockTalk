<<html>

<body>
	<?php
		dbname="stocktalk";
		$conn = new mysqli("localhost",,,$dbname);
		
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		}
		$sql="select name,price,ylow,yhigh,vol";
		$username=$_POST["username"];
		$password=$_POST["password"];
		if($username==)

</body>
</html>