    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?=site_url('dashboard')?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
            <h2></h2>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h6><?=$title?></h6>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button"data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    API Lihat Data Produk
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>API data produk dapat dilihat pada link berikut : <a href="<?=site_url('api/produk')?>">Lihat Data Produk</a></p>
                                Hasil jika memakai postman :
                                <img src="<?=base_url('assets/dashboard/img/api/lihat-data.png')?>" alt="Icon" class="img-fluid mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"data-toggle="collapse" data-target="#collapseOned" aria-expanded="true" aria-controls="collapseOned">
                                    API Lihat Data Produk Berdasarkan ID Produk
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOned" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>API data produk berdasarkan ID Produk dapat dilihat pada link berikut : <a href="<?=site_url('api/produk/11')?>">Lihat Data Produk By ID Produk</a></p>
                                Hasil jika memakai postman :
                                <img src="<?=base_url('assets/dashboard/img/api/lihat-data-by-id.png')?>" alt="Icon" class="img-fluid mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    API Tambah Data Produk
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>API tambah data produk dapat dilihat pada link berikut : <a href="<?=site_url('api/produk/add')?>">Tambah Data Produk</a></p>
                                Hasil jika memakai postman :
                                <img src="<?=base_url('assets/dashboard/img/api/tambah-data.png')?>" alt="Icon" class="img-fluid mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    API Update Data Produk
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>API update data produk dapat dilihat pada link berikut : <a href="<?=site_url('api/produk/update')?>">Update Data Produk</a></p>
                                Hasil jika memakai postman :
                                <img src="<?=base_url('assets/dashboard/img/api/update-data.png')?>" alt="Icon" class="img-fluid mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    API Hapus Data Produk
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>API hapus data produk dapat dilihat pada link berikut : <a href="<?=site_url('api/produk/delete')?>">Hapus Data Produk</a></p>
                                Hasil jika memakai postman :
                                <img src="<?=base_url('assets/dashboard/img/api/delete-data.png')?>" alt="Icon" class="img-fluid mb-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>