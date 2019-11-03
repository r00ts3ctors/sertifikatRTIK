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
        <h2 style="margin-top:0px">Tbl_peserta Read</h2>
        <table class="table">
	    <tr><td>NamaPeserta</td><td><?php echo $namaPeserta; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Telepon</td><td><?php echo $telepon; ?></td></tr>
	    <tr><td>Wilayah</td><td><?php echo $wilayah; ?></td></tr>
	    <tr><td>Fb</td><td><?php echo $fb; ?></td></tr>
	    <tr><td>Tw</td><td><?php echo $tw; ?></td></tr>
	    <tr><td>Ig</td><td><?php echo $ig; ?></td></tr>
	    <tr><td>Tgldaftar</td><td><?php echo $tgldaftar; ?></td></tr>
	    <tr><td>Foto</td><td><?php echo $foto; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Level</td><td><?php echo $level; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_peserta') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>