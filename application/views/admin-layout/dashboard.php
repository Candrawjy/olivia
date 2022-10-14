    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?=site_url('dashboard')?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
            <?php if ($this->session->userdata('id_role') == '1') { ?>
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="mr-5">
                                <h5><?=number_format($rating)?> Penilaian</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="<?=site_url('rating')?>">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">
                                <h5><?=number_format($umkm)?> Data UMKM</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="<?=site_url('kelola-umkm')?>">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-handshake-o"></i>
                            </div>
                            <div class="mr-5">
                                <h5><?=number_format($jasa)?> Jasa Kreatif</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="<?=site_url('kelola-jasa')?>">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-heart"></i>
                            </div>
                            <div class="mr-5">
                                <h5><?=number_format($bookmark)?> Wishlist</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="<?=site_url('wishlist-saya')?>">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <h2></h2>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h5><i class="fa fa-hand-peace-o"></i>Selamat datang, <?=ucfirst($this->session->userdata('nama_user'))?>!</h5>
                </div>
                <div class="card-body p-3">
                    <div class="col-lg-4 offset-lg-4">
                        <img src="<?=base_url('assets/dashboard/img/empty_cart.svg')?>" alt="Icon" class="img-fluid mt-3 mb-3">
                    </div>
                </div>
            </div>
        </div>
    </div>