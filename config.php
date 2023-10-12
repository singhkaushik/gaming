<?php
// db connection
$conn = mysqli_connect('localhost', 'root', '','teacher_book');
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
    }
    // echo "Connected successfully"; 

?>