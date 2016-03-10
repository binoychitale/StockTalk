<?php 
         session_start();
            $username=$_SESSION["username"];
        $servername="localhost";
        $dbname="stocktalk";
        $conn = new mysqli($servername,"host","password",$dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM $username";
        $result=$conn->query($sql);
        while($row =$result->fetch_assoc())
    	$test[] = $row;
        echo json_encode($test);
        $conn->close();
?>