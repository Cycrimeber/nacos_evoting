<?php
session_start();
include('./function.php');

$auth = new db_CON();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $matric_no = $_POST['matric_no'];
    $login = $auth->signin($username, $matric_no);
    $user = mysqli_fetch_assoc($login);
    if (mysqli_num_rows($login) > 0) {
        echo "successful";
        $_SESSION['mat_no'] = $user['matric_no'];
        echo "<script>window.location.href='./users/user_home.php';</script>";
    } else {
        echo "failed";
        echo "<script>window.location.href='./index.php';</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Assets/css/mystyles.css">
    <title>Voters Login</title>
</head>

<body>
    <div class="container bg-light py-5 h-auto">
        <div class="row">
            <h1 class="text-success text-center mb-5">Welcome Voter</h1>
            <div class="col-12 col-md-10 d-flex m-auto">
                <div class="col-12 col-md-4 bg-primary">
                    <img src="./images/vote_online.webp" alt="" class="img-fluid w-100">
                </div>
                <!-- Use card for login form -->
                <div class="col-md-8 my-auto">
                    <div class="col-md-8 m-auto">
                        <div class="card">
                            <h5 class="card-header">Login</h5>
                            <div class="card-body">
                                <form method="POST" action="">
                                    <div class="mb-3 row">
                                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="username" id="username" value="username">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="matric_no" class="col-sm-3 col-form-label">Matric Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="matric_no" id="matric_no">
                                        </div>

                                    </div>
                                    <input type="submit" value="Sign In" name="submit" class="btn btn-success">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./Assets/js></script>
</body>

</html>