<?php
    include('../../koneksi.php');
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $keterangan = $_POST['keterangan'];
    mysqli_query($koneksi, "UPDATE tb_barang SET nama_barang='$nama_barang', harga='$harga', stok='$stok', keterangan='$keterangan' where id_barang ='$id_barang'") or die(mysqli_error($koneksi));
?>