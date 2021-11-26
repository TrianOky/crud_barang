<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: ../login.php");
    }
?>

<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="dataBarang.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Data Barang</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transaksi.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Daftar Transaksi</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?= $_SESSION['username'] ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome! <?= $_SESSION['username'] ?></h6>
                </div>
                <a href="../logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <button class="btn btn-sm btn-neutral" onclick="modalTambah('show')">
                Tambah Barang
              </button>
            </div>
          </div>
          <!-- Card stats -->
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid my-5">
      <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-primary text-white">
              <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include('../koneksi.php'); //memanggil file koneksi
                $datas = mysqli_query($koneksi, "select * from tb_barang") or die(mysqli_error($koneksi));
                //script untuk menampilkan data barang
  
                $no = 1;//untuk pengurutan nomor
  
                //melakukan perulangan
                while($row = mysqli_fetch_assoc($datas)) {
              ?>	
  
            <tr>
              <td><?= $no; ?></td>
              <td><?= $row['kode_barang']; ?></td>
              <td><?= $row['nama_barang']; //untuk menampilkan nama ?></td>
              <td>Rp <?= $row['harga']; ?></td>
              <td><?= $row['stok']; ?></td>
              <td><?= $row['keterangan']; ?></td>
              <td>
                  <button 
                    id-barang="<?= $row['id_barang']; ?>" 
                    kode-barang="<?= $row['kode_barang']; ?>"
                    nama-barang="<?= $row['nama_barang']; ?>"
                    harga="<?= $row['harga']; ?>"
                    stok="<?= $row['stok']; ?>"
                    keterangan="<?= $row['keterangan']; ?>"
                    class="btn btn-sm btn-warning modalEditBarang"
                    >
                      Edit
                    </button>
                  <button
                      type="button"
                     class="btn btn-sm btn-danger deleteBarang"
                     id-barang="<?= $row['id_barang']; ?>"
                  >
                    Hapus
                  </button>
              </td>
            </tr>
  
              <?php $no++; } ?>
            </tbody>
          </table>
      </div>
    </div>
  </div>





  <div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Barang</h5>
      </div>
        <form id="formTambah">
        <div class="modal-body">
          <div class="mb-3">
          <?php
          include('../koneksi.php');
          $datas = mysqli_query($koneksi, "select max(kode_barang) as kode from tb_barang where 1") or die(mysqli_error($koneksi));
          $hasil = mysqli_fetch_assoc($datas);
          $kode = (int) str_replace("KYY", "", $hasil['kode']);
        ?>
            <label class="form-label">Kode Barang</label>
            <input type="text" class="form-control" value="KYY<?= $kode+1 ?>" name='kode_barang' disabled>
            <input type="hidden" class="form-control" value="KYY<?= $kode+1 ?>" name='kode_barang'>
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name='nama_barang'>
          </div>
          <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" class="form-control" name='harga'>
          </div>
          <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="text" class="form-control" name='stok'>
          </div>
          <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea type="text" class="form-control" name='keterangan'></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="modalTambah('hide')">Close</button>
          <button type="button" id="tambahData" class="btn btn-primary">Simpan Data</button>
        </div>
        </form>
      </div>
    </div>
  </div>





  <div class="modal fade" id="modalEdit" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Barang</h5>
      </div>
        <form id="updateForm">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="text" class="form-control kode_barang" name='kode_barang' disabled>
            <input type="hidden" class="form-control kode_barang" name='kode_barang'>
            <input type="hidden" class="form-control" id="id_barang" name='id_barang'>
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name='nama_barang'>
          </div>
          <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name='harga'>
          </div>
          <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="text" class="form-control" id="stok" name='stok'>
          </div>
          <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea type="text" class="form-control" id="keterangan" name='keterangan'></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="modalEditHide()">Close</button>
          <button type="button" id="editData" class="btn btn-primary">Simpan Perubahan</button>
        </div>
        </form>
      </div>
    </div>
  </div>








  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.1/dist/sweetalert2.all.min.js"></script>

<script>
$('.modalEditBarang').on('click', e => {
  $('.kode_barang').val($(e.target).attr('kode-barang'))
  $('#id_barang').val($(e.target).attr('id-barang'))
  $('#nama_barang').val($(e.target).attr('nama-barang'))
  $('#harga').val($(e.target).attr('harga'))
  $('#stok').val($(e.target).attr('stok'))
  $('#keterangan').val($(e.target).attr('keterangan'))
  $('#modalEdit').modal('show')
})
$('#editData').on('click', (e) => {
  const data = $('#updateForm').serialize()
  $.ajax({
    type: 'POST',
    url: 'barang/edit.php',
    data,
    success: () => {
      $('#modalEdit').modal('hide')
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 1000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('click', Swal.close)
        }
      })

      Toast.fire({
        icon: 'success',
        title: 'Berhasil di update'
      }).then(() => location.reload())
    }
  })
})
$('#tambahData').on('click', (e) => {
  const data = $('#formTambah').serialize()
  $.ajax({
    type: 'POST',
    url: 'barang/tambah.php',
    data,
    success: () => {
      $('#modalEdit').modal('hide')
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 1000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('click', Swal.close)
        }
      })

      Toast.fire({
        icon: 'success',
        title: 'Berhasil di simpan'
      }).then(() => location.reload())
    }
  })
})
$('.deleteBarang').on('click', (e) => {
  Swal.fire({
    title: 'Apakah anda yakin?',
    text: "Data ini akan dihapus dan tidak dapat dikembalikan!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, hapus ini!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: 'POST',
        url: 'barang/hapus.php',
        data: 'id_barang=' + $(e.target).attr('id-barang'),
        success: () => {
          $('#modalEdit').modal('hide')
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('click', Swal.close)
            }
          })

          Toast.fire({
            icon: 'success',
            title: 'Berhasil di simpan'
          }).then(() => location.reload())
        }
      })
    }
  })
})
const modalEditHide = () => $('#modalEdit').modal('hide')
const modalTambah = toggle => $('#modalTambah').modal(toggle)
</script>
</body>

</html>
