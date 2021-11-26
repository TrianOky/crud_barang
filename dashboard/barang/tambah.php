<?php
    include('../../koneksi.php');
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $keterangan = $_POST['keterangan'];
    mysqli_query($koneksi, "INSERT INTO tb_barang (`kode_barang`, `nama_barang`, `harga`, `stok`, `keterangan`) VALUES ('$kode_barang', '$nama_barang', '$harga', '$stok', '$keterangan')") or die(mysqli_error($koneksi));
?>