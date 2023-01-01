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
                            $cost       = $costs[$j][$i] ?? 0;
                            $findItems  = array_filter($results_modi, function ($array) use ($i, $j) {
                                [$x, $y] = $array[2];
                                return $x === $j && $i === $y;
                            });
                            $store      = array_shift($findItems);
                        ?>
                        <td rowspan="2" bgcolor="transparent">
                            <?= $cost ?>
                        </td>
                        <td bgcolor="<?= $store ? 'cyan' : 'transparent' ?>">
                            <?= $store[0] ?? '' ?>
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
                <?= number_format($modi) ?>
            </strong>
        </h4>
    </div>
</div>