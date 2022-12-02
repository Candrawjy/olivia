    <footer>
        <div class="wave footer <?php if($this->uri->segment(1) == "" || $this->uri->segment(1) == "search" || $this->uri->segment(1) == "bantuan" || $this->uri->segment(1) == "review"){echo 'gray';}?>"></div>
        <div class="container margin_60_40 fix_mobile">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_1">Profil</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <ul>
                            <li>
                                <img src="<?=base_url('')?>assets/img/logo/logo.png" alt="Logo" class="img-fluid mb-3" width="30%">
                                <p>Poodies merupakan sebuah website portal informasi untuk mencari UMKM yang berfokus dibidang makanan dan jasa kreatif yang terdapat di daerah Jabodebek (Jakarta, Bogor, Depok dan Bekasi).</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_2">Lainnya</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_2">
                        <ul>
                            <!-- <li><a href="<?=site_url('berita')?>">Berita</a></li> -->
                            <li><a href="<?=site_url('bantuan')?>">Bantuan</a></li>
                            <li><a href="<?=site_url('kontak-kami')?>">Kontak Kami</a></li>
                            <li><a href="<?=site_url('tentang-kami')?>">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_3">Kontak</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="icon_house_alt"></i>Jl. Kumbang No.14, RT.02/RW.06, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128</li>
                            <li><i class="icon_mobile"></i>0813-1129-3294</li>
                            <li><i class="icon_mail_alt"></i><a href="mailto:poodiesipb@gmail.com">Poodiesipb@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_4">Ikuti Kami</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_4">
                        <div class="follow_us">
                            <ul class="mt-2">
                                <li><a href="https://twitter.com/vokasiipb" target="_blank"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?=base_url('')?>assets/img/twitter_icon.svg" alt="" class="lazy"></a></li>
                                <li><a href="https://id-id.facebook.com/vokasiipb/" target="_blank"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?=base_url('')?>assets/img/facebook_icon.svg" alt="" class="lazy"></a></li>
                                <li><a href="https://www.instagram.com/sekolahvokasiipb" target="_blank"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?=base_url('')?>assets/img/instagram_icon.svg" alt="" class="lazy"></a></li>
                                <li><a href="https://www.youtube.com/channel/UCc1K1TZY4M7PRbx3c3G8MLQ/videos" target="_blank"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?=base_url('')?>assets/img/youtube_icon.svg" alt="" class="lazy"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row add_bottom_25">
                <div class="offset-lg-6 col-lg-6">
                    <ul class="additional_links">
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><span>&copy; <script>document.write(new Date().getFullYear());</script> Poodies - SV IPB University</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div id="toTop"></div>

    <script src="<?=base_url('')?>assets/js/common_scripts.min.js"></script>
    <script src="<?=base_url('')?>assets/js/common_func.js"></script>
    <script src="<?=base_url('')?>assets/assets/validate.js"></script>
    <script src="<?=base_url('assets/js/sweetalert2.min.js')?>"></script>
    <script src="<?=base_url('assets/js/custom.js')?>"></script>

    <script src="<?=base_url('')?>assets/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?=base_url('')?>assets/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?=base_url('')?>assets/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?=base_url('')?>assets/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?=base_url('')?>assets/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?=base_url('')?>assets/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?=base_url('')?>assets/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?=base_url('')?>assets/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?=base_url('')?>assets/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?=base_url('')?>assets/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?=base_url('')?>assets/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

    <script src="<?=base_url('')?>assets/js/beranda.js"></script>
    <script src="<?=base_url('')?>assets/js/sticky_sidebar.min.js"></script>
    <script src="<?=base_url('')?>assets/js/sticky-kit.min.js"></script>
    <script src="<?=base_url('')?>assets/js/specific_detail.js"></script>
    <?php if($this->uri->segment(1) == "review") { ?>
    <script src="<?=base_url('')?>assets/js/specific_review.js"></script>
    <?php } else if($this->uri->segment(1) != "review") { ?>
    <script src="<?=base_url('')?>assets/js/specific_listing.js"></script>
    <?php } ?>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.72.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="https://labs.easyblog.it/maps/leaflet-search/src/leaflet-search.js"></script>
    <?php if($this->uri->segment(1) == "lokasi") { ?>
    <script type="text/javascript">
        var map = L.map('map').setView([-6.586674786040669, 106.80608902528489],13);

        var basemap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: ''
        });
        basemap.addTo(map);

        var lc = L.control.locate({
            position: 'topleft',
            showCompass: true,
            showPopup: true,
            locateOptions: {
                enableHighAccuracy: true
            },
            strings: {
                title: "Tentukan lokasi Saya"
            },
            flyTo: true,
        }).addTo(map);

        function onLocationFound(e) {
            var locationMarker;
            if (locationMarker != null) {
                map.removeLayer(locationMarker);
            }
            locationMarker = L.marker(e.latlng);
            locationMarker.addTo(map);
            locationMarker.bindPopup("<p class='text-center'>Ini adalah lokasi Anda.</p>");
            locationMarker.openPopup();
            console.log("Your coordinate is: Lat: " + e.latlng['lat'] + " Long: " + e.latlng['lng']);
                lc.stop();
        }

        var data = [
        <?php foreach ($lokasi as $data) : ?>
            <?php if ($data->jenis == 1) { $datas = 'umkm'; } else { $datas = 'jasa'; } ?>
            {"loc":[<?=$data->lat_long?>], "title": "<?=$data->nama_umkmjasa?>", "thumbnail":"<?=base_url('uploads/thumbnail/'.$data->thumbnail)?>", "jenis": "<?=$data->target?>", "slug": "<?=$data->slug?>", "datas": "<?=$datas?>"},
        <?php endforeach ?>
        ];

        var markersLayer = new L.LayerGroup();
        map.addLayer(markersLayer);

        var controlSearch = new L.Control.Search({
            layer: markersLayer,
            initial: false,
            zoom: 30,
            marker: false
        });
        map.addControl(controlSearch);

        for(i in data) {
            var title = data[i].title,
                loc = data[i].loc,
                thumbnail = data[i].thumbnail,
                jenis = data[i].jenis,
                slug = data[i].slug,
                datas = data[i].datas,
                myIcon = L.icon({
                    iconUrl: data[i].thumbnail,
                    iconSize: [60, 60],
                });
                marker = new L.Marker(new L.latLng(loc), {icon: myIcon, title: title});
                marker.bindPopup("<p class='text-center'><b>Nama : </b>" + title + " <br> <b>Jenis : </b>" + jenis + "</p> <center><a href='<?=site_url('')?>"+datas+"/detail/"+slug+"' class='text-center'><b>Lihat Detail</b></a></center></p>").openPopup();
                markersLayer.addLayer(marker);
        }

        <?php foreach ($lokasi as $lokasi) : ?>
            <?php if ($lokasi->jenis == 1) { $data = 'umkm'; } else { $data = 'jasa'; } ?>
            // var myIcon = L.icon({
            // iconUrl: '<?=base_url('uploads/thumbnail/'.$lokasi->thumbnail)?>',
            // iconSize: [50, 50],
            // });
            // L.marker([<?=$lokasi->lat_long?>], {icon: myIcon}).addTo(map)
            // .bindPopup("<p class='text-center'><b>Nama : </b> <?=$lokasi->nama_umkmjasa?> <br> <b>Jenis : </b> <?=$lokasi->target?></p> <center><a href='<?=site_url($data.'/detail/').$lokasi->slug?>' class='text-center'><b>Lihat Detail</b></a></center></p>").openPopup();
        <?php endforeach ?>

        map.on('locationfound', onLocationFound);
        function onLocationError(e) {
            alert(e.message);
        }
        map.on('locationerror', onLocationError);
        map.locate({setView: true, maxZoom: 50});
        // map.locate({maxZoom: 13});
    </script>
    <?php } ?>
</body>
</html>