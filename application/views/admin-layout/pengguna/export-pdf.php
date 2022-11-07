<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #e54750;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center">
            <h3> Laporan Data Pengguna </h3>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Peran</th>
                    <th>Status</th>
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
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</html>