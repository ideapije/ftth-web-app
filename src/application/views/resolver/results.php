<div class="container p-3">

    <div class="jumbotron jumbotron-fluid mb-3">
        <div class="container">
            <h3>Hasil Optimasi</h3>
            <p class="lead">Menyelesaikan masalah transportasi dengan 2 metode: <i>Least Cost</i> dan optimasi MODI</p>
        </div>
    </div>
    <!-- start showing results -->

    <?php if ($least_cost) : ?>
        <h3>Hasil <i>Least cost</i></h3>
        <?php include VIEWPATH . "resolver/table/least_cost.php"; ?>
    <?php endif ?>

    <hr />

    <?php if ($modi) : ?>
        <h3>Hasil optimasi <i>MODI</i></h3>
        <?php include VIEWPATH . "resolver/table/vam_modi.php"; ?>
    <?php endif ?>

    <?php if (!$modi) : ?>
        <div class="row">
            <div class="col-12 text-right">
                <form action="<?= site_url("resolver/optimize?sumber=$sumber&tujuan=$tujuan") ?>" method="post">
                    <input type="hidden" name="solution_id" value="<?= $solution_id ?>" />
                    <button type="submit" class="btn btn-lg btn-primary">
                        Optimasi MODI
                    </button>
                </form>
            </div>
        </div>
    <?php endif ?>

    <!-- end showing results -->
</div>