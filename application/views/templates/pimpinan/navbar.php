
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <div class="navbar-brand">
        <img width="40px" class="rounded-circle" src="<?= base_url('assets/img/gambar1.png'); ?>" alt="">
        <a class="navbar-brand" href="index.html">Toko Anugerah</a>
    </div>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
    </div>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link justify-content-center border-bottom border-1 border-white text-capitalize" href="<?= base_url('pimpinan/dashboard'); ?>">
                        <div class="sb-nav-link-icon">
                            <img width="30px" src="<?= base_url('assets/img/profile.png'); ?>" alt="">
                        </div>
                        <?= $this->session->userdata('username') ?>
                    </a>

                    <a class="nav-link" href="<?= base_url('pimpinan/dashboard'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

					<a class="nav-link" href="<?= base_url('pimpinan/grafik'); ?>">
						<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
						Grafik
					</a>

                    <a class="nav-link" href="<?= base_url('pimpinan/riwayat'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-history"></i></div>
                        Riwayat Penjualan
                    </a>

                    <a class="nav-link" href="<?= base_url('pimpinan/produk'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-th"></i></div>
                        Produk
                    </a>

                    <a class="nav-link" href="<?= base_url('pimpinan/classter'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-th"></i></div>
                        Rekomendasi Stok
                    </a>

                    <a class="nav-link" href="<?= base_url('pimpinan/tentang'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                        Tentang Kami
                    </a>

                    <a class="nav-link" href="<?= base_url('pimpinan/setting'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                        Setting
                    </a>

                    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                        Logout
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer text-capitalize">
                <div class="small">Logged in as:</div>
                <?= $this->session->userdata('username') ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
