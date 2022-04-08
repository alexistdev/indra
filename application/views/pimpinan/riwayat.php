<div class="container-fluid">
    <h1 class="mt-4"><?= $header; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= $header; ?></li>
    </ol>

    <?php echo $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col">
            <div class="card mb-4">
                <div class="card-header justify-content-between">
                    <strong>
                        Daftar <?= $header; ?>
                    </strong>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="pimpinanRiwayat" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="45px">No</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Jenis Barang</th>
                                    <th>Merk Barang</th>
                                    <th>Type</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                     <th width="45px">No</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Jenis Barang</th>
                                    <th>Merk Barang</th>
                                    <th>Type</th>
                                    <th>Harga</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data as $riwayat) : ?>
                                    
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= date('d/m/Y', $riwayat['tgl_penjualan']); ?></td>
                                        <td><?= $riwayat['kategori'] ?></td>
                                        <td><?= $riwayat['merk'] ?></td>
                                        <td><?= $riwayat['type'] ?></td>
                                        <td><?= $riwayat['harga'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
