<div class="container p-3">
    <form action="<?= site_url("transportation/submit?sumber=$sumber&tujuan=$tujuan") ?>" method="post">
        <div class="jumbotron jumbotron-fluid mb-3">
            <div class="container">
                <h3>Input Jalur dan ODP</h3>
                <p class="lead">Masukan nilai dari masing-masing jalur dan ODP</p>
            </div>
        </div>
        <div class="table-responsive mb-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Jalur/ODP</th>
                        <?php for ($i = 1; $i <= $tujuan ?? 0; $i++) : ?>
                            <th scope="col">ODP <?= $i ?></th>
                        <?php endfor ?>
                        <th scope="col">Kapasitas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < $sumber ?? 0; $i++) : ?>
                        <tr>
                            <td>Jalur <?= $i+1 ?></td>
                            <?php for ($j = 0; $j < $tujuan; $j++) : ?>
                                <td>
                                    <input type="text" name="values[<?= $j ?>][<?= $i ?>]" class="form-control" value="<?= $values[$j][$i] ?? null ?>" />
                                </td>
                            <?php endfor ?>
                            <td>
                                <input type="text" name="supplies[]" class="form-control" value="<?= $supplies[$i] ?? 0 ?>" />
                            </td>
                        </tr>
                    <?php endfor ?>
                    <tr>
                        <td>
                            Demand
                        </td>
                        <?php for ($k = 0; $k < $tujuan; $k++) : ?>
                            <td>
                                <input type="text" name="demands[]" class="form-control" value="<?= $demands[$k] ?? null ?>" />
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