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
        <h2 style="margin-top:0px">Register Read</h2>
        <table class="table">
	    <tr><td>Noreg</td><td><?php echo $noreg; ?></td></tr>
	    <tr><td>Idkegiatan</td><td><?php echo $idkegiatan; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Telepon</td><td><?php echo $telepon; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>LinkSertifikat</td><td><?php echo $linkSertifikat; ?></td></tr>
	    <tr><td>LinkBarcode</td><td><?php echo $linkBarcode; ?></td></tr>
	    <tr><td>TglRegister</td><td><?php echo $tglRegister; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('register') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>