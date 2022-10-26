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
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Peran</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                foreach ($pengguna as $pengguna) : ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=ucfirst($pengguna->nama_user)?></td>
                                <td><?=ucfirst($pengguna->email_user)?></td>
                                <td><?=$pengguna->nohp_user?></td>
                                <td>
                                    <?php if($pengguna->id_role == '1') { ?>
                                        Administrator
                                    <?php } else if($pengguna->id_role == '2') { ?>
                                        User
                                    <?php } else { ?>
                                        Partner
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if($pengguna->is_active == '0') { ?>
                                        Belum Verifikasi
                                    <?php } else { ?>
                                        Terverifikasi
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if($pengguna->email_user != 'candraw71@gmail.com' && $pengguna->email_user != 'admin@gmail.com' && $pengguna->email_user != 'user@gmail.com' && $pengguna->email_user != 'partner@gmail.com') { ?>
                                    <a href="<?=base_url('kelola-pengguna/edit/').$pengguna->id_user?>" class="btn_1">Edit</a><br>
                                    <a href="<?=base_url('kelola-pengguna/delete/').$pengguna->id_user?>" class="btn_1 gray" id="btn-hapus">Hapus</a>
                                    <?php } else { ?>
                                        <p>Aksi tidak tersedia</p>
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