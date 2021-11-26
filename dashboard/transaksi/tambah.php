<?php
    include('../../koneksi.php');
    $kode_transaksi = $_POST['kode_transaksi'];
    $id_barang = $_POST['id_barang'];
    $qty = $_POST['qty'];
    $date = date("Y-m-d");

    $queryDataBarang = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id_barang = $id_barang");
    $dataBarang = mysqli_fetch_assoc($queryDataBarang);
    $hargaBarang = (int) $dataBarang['harga'];
    $totalHarga = number_format($hargaBarang * $qty,0,',','.');

    $updateStok = (int) $dataBarang['stok'] - $qty;
    mysqli_query($koneksi, "UPDATE tb_barang SET stok='$updateStok' WHERE id_barang ='$id_barang'");

    $datas = mysqli_query($koneksi, "INSERT INTO tb_transaksi (kode_transaksi, tanggal, kode_barang, qty, total_harga, total_bayar) VALUES ('$kode_transaksi', '$date', '$dataBarang[kode_barang]', '$qty', '$totalHarga', '$totalHarga' )") or die(mysqli_error($koneksi));
    ?>