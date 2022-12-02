<footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>&copy; <script>document.write(new Date().getFullYear());</script> Poodies</small>
            </div>
        </div>
    </footer>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda akan keluar dari aplikasi!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=site_url('logout')?>">Yakin</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="<?=base_url('')?>assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('')?>assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('')?>assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=base_url('')?>assets/dashboard/vendor/chart.js/Chart.js"></script>
    <script src="<?=base_url('')?>assets/dashboard/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=base_url('')?>assets/dashboard/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?=base_url('')?>assets/dashboard/vendor/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url('assets/js/sweetalert2.min.js')?>"></script>
    <script src="<?=base_url('')?>assets/dashboard/js/admin-datatables.js"></script>
    <script src="<?=base_url('')?>assets/dashboard/select2/select2.min.js"></script>
    <script src="<?=base_url('assets/js/custom.js')?>"></script>
    <script src="<?=base_url('')?>assets/dashboard/js/admin.js"></script>
    <script src="<?=base_url('')?>assets/dashboard/js/admin-charts.js"></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.72.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="https://labs.easyblog.it/maps/leaflet-search/src/leaflet-search.js"></script>
    <?php if($this->uri->segment(1) == "kelola-umkm" || $this->uri->segment(1) == "kelola-jasa" && $this->uri->segment(2) == "add") { ?>
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

        // L.Control.geocoder({
        //     position: 'topleft',
        //     placeholder: 'Cari lokasi...',
        // }).addTo(map);

        // var data = [
        //             {"loc":[-6.396998391526812,106.88991548934607], "title": 'Test'},
        // ];

        // var markersLayer = new L.LayerGroup();
        // map.addLayer(markersLayer);
        // var controlSearch = new L.Control.Search({
        //     position:'topleft',
        //     // layer: markersLayer,
        //     initial: false,
        //     zoom: 17,
        //     markerLocation: true
        // })
        // map.addControl(controlSearch);

        // var title = "Test",  //value searched
        //     loc = [-6.396998391526812,106.88991548934607],      //position found
        //     marker = new L.Marker(new L.latLng(loc), {title: title} );//se property searched
        // marker.bindPopup('title: '+ title );
        // markersLayer.addLayer(marker);

        // $('#textsearch').on('keyup', function(e) {
        //     controlSearch.searchText(e.target.value);
        // });

        function onLocationFound(e) {
            var locationMarker;
            if (locationMarker != null) {
                map.removeLayer(locationMarker);
            }
            locationMarker = L.marker(e.latlng);
            locationMarker.addTo(map);
            locationMarker.bindPopup("<p class='text-center'>Ini adalah lokasi Anda.</p>");
            locationMarker.openPopup();

            document.getElementById("lat_long").value = e.latitude + "," + e.longitude;

            map.on('click', function(e) {
                if (locationMarker != null) {
                    map.removeLayer(locationMarker);
                }

                document.getElementById("lat_long").value = e.latlng['lat'] + "," + e.latlng['lng'];

                locationMarker = new L.marker(e.latlng);
                locationMarker.bindPopup("<p class='text-center'>Ini adalah lokasi yang Anda tandai.</p>");
                locationMarker.openPopup();
                locationMarker.addTo(map);
                console.log("Your coordinate is: Lat: " + e.latlng['lat'] + " Long: " + e.latlng['lng']);
            });
            console.log("Your coordinate is: Lat: " + e.latlng['lat'] + " Long: " + e.latlng['lng']);
                lc.stop();
        }

        map.on('locationfound', onLocationFound);
        function onLocationError(e) {
            alert(e.message);
        }
        map.on('locationerror', onLocationError);
        map.locate({setView: true, maxZoom: 50});
    </script>
    <?php } else if($this->uri->segment(1) == "kelola-umkm" || $this->uri->segment(1) == "kelola-jasa" && $this->uri->segment(2) == "edit") { ?>
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
            locationMarker = L.marker([<?=$umkm_jasa['lat_long']?>]);
            locationMarker.addTo(map);
            locationMarker.bindPopup("<p class='text-center'>Ini adalah lokasi toko Anda.</p>");
            locationMarker.openPopup();

            document.getElementById("lat_long").value = "<?=$umkm_jasa['lat_long']?>";

            map.on('click', function(e) {
                if (locationMarker != null) {
                    map.removeLayer(locationMarker);
                }

                document.getElementById("lat_long").value = e.latlng['lat'] + "," + e.latlng['lng'];

                locationMarker = new L.marker(e.latlng);
                locationMarker.bindPopup("<p class='text-center'>Ini adalah lokasi yang Anda tandai.</p>");
                locationMarker.openPopup();
                locationMarker.addTo(map);
                console.log("Your coordinate is: Lat: " + e.latlng['lat'] + " Long: " + e.latlng['lng']);
            });
            console.log("Your coordinate is: Lat: " + e.latlng['lat'] + " Long: " + e.latlng['lng']);
                lc.stop();
        }

        map.on('locationfound', onLocationFound);
        function onLocationError(e) {
            alert(e.message);
        }
        map.on('locationerror', onLocationError);
        map.locate({setView: true, maxZoom: 50});
    </script>
    <?php } ?>
</body>
</html>