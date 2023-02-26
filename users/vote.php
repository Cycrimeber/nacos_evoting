<?php include('./include/header.php'); ?>
<?php include('./include/nav.php'); ?>


<div class="row">
    <!-- positions sidebar -->
    <div class="row">
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
            <h1 class="text-success text-center mb-5">NACOS Decides</h1>
        </div>
    </div>


</div>

<?php include('./include/footer.php'); ?>