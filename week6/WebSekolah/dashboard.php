<?php 
    session_start();
    if(!isset($_SESSION['username'])){
      echo '
      <script type="text/javascript"> 
        alert("Silahkan login terlebih dahulu !!"); 
        window.location.href = "login.php";
      </script>;
      ';
      // header('location:login.php');
    }
    // var_dump($_SESSION);
    // die;

    $username = $_SESSION["username"];

    include('layout/admin/header.php');
    include('layout/admin/navbar.php');
    include('layout/admin/sidebar.php');
?>
<!-- Main Content -->
<div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Data Mahasiswa</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Data Mahasiswa</a></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
            <!-- Cek Role ID (admin) -->
            <?php if($_SESSION['role_id'] == 1) : ?>
              <div class="card">
                <div class="card-header">
                  <h4>Data Mahasiswa</h4>
                </div>
                <!-- Ambil data mahasiswa -->
                <?php 
                  include('db_connect.php');
                  $dataMahasiswa = mysqli_query($conn, "SELECT nim,nama,jurusan,alamat,foto,email FROM mahasiswa");
                ?>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>NIM</th>
                        <th>Nama Lengkap</th>
                        <th>Jurusan</th>
                        <th>Detail</th>
                      </tr>
                      <?php 
                        foreach ($dataMahasiswa as $mahasiswa):
                      ?>
                      <tr>
                        <td><a href="#"><?= $mahasiswa['nim'] ?></a></td>
                        <td class="font-weight-600"><?= $mahasiswa['nama'] ?></td>
                        <td><div class="badge badge-success"><?= $mahasiswa['jurusan'] ?></div></td>
                        <td>
                          <button class="btn btn-primary" data-toggle="modal" data-target="#detail<?= $mahasiswa['nim'] ?>">Detail</button>
                        </td>
                      </tr>
                        <?php endforeach; ?>
                    </table>
                  </div>
                </div>
              </div>
            <?php endif; ?>
            </div>
          </div>
        </section>
      </div>
      <?php foreach($dataMahasiswa as $mahasiswa) : ?>
      <!-- Modal detail -->
<div class="modal fade" id="detail<?= $mahasiswa['nim'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail <?= $mahasiswa['nama'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-5">
            <img class="img-thumbnail img-fluid" width="100%" src="assets/image/<?= $mahasiswa['foto'] ?>" alt="">
          </div>
            <div class="col-sm-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Nama  : </strong>
                        <?= $mahasiswa['nama'] ?></li>
                    <li class="list-group-item"><strong>NIM   : </strong>
                        <?= $mahasiswa['nim'] ?></li>
                    <li class="list-group-item"><strong>Email : </strong>
                        <?= $mahasiswa['email'] ?></li>
                    <li class="list-group-item"><strong>Kampus: </strong>
                        <?= $mahasiswa['jurusan'] ?></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      <?php endforeach; ?>
    <?php 
        include('layout/admin/footer.php');
    ?>