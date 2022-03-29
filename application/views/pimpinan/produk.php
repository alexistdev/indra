<div class="container-fluid">
    <h1 class="mt-4"><?= $header; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= $header ?></li>
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
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="45px">No</th>
                                    <th>Kode Produk</th>
                                    <th>Kategori</th>
                                    <th>Merk</th>
                                    <th>Type</th>
                                    <th>Size</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Kode Produk</th>
                                    <th>Kategori</th>
                                    <th>Merk</th>
                                    <th>Type</th>
                                    <th>Size</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data as $produk) : ?>
                                    
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $produk['kode_produk']; ?></td>
                                        <td><?= $produk['kategori']; ?></td>
                                        <td><?= $produk['merk']; ?></td>
                                        <td><?= $produk['type']; ?></td>
                                        <td><?= $produk['size']; ?></td>
                                        <td><?= $produk['harga']; ?></td>
                                        <td><?= $produk['stok']; ?></td>
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