<?php include('../Admin/include/admin_header.php'); ?>
<?php include('./include/admin_nav.php'); ?>

<h1 class="text-center text-dark py-2">Register Candidates</h1>
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

        <!-- Position selection is based on level being ND or HND -->
        <select class="form-select mb-3" aria-label="Default select example">
            <option selected disabled hidden>Level</option>
            <option value="nd">ND 1</option>
            <option value="hnd">HND 1</option>
        </select>

        <select class="form-select mb-3" aria-label="Default select example">
            <option selected disabled hidden>Position Contesting for</option>
            <option value="1">President</option>
            <option value="2">Vice President</option>
            <option value="3">Secretary</option>
        </select>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Enter Biography</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div>
            <label for="formFileLg" class="form-label">Upload official photograph</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file">
        </div>
        <div class="my-3">
            <button type="button" class="btn btn-outline-success">Register</button>
        </div>
    </div>
</div>


<?php include('../Admin/include/admin_footer.php'); ?>