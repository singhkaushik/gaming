<?php
// db connection
$conn = mysqli_connect('localhost', 'root', '','abhi');
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
    }
    // echo "Connected successfully"; 

?>