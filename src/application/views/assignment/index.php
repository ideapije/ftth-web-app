<div class="container p-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Inisialisasi Penugasan</h4>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('assignment/form') ?>" method="get">
                        <div class="row mb-3">
                            <div class="col-lg-5 col-md-6 col-sm-12">

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="range1" name="range" class="custom-control-input">
                                    <label class="custom-control-label" for="range1">Maksimasi</label>
                                </div>

                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12">

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="range2" name="range" class="custom-control-input">
                                    <label class="custom-control-label" for="range2">Minimasi</label>
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
                                    <label for="inputTugas" class="col-sm-4 col-form-label">Jumlah Tugas</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputTugas" name="tugas" />
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