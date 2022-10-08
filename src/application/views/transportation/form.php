<div class="container p-3">
    <div class="jumbotron jumbotron-fluid mb-3">
        <div class="container">
            <h3>Input Sumber dan Tujuan</h3>
            <p class="lead">Masukan jumlah sumber dan jumlah tujuan</p>
        </div>
    </div>
    <div class="table-responsive mb-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Sumber/Tujuan</th>
                    <?php for ($i = 1; $i <= $tujuan; $i++) : ?>
                        <th scope="col">Tujuan <?= $i ?></th>
                    <?php endfor ?>
                    <th scope="col">Kapasitas</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= $sumber; $i++) : ?>
                    <tr>
                        <td>Sumber <?= $i ?></td>
                        <?php for ($k = 1; $k <= $tujuan; $k++) : ?>
                            <td>
                                <input type="text" name="tasks[]" class="form-control" />
                            </td>
                        <?php endfor ?>
                        <td>
                            <input type="text" name="capacity[]" class="form-control" />
                        </td>
                    </tr>
                <?php endfor ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col text-right">
            <a href="<?= site_url("dashboard/results/?ay=$sumber&ax=$tujuan") ?>" class="btn btn-lg btn-primary">
                Submit
            </a>
        </div>
    </div>
</div>