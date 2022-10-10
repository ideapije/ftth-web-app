<div class="container p-3">
    <div class="jumbotron jumbotron-fluid mb-3">
        <div class="container">
            <h3>Hasil Masukan</h3>
            <p class="lead">Di mulai dari titik cell 1.1<br /> Pilihlah nilai terkecil antara kapasitas pada ODP 1 dengan kebutuhan pada Pelanggan 1. Nilai terkecilnya adalah 50</p>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ODP/Pelanggan</th>
                    <?php for ($i = 1; $i <= $ax; $i++) : ?>
                        <th scope="col" colspan="2">Pelanggan <?= $i ?></th>
                    <?php endfor ?>
                    <th scope="col">Kapasitas</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= $ay; $i++) : ?>
                    <tr>
                        <td rowspan="2">ODP <?= $i ?></td>
                        <?php for ($k = 1; $k <= $ax; $k++) : ?>
                            <td rowspan="2" bgcolor="<?= ($i === 1 && $k === 1) ? 'blue' : 'transparent' ?>">
                                <span class="p-3"></span>
                            </td>
                            <td>Pelanggan <?= $k ?></td>
                        <?php endfor ?>
                        <td rowspan="2" bgcolor="<?= ($i === 1) ? 'cyan' : 'transparent' ?>">
                            Kapasitas
                        </td>
                    </tr>
                    <tr>
                        <?php for ($j = 1; $j <= $ax; $j++) : ?>
                            <td></td>
                        <?php endfor ?>
                    </tr>
                <?php endfor ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-6">
            <h4>Biaya</h4>
        </div>
        <div class="col-6">
            <strong><?= number_format(180000000) ?></strong>
        </div>
    </div>
</div>