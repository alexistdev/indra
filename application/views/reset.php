
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $header ?></title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <?php echo $this->session->flashdata('message'); ?>
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><?= $header ?></h3></div>
                                    <div class="card-body">
                                        <form action="<?= base_url('lupa_password/'.$token) ?>" method="post"; ?>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Password Baru </label>
                                                <input name="password" class="form-control py-4" id="password" type="password" placeholder="Masukkan password baru" value="<?= set_value('password') ?>"  required/>
                                                <?php echo form_error('password', '<div class="error alert-danger">', '</div>'); ?>
                                            </div>
											<div class="form-group">
												<label class="small mb-1" for="password2">Ulangi Password Baru </label>
												<input name="password2" class="form-control py-4" id="password2" type="password" placeholder="Ulangi password baru" value="<?= set_value('password2') ?>"  required/>
												<?php echo form_error('password2', '<div class="error alert-danger">', '</div>'); ?>
											</div>

                                            <div class="form-group mt-4 mb-0">
                                                <div></div>
												<a href="<?= base_url('auth'); ?>"><button type="button" class="btn btn-danger" >Back</button></a>
                                                <button type="submit" class="btn btn-primary ml-1">Ubah Password</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
