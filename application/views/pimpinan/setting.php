<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <?php echo $this->session->flashdata('message'); ?>
                <div class="card-header"><h3 class="text-center font-weight-light my-4"><?= $header ?> dan Reset Password</h3></div>
                <div class="card-body">
                    <form action="<?= base_url('pimpinan/setting') ?>" method="post"; ?>
                        <div class="form-group">
                            <label class="small mb-1" for="password">password</label>
                            <input name="password" class="form-control py-4" id="password" type="password" placeholder="Enter password" required/>
                            <?php echo form_error('password', '<div class="error alert-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="password2">Ulangi Password</label>
                            <input name="password2" class="form-control py-4" id="password2" type="password" placeholder="Enter password" required/>
                            <?php echo form_error('password2', '<div class="error alert-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <div></div>
                            <button type="submit" class="btn btn-primary" href="index.html">Ubah Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

