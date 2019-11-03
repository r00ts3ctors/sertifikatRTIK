<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <title>Festival TIK 2019 | RelawanTIK Indonesia</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/fontend'); ?>/libs/bootstrap/css/bootstrap.min.css" media="all"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/fontend'); ?>/libs/fontawesome/css/font-awesome.min.css" media="all"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/fontend'); ?>/libs/maginificpopup/magnific-popup.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900"/>
    <link id="lgx-master-style" rel="stylesheet" href="<?php echo base_url('assets/fontend'); ?>/css/style-default.min.css" media="all"/>
    <script src="<?php echo base_url('assets/fontend'); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="home">
<div class="lgx-container ">
<header>
    <div id="RELAWANTIK" class="lgx-header">
        <div class="lgx-header-position lgx-header-position-white lgx-header-position-fixed ">
            <div class="lgx-container">
                <nav class="navbar navbar-default lgx-navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <div class="lgx-nav-right navbar-right">
                            <div class="lgx-cart-area">
                                <a class="lgx-btn lgx-btn-red" href="<?php echo base_url('Auth/login') ?>">Login</a>
                            </div>
                        </div>
                        <div class="lgx-nav-right navbar-right">
                            <div class="lgx-cart-area">
                                <a class="lgx-btn lgx-btn-primary" href="<?php echo base_url('Auth/register') ?>">Register</a>
                            </div>
                        </div>
                        <ul class="nav navbar-nav lgx-nav navbar-right">
                            <li><a class="lgx-scroll" href="#RELAWANTIK">Home</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<section>
  <div id="validasi" class="lgx-footer lgx-footer-black">
        <div class="lgx-inner-footer">
            <div class="lgx-subscriber-area ">
                <div class="container">
                    <div class="lgx-subscriber-inner">
                      <Br />
                        <h3 class="subscriber-title">Validasi Sertifikat</h3>
                        <form class="lgx-subscribe-form" method="post" action="<?php echo base_url('checkpost') ?>" >
                            <div class="form-group form-group-email">
                                <input type="text" name="sertifikat" placeholder="Masukan Kode Sertifikat Disini" class="form-control lgx-input-form form-control"  />
                            </div>
                            <div class="form-group form-group-submit">
                                <button type="submit" class="lgx-btn lgx-submit"><span>Validasi</span></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="lgx-footer-area">
                    <div class="lgx-footer-single">
                        <a class="logo" href="#"><img src="https://i.ibb.co/D4MD8tn/logo-festik2019-nodate.png" style="width:70%" alt="Logo"></a>
                    </div>
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Lokasi Kegiatan </h3>
                        <h4 class="date">
                            22 - 24 November, 2019
                        </h4>
                        <address>
                          STMIK Atma Luhur Pangkalpinang <br>
                          Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung
                        </address>
                    </div>
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Sosial Media Kami</h3>
                        <p class="text">
                            Dapatkan Informasi Lainya Melalui <br>
                            Sosial Media Kami Di Bawah Ini.
                        </p>
                        <ul class="list-inline lgx-social-footer">
                            <li><a href="https://www.facebook.com/festik2019"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/festik2019"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/festik2019_/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="lgx-footer-bottom">
                    <div class="lgx-copyright">
                        <p> <span>©</span> 2019 <a href="https://festik.relawantik.or.id">Festival TIK Bangka Belitung.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>





</div>
<script src="<?php echo base_url('assets/fontend'); ?>/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url('assets/fontend'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/fontend'); ?>/libs/header-parallax.js"></script>

</body>
</html>
