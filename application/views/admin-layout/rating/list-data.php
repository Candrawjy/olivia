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
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Penilai</th>
                                <th>Nama UMKM/Jasa Kreatif</th>
                                <th>Rating (1-10)</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                foreach ($rating as $rating) : ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=ucfirst($rating->nama_user)?></td>
                                <td><?=ucfirst($rating->nama_umkmjasa)?></td>
                                <td><?=ucfirst($rating->jml_rating)?></td>
                                <td><?=ucfirst($rating->deskripsi)?></td>
                                <td>
                                    <?php if($rating->status == '0') { ?>
                                    <i class="pending">Ditinjau</i>
                                    <?php } else if($rating->status == '1') { ?>
                                    <i class="approved">Diterima</i>
                                    <?php } else { ?>
                                    <i class="cancel">Ditolak</i>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if($this->session->userdata('id_role') != '2') { ?>
                                    <a href="<?=base_url('rating/edit/').$rating->id_rating?>" class="btn_1">Edit</a><br>
                                    <a href="<?=base_url('rating/delete/').$rating->id_rating?>" class="btn_1 gray" id="btn-hapus">Hapus</a>
                                    <?php } else { ?>
                                        Tidak tersedia
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>