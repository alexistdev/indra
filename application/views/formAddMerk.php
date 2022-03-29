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
                    <form action="<?= base_url('merk/formAddMerk'); ?>" method="POST">
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input name="merk" type="text" class="form-control" id="merk" placeholder="input nama merk..." required autofocus>
                            <?php echo form_error('merk', '<div class="error alert-danger">', '</div>'); ?>
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