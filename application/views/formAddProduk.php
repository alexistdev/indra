<div class="container-fluid">
    <h1 class="mt-4"><?= $header; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= $header; ?></li>
    </ol>

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-3">
                <div class="card-header"><h3 class="text-center font-weight-light my-4"><?= $header ?></h3></div>
                <div class="card-body">
                    <form action="<?= base_url('produk/formAddProduk'); ?>" method="POST">
                        <div class="form-group">
                            <label for="kategoriId">Kategori</label>
                            <select name="kategoriId" class="form-control" id="kategoriId" required>
                                <option value="">--pilih kategori--</option>
                                <?php foreach($kategori as $data) : ?>
                                <option value="<?= $data['id']; ?>"><?= $data['kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('kategori', '<div class="error alert-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="merkId">Merk</label>
                            <select name="merkId" class="form-control" id="merkId" required>
                                <option value="">--pilih merk--</option>
                                <?php foreach ($merk as $data) : ?>
                                <option value="<?= $data['id']; ?>"><?= $data['merk']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('merk', '<div class="error alert-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sizeId">Size</label>
                            <select name="sizeId" class="form-control" id="sizeId" required>
                                <option value="">--pilih size--</option>
                                <?php foreach($size as $data) : ?>
                                <option value="<?= $data['id']; ?>"><?= $data['size']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kode_produk">Kode Produk</label>
                            <input name="kode_produk" type="text" class="form-control" id="kode_produk" placeholder="input nama kode produk..." required>
                            <?php echo form_error('kode_produk', '<div class="error alert-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input name="type" type="text" class="form-control" id="type" placeholder="input nama type..." required>
                            <?php echo form_error('type', '<div class="error alert-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input name="harga" type="number" class="form-control" id="harga" placeholder="input harga..." required>
                            <?php echo form_error('harga', '<div class="error alert-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stok">Jumlah Stok</label>
                            <input name="stok" type="number" class="form-control" id="stok" placeholder="input stok..." required>
                            <?php echo form_error('stok', '<div class="error alert-danger">', '</div>'); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>