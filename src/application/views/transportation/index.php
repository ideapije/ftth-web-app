<div class="container p-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Inisialisasi Transportasi</h4>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('transportation/form') ?>" method="get">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="inputOdc" class="col-sm-4 col-form-label">Jumlah ODC</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputOdc" name="amount_odc" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputFO" class="col-sm-4 col-form-label">Ketersediaan Kabel FO</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputFO" name="amount_fo" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <!-- 1 ODP = 8 Pelanggan -->
                                    <label for="inputSource" class="col-sm-4 col-form-label">Jumlah ODP</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputSource" name="sumber" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputDestination" class="col-sm-4 col-form-label">Jumlah Pelanggan</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputDestination" name="tujuan" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputWorker" class="col-sm-4 col-form-label">Jumlah Pekerja</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputWorker" name="amount_worker" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputSplicing" class="col-sm-4 col-form-label">Jumlah Sambungan fucion splicing</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputSplicing" name="amount_splicing" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label">Metode Optimasi</label>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="method_optimize1" name="method_optimize" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_optimize1">Stepping Stone</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="method_optimize2" name="method_optimize" class="custom-control-input">
                                                    <label class="custom-control-label" for="method_optimize2">MODI</label>
                                                </div>
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