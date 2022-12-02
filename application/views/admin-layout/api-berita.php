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
                <p>API data berita dapat diakses pada link berikut : <a href="https://newsapi.org/v2/top-headlines?country=id&category=business&apiKey=59ad660d50c94810b690e17c4a8a549b">API Berita</a></p>
                Hasil jika memakai postman :
                <img src="<?=base_url('assets/dashboard/img/api/api-berita.png')?>" alt="Icon" class="img-fluid mb-3">
            </div>
        </div>
    </div>