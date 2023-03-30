<?php

class db_CON
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
    }

    // Matric number availability
    public function user_availability($matric_no)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM voters WHERE matric_no = '$matric_no'");
        return $result;
    }

    // function for registration 
    public function registration($full_name, $matric_no, $level, $gender)
    {
        $result = mysqli_query($this->conn, "INSERT INTO voters (full_name, gender, `level`, matric_no) VALUE ('$full_name', '$gender', '$level', '$matric_no')");
        return $result;
    }

    // function for sign in
    public function signin($name, $matric_no)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM voters WHERE full_name = '$name' && matric_no = '$matric_no'");
        return $result;
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header('Location:../../index.php');
    }

    public function close()
    {
        $this->conn->close();
    }
}
