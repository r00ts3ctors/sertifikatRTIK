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
        <h2 style="margin-top:0px">Tbl_kegiatan Read</h2>
        <table class="table">
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Tema</td><td><?php echo $tema; ?></td></tr>
	    <tr><td>Tema1</td><td><?php echo $tema1; ?></td></tr>
	    <tr><td>Tema2</td><td><?php echo $tema2; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td>Jam</td><td><?php echo $jam; ?></td></tr>
	    <tr><td>Wilayah</td><td><?php echo $wilayah; ?></td></tr>
	    <tr><td>Tempat</td><td><?php echo $tempat; ?></td></tr>
	    <tr><td>Status Kegiatan</td><td><?php echo $status_kegiatan; ?></td></tr>
	    <tr><td>Kapasistas Peserta</td><td><?php echo $kapasistas_peserta; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Kontak</td><td><?php echo $kontak; ?></td></tr>
	    <tr><td>Poster</td><td><?php echo $poster; ?></td></tr>
	    <tr><td>Fb</td><td><?php echo $fb; ?></td></tr>
	    <tr><td>Tw</td><td><?php echo $tw; ?></td></tr>
	    <tr><td>Ig</td><td><?php echo $ig; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_kegiatan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>