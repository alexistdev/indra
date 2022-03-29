<div class="container-fluid">
    <h1 class="mt-4"><?= $header; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= $header ?></li>
    </ol>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Speaker</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p><?= $speaker['merk']; ?></p>
                    <p><?= $speaker['type']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">mesin cuci</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p><?= $mesinCuci['merk']; ?></p>
                    <p><?= $mesinCuci['type']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">tv</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p><?= $tv['merk']; ?></p>
                    <p><?= $tv['type']; ?></p>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">kulkas</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p><?= $kulkas['merk']; ?></p>
                    <p><?= $kulkas['type']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">setrika</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p><?= $setrika['merk']; ?></p>
                    <p><?= $setrika['type']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">mic</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p><?= $mic['merk']; ?></p>
                    <p><?= $mic['type']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">kipas Angin</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p><?= $kipasAngin['merk']; ?></p>
                    <p><?= $kipasAngin['type']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">kompor gas</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p><?= $komporGas['merk']; ?></p>
                    <p><?= $komporGas['type']; ?></p>
                </div>
            </div>
        </div>

        
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">speaker aktif</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p><?= $speakerAktif['merk']; ?></p>
                    <p><?= $speakerAktif['type']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <br>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= "NOTICE!!!" ?></li>
    </ol>
    <div class="row">
        <div class="col">
            <div class="card mb-4">
                <div class="card-header justify-content-between">
                    <strong>
                        Peringatan, Stok Produk Ini Dibawah 10!
                    </strong>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="45px">No</th>
                                    <th>Kategori</th>
                                    <th>Merk</th>
                                    <th>Type</th>
                                    <th width="90px">Stok</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Merk</th>
                                    <th>Type</th>
                                    <th>Stok</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1; ?>

                                <?php foreach($cekStok as $stok) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $stok['kategori'] ?></td>
                                        <td><?= $stok['merk'] ?></td>
                                        <td><?= $stok['type'] ?></td>
                                        <td><?= $stok['stok'] ?></td>
                                    <tr>

                               <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>