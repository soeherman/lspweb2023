<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tiket</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Daftar Tiket</h4>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Rute</th>
                                    <th>Tanggal</th>
                                    <th>Harga</th>
                                    <th>Kuota</th>
                                    <th>PO</th>
                                    <th>Fasilitas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = mysqli_query($k,"select * from tiket");
                                    $no = 1;
                                    while($d = mysqli_fetch_assoc($query)){
                                ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$d['titik_awal']?> - <?=$d['titik_akhir']?></td>
                                    <td><?=$d['tgl_berangkat']?> - <?=$d['jam']?></td>
                                    <td> <?=number_format($d['harga'])?></td>
                                    <td><?=$d['kuota']?></td>
                                    <td><?=$d['po']?> / <?=$d['supir']?></td>
                                    <td><?=$d['fasilitas']?></td>
                                    <td>
                                        <a onclick="return confirm('Apakah anda yakin ?')" href="hapus.php?id=<?=$d['id_tiket']?>" class="btn btn-sm btn-outline-danger">Hapus</a>

                                        <a href="formtiket.php?aksi=ubah&id=<?=$d['id_tiket']?>" class="btn btn-sm btn-outline-info">Ubah</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="formtiket.php" class="btn btn-primary">Tambah Tiket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>