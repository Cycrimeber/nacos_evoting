<?php include('../Admin/include/admin_header.php'); ?>
<?php include('./include/admin_nav.php'); ?>

<h1 class="text-center text-dark py-2">Register Voters</h1>
<div class="row">
    <!-- Candidates registration form -->
    <div class="col-md-6 m-auto my-3">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="Enter full name">
            <label for="floatingInput">Full Name</label>
        </div>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="Enter matric number">
            <label for="floatingInput">Matriculation Number</label>
        </div>

        <div class="row mb-3">
            <p class="mb-0">Gender</p>
            <div class="form-check mx-5">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Male </label>
            </div>
            <div class="form-check mx-5">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>
        </div>

        <select class="form-select mb-3" aria-label="Default select example">
            <option selected disabled hidden>Level</option>
            <option value="1">ND 1</option>
            <option value="2">ND 2</option>
            <option value="3">HND 1</option>
            <option value="3">HND 2</option>
        </select>

        <button type="button" class="btn btn-outline-success my-3">Register</button>
    </div>
</div>


<?php include('../Admin/include/admin_footer.php'); ?>