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
                    <p>merk : <?= $dataCluster['merk']; ?></p>
                    <p>type : <?= $dataCluster['type']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>