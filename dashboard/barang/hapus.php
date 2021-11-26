<?php				
    include('../../koneksi.php');
    $id_barang = $_POST['id_barang'];
    mysqli_query($koneksi, "DELETE FROM tb_barang WHERE id_barang ='$id_barang'") or die(mysqli_error($koneksi));
?>