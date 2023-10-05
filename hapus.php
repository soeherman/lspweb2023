<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    mysqli_query($k,"DELETE FROM tiket where id_tiket = '$id'");
    echo "<script>location='tiket.php'</script>";