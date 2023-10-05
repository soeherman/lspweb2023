<?php
    include "koneksi.php";
    $tipe = "simpan";
    $id = "";
    $tawal = "";
    $takhir = "";
    $po = "";
    $harga = "";
    $fasilitas = "";
    $jam = "";
    $tgl = "";
    $kuota = "";
    $supir = "";
    if(@$_GET['aksi'] == "ubah"){
        $tipe = "ubah";
        $id = $_GET['id'];
        $q = mysqli_query($k,"select * from tiket where id_tiket='$id'");
        $r = mysqli_fetch_assoc($q);
        $tawal = $r['titik_awal'];
        $takhir = $r['titik_akhir'];
        $po = $r['po'];
        $harga = $r['harga'];
        $fasilitas = $r['fasilitas'];
        $jam = $r['jam'];
        $tgl = $r['tgl_berangkat'];
        $kuota = $r['kuota'];
        $supir = $r['supir'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tiket</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
    <form action="aksi.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="aksi" value="<?=$tipe?>">
        <input type="hidden" name="id" value="<?=$id?>">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Form Tiket</h4>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Titik Awal</label>
                                    <input type="text" name="awal" class="form-control" value="<?=$tawal?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Titik Akhir</label>
                                    <input type="text" name="akhir" class="form-control" value="<?=$takhir?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tgl" class="form-control" value="<?=$tgl?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Jam</label>
                                    <input type="time" name="jam" class="form-control" value="<?=$jam?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="number" name="harga" class="form-control" value="<?=$harga?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">PO</label>
                                    <input type="text" name="po" class="form-control" value="<?=$po?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Supir</label>
                                    <input type="text" name="supir" class="form-control" value="<?=$supir?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Kuota</label>
                                    <input type="number" name="kuota" class="form-control" value="<?=$kuota?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Fasilitas</label>
                                    <input type="text" name="fasilitas" class="form-control" value="<?=$fasilitas?>">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Simpan" class="btn btn-primary">
                        <a href="formtiket.php" class="btn btn-outline-primary">Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>