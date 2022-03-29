<div class="container-fluid">
    <h1 class="mt-4"><?= $header; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= $header; ?></li>
    </ol>
    
    <?php echo $this->session->flashdata('message'); ?>
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-3">
                <div class="card-header"><h3 class="text-center font-weight-light my-4"><?= $header ?></h3></div>
                <div class="card-body">
                    <form action="<?= base_url('penjualan'); ?>" method="POST">
                        <div class="form-group">
                            <label for="tgl_transaksi">Tanggal Transaksi</label>
                            <input name="tgl_transaksi" type="text" class="form-control" value="<?= date('d/m/Y', $tgl_transaksi) ?>" disabled required>
                        </div>    
                        <div class="form-group">
                            <label for="kategoriId">Kategori</label>
                            <select name="kategoriId" class="form-control" id="kategoriId" required>
                                <option value="">--Pilih Kategori--</option>
                                <?php foreach($kategori as $data) : ?>
                                <option value="<?= $data['id']; ?>"><?= $data['kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                           
                        </div>
                        <div class="form-group">
                            <label for="merkId">Merk</label>
                            <select name="merkId" class="form-control" id="merkId" required>
                                <option value="">--pilih merk--</option>
                                <?php foreach ($merk as $data) : ?>
                                <option value="<?= $data['id']; ?>"><?= $data['merk']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <label for="produkId">Type</label>
                            <select name="produkId" class="form-control" id="produkId" required>
                                <option value="">--Pilih Type--</option>
                                <?php foreach($produk as $data) : ?>
                                <option value="<?= $data['id']; ?>"><?= $data['type']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input name="harga" type="number" class="form-control" id="harga" placeholder="input harga..." required>
                            <?php echo form_error('harga', '<div class="error alert-danger">', '</div>'); ?>
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