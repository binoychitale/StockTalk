<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
    $servername="localhost";
        $dbname="stocktalk";
        $conn = new mysqli($servername,"host","password",$dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT username,password FROM users WHERE username='$username' AND password='$password'";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            session_start();
            $_SESSION["username"]=$username;
            echo "true";
        }
        $conn->close();
?>
