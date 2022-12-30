<div class="container p-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Input Data Jaringan FTTH</h4>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('resolver/form') ?>" method="get">
                        <div class="row">
                            <div class="col">

                                <div class="form-group row">
                                    <label for="inputSource" class="col-sm-4 col-form-label">Jumlah ODC</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputSource" name="sumber" value="<?= $sumber ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputDestination" class="col-sm-4 col-form-label">Jumlah ODP</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputDestination" name="tujuan" value="<?= $tujuan ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label">Metode Optimasi</label>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Metode <i>Least Cost</i></p>
                                            </div>
                                            <div class="col-12">
                                                <p>Metode <i>Optimal Modified Distribution</i></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Masukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>