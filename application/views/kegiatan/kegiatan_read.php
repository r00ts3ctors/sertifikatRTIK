<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Kegiatan Read</h2>
        <table class="table">
	    <tr><td>NamaKegiatan</td><td><?php echo $namaKegiatan; ?></td></tr>
	    <tr><td>TemaKegiatan</td><td><?php echo $temaKegiatan; ?></td></tr>
	    <tr><td>TanggalKegiatan</td><td><?php echo $tanggalKegiatan; ?></td></tr>
	    <tr><td>TempatKegiatan</td><td><?php echo $tempatKegiatan; ?></td></tr>
	    <tr><td>NamaTandaTangan</td><td><?php echo $namaTandaTangan; ?></td></tr>
	    <tr><td>JabatanTandaTangan</td><td><?php echo $jabatanTandaTangan; ?></td></tr>
	    <tr><td>TandaTangan</td><td><?php echo $TandaTangan; ?></td></tr>
	    <tr><td>Penyelenggara</td><td><?php echo $Penyelenggara; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kegiatan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>