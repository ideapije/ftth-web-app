<div class="container p-3">
    <form action="<?= site_url("resolver/submit?sumber=$sumber&tujuan=$tujuan") ?>" method="post">
        <div class="jumbotron jumbotron-fluid mb-3">
            <div class="container">
                <h3>Input ODC dan ODP</h3>
                <p class="lead">Masukan biaya dari masing-masing ODP</p>
            </div>
        </div>
        <div class="table-responsive mb-3">
            <?php
            $amount_supply = $sumber ?? 0;
            $amount_demand = $tujuan ?? 0;
            ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ODC/ODP</th>
                        <?php for ($i = 1; $i <= $amount_demand; $i++) : ?>
                            <th scope="col">ODP <?= $i ?></th>
                        <?php endfor ?>
                        <th scope="col">Kapasitas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < $amount_supply; $i++) : ?>
                        <tr>
                            <td>ODC <?= $i + 1 ?></td>
                            <?php for ($j = 0; $j < $amount_demand; $j++) : ?>
                                <td>
                                    <input type="text" name="costs[<?= $i ?>][<?= $j ?>]" value="<?= $costs[$j][$i] ?? null ?>" />
                                </td>
                            <?php endfor ?>
                            <td>
                                <input type="text" name="supply[]" value="<?= $supplies[$i] ?? 0 ?>" />
                            </td>
                        </tr>
                    <?php endfor ?>
                    <tr>
                        <td>
                            Demand
                        </td>
                        <?php for ($k = 0; $k < $amount_demand; $k++) : ?>
                            <td>
                                <input type="text" name="demand[]" class="form-control" value="<?= $demands[$k] ?? null ?>" />
                            </td>
                        <?php endfor ?>
                        <td>
                            <input type="text" name="total" class="form-control" value="<?= $total ?? null ?>" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col text-right">
                <button type="submit" class="btn btn-lg btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </form>
</div>