<?php

class Connection
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbName = "nacest_nacos_election";
    public $conn;

    public function __construct()
    {
        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbName);
        $this->conn = $conn;
        // check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MYSQL: " . mysqli_connect_error();
            exit();
        }
        // else {
        //     echo "successful";
        // }
    }

    // Matric number availability
    public function user_availability($matric_no)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM voters WHERE matric_no = '$matric_no'");
        if ($result) {
            return $result;
        } else {
            echo "failed" . mysqli_connect_error();
        }
    }

    // function for registration 
    public function registration($full_name, $matric_no, $level)
    {
    }

    // function for sign in
    public function signin($name, $matric_no)
    {
    }

    public function close()
    {
        $this->conn->close();
    }
}

// $user1 = new Connection();
// echo '<pre>';
// print_r($user1->user_availability("HND22/3003"));

// createa a connection to the database using the OOP method
// $conn = new mysqli($servername, $username, $password, $dbName);

// check connection
// if ($conn->connect_errno) {
//     die("Connection failed: " . $conn->connect_error . $conn->connect_errno);
//     exit();
// }

// $conn->close();
