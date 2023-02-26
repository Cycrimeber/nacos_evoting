<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "nacest_nacos_election";

// createa a connection to the database using the OOP method
$conn = new mysqli($servername, $username, $password, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $conn->query("insert into `login`(username, password) values ('deagle','1')");
// echo "New record inserted";

$conn->close();

// create a connection to the database using the PDO statement
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=nacest_nacos_election", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
// } catch (PDOException $e) {
//     echo "Connection failed: ", $e->getMessage();
// }
