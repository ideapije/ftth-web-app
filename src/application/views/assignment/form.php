<div class="container p-3">
    <div class="jumbotron jumbotron-fluid mb-3">
        <div class="container">
            <h3>Input Sumber dan Tugas</h3>
            <p class="lead">Masukan jumlah sumber dan jumlah tugas</p>
        </div>
    </div>
    <div class="table-responsive mb-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Sumber/Tugas</th>
                    <?php for ($i = 1; $i <= $tugas; $i++) : ?>
                        <th scope="col">Tugas <?= $i ?></th>
                    <?php endfor ?>
                    <th scope="col">Kapasitas</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= $sumber; $i++) : ?>
                    <tr>
                        <td>Sumber <?= $i ?></td>
                        <?php for ($k = 1; $k <= $tugas; $k++) : ?>
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
            <a href="<?= site_url("dashboard/results/?ay=$sumber&ax=$tugas") ?>" class="btn btn-lg btn-primary">
                Submit
            </a>
        </div>
    </div>
</div>