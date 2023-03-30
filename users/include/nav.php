<?php

include('../function.php');
// include '../function.php';
$auth = new db_CON();
$logout = $auth->logout();
?>
<div class="row">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand text-success fw-bolder" href="#">
                        <img src="../images/vote.png" alt="" width="30" height="24" class="d-inline-block align-text-top ">
                        NACEST
                    </a>
                </div>
            </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./user_home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./view_candidates.php">Contestants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./vote.php">Vote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./view_results.php">Results</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Welcome <?php //echo $_SESSION['mat_no']; 
                                                                            ?></a></li>
                            <li><a class="dropdown-item" href="#">Account Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Update Profile</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link disabled">Welcome <?php echo $_SESSION['mat_no']; ?></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../logout.php">Logout</a>
                    </li> -->
                </ul>
                <form class="d-flex gap-2">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <a href="" class="mr-2"> <button class="btn btn-outline-success " type="submit">Login</button></a>
                    <a href="<?php echo $logout; ?>"><button class="btn btn-outline-danger" type="submit">Logout</button></a>
                </form>
            </div>
        </div>
    </nav>
</div>