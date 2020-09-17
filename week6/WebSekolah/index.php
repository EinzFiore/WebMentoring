<?php include('layout/user/header.php'); session_start();?>
<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php">OneSchool</a></div>
          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="login.php" class="nav-link"><span>Login</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('vendor/user/images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1 data-aos="fade-up" data-aos-delay="100">Form Pendaftaran</h1>
                  <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                  <p data-aos="fade-up" data-aos-delay="300">
                </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <?php
                    if(!empty($_SESSION['success'])){
                  ?>
                  <?= $_SESSION['success'] ?>
                  <?php 
                    unset($_SESSION['success']);
                    }
                  ?>
                  <form action="Crud.php" method="post" class="form-box" enctype="multipart/form-data">
                    <h3 class="h4 text-black mb-4">Daftar</h3>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap"></textarea>
                    </div>
                    <div class="form-group mb-4">
                      <input type="text" class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa">
                    </div>
                    <div class="form-group mb-4">
                        <label>Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option>-- Pilih Jurusan --</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Sastra Wibu">Sastra Wibu</option>
                        </select>   
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Foto</label>
                        <input type="file" name="foto" class="form-control-file">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" name="daftar" value="Daftar">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php include('layout/user/footer.php') ?>
