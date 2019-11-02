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
        <h2 style="margin-top:0px">Tbl_aktivaitas Read</h2>
        <table class="table">
	    <tr><td>IdKegiatan</td><td><?php echo $idKegiatan; ?></td></tr>
	    <tr><td>IdPeserta</td><td><?php echo $idPeserta; ?></td></tr>
	    <tr><td>NoSertifikat</td><td><?php echo $noSertifikat; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>LinkSertifkat</td><td><?php echo $linkSertifkat; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_aktivaitas') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>