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
                    <form action="<?= base_url('merk/editMerk/'.$data['id']); ?>" method="POST">
                        <div class="form-group">
                            <label class="mb-1" for="merk">Merk</label>
                            <input class="form-control py-4" id="merk" name="merk" type="text" placeholder="input nama merk..." value="<?= $data['merk']; ?>"/>
                            <?php echo form_error('merk', '<div class="error alert-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <div></div>
                            <button type="submit" class="btn btn-primary" >Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>