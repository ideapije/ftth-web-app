<div class="container p-3">
    <div class="jumbotron jumbotron-fluid mb-3">
        <div class="container">
            <h3>Hasil ODC/ODP</h3>
            <p class="lead">Hasil metode transportasi <i>Least Cost</i> dan optimasi MODI</p>
        </div>
    </div>

    <div class="table-responsive mb-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ODC/ODP</th>
                    <?php for ($i = 0; $i < $tujuan; $i++) : ?>
                        <th scope="col" colspan="2">
                            ODP <?= $i + 1 ?>
                        </th>
                    <?php endfor ?>
                    <th scope="col">Kapasitas</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < $sumber; $i++) : ?>
                    <tr>
                        <td rowspan="2">ODC <?= $i + 1 ?></td>
                        <?php for ($j = 0; $j < $tujuan; $j++) : ?>
                            <?php
                            $result_value = $results_lc[$j][$i] ?? 0;
                            ?>
                            <td rowspan="2" bgcolor="transparent">
                                <?= $costs[$j][$i] ?? null ?>
                            </td>
                            <td bgcolor="<?= $result_value ? 'cyan' : 'transparent'  ?>">
                                <?= $results_lc[$j][$i] ?? null ?>
                            </td>
                        <?php endfor ?>
                        <td rowspan="2" bgcolor="transparent">
                            <?= $supply[$i] ?? 0 ?>
                        </td>
                    </tr>
                    <tr>
                        <?php for ($j = 0; $j < $tujuan; $j++) : ?>
                            <td></td>
                        <?php endfor ?>
                    </tr>
                <?php endfor ?>
                <tr>
                    <td>
                        Demand
                    </td>
                    <?php for ($i = 0; $i < $tujuan; $i++) : ?>
                        <td scope="col" colspan="2">

                            <?= $demand[$i] ?? null ?>
                        </td>
                    <?php endfor ?>
                    <td>
                        <?= $total ?? null ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-6">
            <h4>Biaya metode <i>Least Cost</i> :</h4>
        </div>
        <div class="col-6  text-right">
            <h4><strong><?= number_format($least_cost ?? 0) ?></strong></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h4>Biaya metode MODI :</h4>
        </div>
        <div class="col-6 text-right">
            <h4>
                <strong>
                    <!-- TODO -->
                </strong>
            </h4>
        </div>
    </div>
</div>