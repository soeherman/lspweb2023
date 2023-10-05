<?php
    include 'koneksi.php';
    $tawal = $_POST['awal'];
    $takhir = $_POST['akhir'];
    $po = $_POST['po'];
    $harga = $_POST['harga'];
    $fasilitas = $_POST['fasilitas'];
    $jam = $_POST['jam'];
    $tgl = $_POST['tgl'];
    $kuota = $_POST['kuota'];
    $supir = $_POST['supir'];
    $id = $_POST['id'];
    $aksi = $_POST['aksi'];

    if($aksi == "simpan"){
        mysqli_query($k,"INSERT INTO tiket(titik_awal,titik_akhir,tgl_berangkat,jam,harga,fasilitas,po,supir,kuota)VALUES('$tawal','$takhir','$tgl','$jam','$harga','$fasilitas','$po','$supir','$kuota')")or die(mysqli_error($k).mysqli_errno($k));
        echo "<script>alert('Data berhasil disimpan!');location='tiket.php'</script>";
    }elseif($aksi == "ubah"){
        mysqli_query($k,"UPDATE tiket SET 
        titik_awal='$tawal',
        titik_akhir = '$takhir',
        tgl_berangkat = '$tgl',
        jam = '$jam',
        harga = '$harga',
        fasilitas = '$fasilitas',
        po = '$po',
        supir = '$supir',
        kuota = $kuota
        WHERE id_tiket = '$id'
        ")or die(mysqli_error($k).mysqli_errno($k));
        echo "<script>alert('Data berhasil diubah!');location='tiket.php'</script>";
    }else{
        echo "<script>alert('Error tidak diketahui!');location='tiket.php'</script>";
    }