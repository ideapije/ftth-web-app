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
                        <?php $result_value = $results_lc[$i][$j] ?? null; ?>
                        <td rowspan="2" bgcolor="transparent">
                            <?= $costs[$i][$j] ?? null ?>
                        </td>
                        <td bgcolor="<?= $result_value ? 'cyan' : 'transparent'  ?>">
                            <?= $result_value ?>
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
        <h4>Biaya :</h4>
    </div>
    <div class="col-6  text-right">
        <h4>
            <strong>
                <?= number_format($least_cost) ?>
            </strong>
        </h4>
    </div>
</div>