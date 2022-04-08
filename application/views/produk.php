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
                    <a class="btn btn-primary ml-auto float-right"  href="<?= base_url('produk/formAddProduk'); ?>">
                        <i class="fas fa-plus "></i>
                        tambah
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tabelProduk" width="100%" cellspacing="0">
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
                                    <th width="90px">Action</th>
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
                                    <th>Action</th>
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
                                        <td>
                                            <a class="btn btn-primary" href="<?= base_url('produk/editProduk/'.$produk['id']); ?>"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" href="<?= base_url('produk/deleteProduk/'.$produk['id']); ?>" onclick="return confirm('Are you sure you want to delete this?')"><i class="fas fa-trash"></i></a>
                                        </td>
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
