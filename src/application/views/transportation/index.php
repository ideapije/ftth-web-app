<div class="container p-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Inisialisasi Penugasan</h4>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('transportation/form') ?>" method="get">
                        <div class="row mb-3">
                            <div class="col-lg-4 col-md-4 col-sm-12">

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="type1" name="type" class="custom-control-input">
                                    <label class="custom-control-label" for="type1">NWC</label>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="type2" name="type" class="custom-control-input">
                                    <label class="custom-control-label" for="type2">Least Cost</label>
                                </div>

                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="type3" name="type" class="custom-control-input">
                                    <label class="custom-control-label" for="type3">VAM</label>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="inputSource" class="col-sm-4 col-form-label">Jumlah Sumber</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputSource" name="sumber" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputDestination" class="col-sm-4 col-form-label">Jumlah Tujuan</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputDestination" name="tujuan" />
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