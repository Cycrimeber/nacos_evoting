<?php include('./include/header.php'); ?>
<?php include('./include/nav.php'); ?>

<!-- positions sidebar -->
<div class="row">
    <h1 class="text-success text-center ">NACOS DECIDES</h1>

    <div class="col-md-3 mt-5">
        <div class="list-group">
            <!-- add active class for selection -->
            <a href="vote.php?president"><button type="button" class="list-group-item list-group-item-action" aria-current="true">President</button></a>
            <a href="vote.php?v_president"> <button type="button" class="list-group-item list-group-item-action">Vice President</button></a>
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
    <div class="col-md-9">
        <?php
        if (isset($_GET['president'])) {
            include('./vote_position/president.php');
        }

        if (isset($_GET['v_president'])) {
            include './vote_position/v_president.php';
        }
        ?>
    </div>
</div>

<?php include('./include/footer.php'); ?>