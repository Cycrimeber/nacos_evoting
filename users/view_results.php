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
    <div class="col-md 9 mt-5">
        <table class="table">
            <thead>
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">Position</th>
                    <th scope="col">Candidates</th>
                    <th scope="col">Votes</th>
                    <th scope="col">Remarks</th>
                </tr>
            </thead>
            <tbody>
                <!-- President -->
                <tr>
                    <!-- <th scope="row">1</th> -->
                    <td rowspan="3" class="text-center text-light bg-primary bg-opacity-50 pt-5">President</td>
                    <td class="bg-primary bg-opacity-50">Otto</td>
                    <td class="bg-primary bg-opacity-50">65</td>
                    <td class="bg-primary bg-opacity-50"></td>
                </tr>
                <tr>
                    <!-- <th scope="row">2</th> -->
                    <td class="bg-primary bg-opacity-50">Thornton</td>
                    <td class="bg-primary bg-opacity-50">112</td>
                    <td class="bg-success bg-opacity-75 text-light text-center">Winner</td>
                </tr>
                <tr>
                    <!-- <th scope="row">3</th> -->
                    <td class="bg-primary bg-opacity-50">Larry the Bird</td>
                    <td class="bg-primary bg-opacity-50">34</td>
                    <td class="bg-primary bg-opacity-50"></td>
                </tr>

                <!-- Vice President -->
                <tr>
                    <!-- <th scope="row">1</th> -->
                    <td rowspan="3" class="text-center bg-success text-dark bg-opacity-10 pt-4">Vice President</td>
                    <td class="bg-success bg-opacity-10">Ibong</td>
                    <td class="bg-success bg-opacity-10">5</td>
                    <td class="bg-success bg-opacity-10"></td>
                </tr>
                <tr>
                    <!-- <th scope="row">2</th> -->
                    <td class="bg-success bg-opacity-10">Charity</td>
                    <td class="bg-success bg-opacity-10">301</td>
                    <td class="bg-success bg-opacity-75 text-light text-center">Winner</td>
                </tr>

            </tbody>
        </table>

    </div>

</div>
</div>

<?php include('./include/footer.php'); ?>