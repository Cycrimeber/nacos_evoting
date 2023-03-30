<?php
include('../connection/connect.php');

$conn = new Connection();

class User extends Connection
{

    public $full_name;
    public $matric_no;
    public $level;

    function register_voter($full_name, $matric_no, $level)
    {
        $this->full_name = $full_name;
        $this->matric_no = $matric_no;
        $this->level = $level;

        $query = mysqli_query($this->conn, "INSERT INTO voters (full_name, `level`, matric_no) VALUES ('$full_name', '$level', '$matric_no');");
        if ($query == TRUE) {
            echo "
            <script> alert('Student Registered successfully'); </script>";
        } else {
            echo "<script>alert('Records not inserted');</script>";
        }
    }

    public function login($username, $matric_no)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM voters WHERE full_name='$username' && matric_no = '$matric_no'");
        if (mysqli_num_rows($result) == 1) {
            echo "<script>alert('Welcome');</script>";
            echo "<script>window.location.href='./users/view_candidates.php'</script>";
            // header("Location: ./users/view_candidates.php");
        } else {
            echo "<script>alert('Login failure');</script>";
        }
    }
}

// $register_user = new User();
// $register_user->register_voter("Isaiah", "HND22/3003", "hnd");

$user_login = new User();
$user_login->login('Isaiah', 'HND22/3003');
