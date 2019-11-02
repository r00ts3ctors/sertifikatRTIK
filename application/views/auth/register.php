<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register Lengkap</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg mx-auto">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="<?=base_url('auth/registrasi') ?>" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nama" value="<?=set_value('nama') ?>" class="form-control form-control-user" placeholder="Nama Lengkap ex. Fakrullah Maulana">
                     <?=form_error('nama', '<small class="text-warning">'.'</small>') ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="tlp" class="form-control form-control-user" value="<?php echo set_value('tlp') ?>" placeholder="No. Telepon ex. 082161677531">
                    <?=form_error('tlp', '<small class="text-warning">'.'</small>') ?>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="email" class="form-control form-control-user" placeholder="Alamat Email" value="<?php echo set_value('email') ?>">
                    <?=form_error('email', '<small class="text-warning">'.'</small>') ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="kota" class="form-control form-control-user" value="<?=set_value('kota') ?>" placeholder="Kota Asal ex. Aceh">
                    <?=form_error('kota', '<small class="text-warning">'.'</small>') ?>
                  </div>
                </div>
                <!-- <div class="form-group">
                <input type="email" class="form-control form-control-user"  placeholder="Kegiatan">
              </div> -->

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password1" class="form-control form-control-user"  placeholder="Password">
                    <?=form_error('password1', '<small class="text-warning">'.'</small>') ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="password2" class="form-control form-control-user"  placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block"> Register Account </button>
                <!-- <a href="<?php echo base_url('auth/registrasi') ?>"  class="btn btn-warning btn-user btn-block"> Login </a> -->
                <div class="row">
                  <div class="col-lg-6">

                  </div>
                  <div class="col-lg-6">

                  </div>

                </div>
              </form>
            </div>
            <p class="text-center">Daftar Akun anda dengan benar dan sesuai, agar sertifikat yang anda dapat sesuai, setelah daftar anda dapat login dan pilih pelatihan yang ingin di ikuti pada halaman member anda semoga memberikan kemudahan dalam mendapatkan kegiatan yang sangat bermanfaat</p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
