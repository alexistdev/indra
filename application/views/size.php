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
                    <a class="btn btn-primary ml-auto float-right"  href="<?= base_url('size/formAddSize'); ?>">
                        <i class="fas fa-plus "></i>
                        tambah
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="45px">No</th>
                                    <th>Size</th>
                                    <th width="90px">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Size</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data as $size) : ?>
                                    
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $size['size']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="<?= base_url('size/editSize/'.$size['id']); ?>"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" href="<?= base_url('size/deleteSize/'.$size['id']); ?>" onclick="return confirm('Are you sure you want to delete this?')"><i class="fas fa-trash"></i></a>
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