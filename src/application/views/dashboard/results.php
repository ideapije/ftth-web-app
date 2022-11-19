<div class="container p-3">
    <div class="jumbotron jumbotron-fluid mb-3">
        <div class="container">
            <h3>Hasil Akhir</h3>
            <p class="lead">Hasil dari metode <i>least cost</i> kemudian dioptimasi dengan metode solusi optimal MODI</p>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ODC/ODP</th>
                    <?php for ($i = 1; $i <= $ax; $i++) : ?>
                        <th scope="col" colspan="2">ODP <?= $i ?></th>
                    <?php endfor ?>
                    <th scope="col">Kapasitas</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= $ay; $i++) : ?>
                    <tr>
                        <td rowspan="2">ODC <?= $i ?></td>
                        <?php for ($k = 1; $k <= $ax; $k++) : ?>
                            <td rowspan="2" bgcolor="<?= ($i === 1 && $k === 1) ? 'blue' : 'transparent' ?>">
                                <span class="p-3"></span>
                            </td>
                            <td></td>
                        <?php endfor ?>
                        <td rowspan="2" bgcolor="<?= ($i === 1) ? 'cyan' : 'transparent' ?>">
                            
                        </td>
                    </tr>
                    <tr>
                        <?php for ($j = 1; $j <= $ax; $j++) : ?>
                            <td></td>
                        <?php endfor ?>
                    </tr>
                <?php endfor ?>
                <tr>
                    <td>
                        Demand
                    </td>
                    <?php for ($i = 1; $i <= $ax; $i++) : ?>
                        <td scope="col" colspan="2">
                            
                        </td>
                    <?php endfor ?>
                    <td>
                        
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-10">
            <h4>Biaya</h4>
        </div>
        <div class="col-2">
            <strong>
                
            </strong>
        </div>
    </div>
</div>