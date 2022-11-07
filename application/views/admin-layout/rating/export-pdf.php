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
            <h3> Laporan Data Rating </h3>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Penilai</th>
                    <th>Nama UMKM/Jasa Kreatif</th>
                    <th>Rating (1-10)</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
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
                                Ditinjau
                            <?php } else if($rating->status == '1') { ?>
                                Diterima
                            <?php } else { ?>
                                Ditolak
                            <?php } ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</html>