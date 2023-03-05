<?php include('./include/header.php'); ?>
<?php include('./include/nav.php'); ?>

<!-- positions sidebar -->
<div class="row">
    <h1 class="text-success text-center ">ELECTION RESULTS</h1>

    <div class="col-md-3 mt-5">
        <div class="list-group">
            <!-- add active class for selection -->
            <button type="button" class="list-group-item list-group-item-action" aria-current="true">
                President
            </button>
            <button type="button" class="list-group-item list-group-item-action">Vice President</button>
            <button type="button" class="list-group-item list-group-item-action">Senate President</button>
            <button type="button" class="list-group-item list-group-item-action">PRO I & II</button>
            <button type="button" class="list-group-item list-group-item-action">Dir of Software I & II</button>
            <button type="button" class="list-group-item list-group-item-action">Dir of Hardware I & II</button>
            <button type="button" class="list-group-item list-group-item-action">Dir of Sports I & II</button>
            <button type="button" class="list-group-item list-group-item-action">Asst General Secretary</button>
            <button type="button" class="list-group-item list-group-item-action">Financial Secretary</button>
            <button type="button" class="list-group-item list-group-item-action">Treasurer</button>
            <button type="button" class="list-group-item list-group-item-action">Provost</button>
            <button type="button" class="list-group-item list-group-item-action">Dir of Social</button>
            <button type="button" class="list-group-item list-group-item-action">House of Senators</button>
            <button type="button" class="list-group-item list-group-item-action" disabled>Others </button>
        </div>
    </div>

    <!-- list of candidates based on position selection -->
    <div class="col-md 9">
        <h1 class="text-primary text-center my-5">President</h1>
        <div class="row d-flex justify-content-around">
            <div class="col-md-4 card">
                <img src="../images/cars/144.JPG" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ayokunle Eze Musa</h5>
                    <a href="#" class="btn btn-success ">Vote</a>
                </div>
            </div>

            <div class="col-md-4 card">
                <img src="../images/cars/Volvo-3CC-08-1152.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Idris Okechukwu Ojo</h5>
                    <a href="#" class="btn btn-success">Vote</a>
                </div>
            </div>

        </div>

    </div>
</div>

<?php include('./include/footer.php'); ?>