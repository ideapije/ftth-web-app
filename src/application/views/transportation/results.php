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
                        <th scope="col" colspan="2">ODP <?= $i + 1 ?></th>
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
                            $findLeft = array_filter($stored, function ($item) use ($i, $j) {
                                return ($item['index'][0] == $j && $item['index'][1] == $i);
                            });
                            $leftAmount = count($findLeft);
                            $first = reset($findLeft);
                            ?>
                            <td rowspan="2" bgcolor="transparent">
                                <?php if ($leftAmount) : ?>
                                    <?= $costs[$j][$i] ?? null ?>
                                <?php else : ?>
                                    <s style="color: rgba(0, 0, 0, 0.5);"><?= $costs[$j][$i] ?? null ?></s>
                                <?php endif ?>
                            </td>
                            <td>
                                <?php if ($leftAmount) : ?>
                                    <?= array_values($findLeft)[0]['left'] ?? null ?>
                                <?php endif ?>
                            </td>
                        <?php endfor ?>
                        <td rowspan="2" bgcolor="transparent">
                            <?= $supplies[$i] ?? 0 ?>
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
                            <s style="color: rgba(0, 0, 0, 0.5);"><?= $demands[$i] ?? null ?></s>
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
            <h4><strong><?= ($bfs_cost != -1) ? $bfs_cost : 0 ?></strong></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h4>Biaya metode MODI :</h4>
        </div>
        <div class="col-6 text-right">
            <h4><strong><?= $modi->result ?? 0 ?></strong></h4>
        </div>
    </div>
</div>