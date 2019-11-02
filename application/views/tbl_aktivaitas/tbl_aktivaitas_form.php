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
        <h2 style="margin-top:0px">Tbl_aktivaitas <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">IdKegiatan <?php echo form_error('idKegiatan') ?></label>
            <input type="text" class="form-control" name="idKegiatan" id="idKegiatan" placeholder="IdKegiatan" value="<?php echo $idKegiatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">IdPeserta <?php echo form_error('idPeserta') ?></label>
            <input type="text" class="form-control" name="idPeserta" id="idPeserta" placeholder="IdPeserta" value="<?php echo $idPeserta; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NoSertifikat <?php echo form_error('noSertifikat') ?></label>
            <input type="text" class="form-control" name="noSertifikat" id="noSertifikat" placeholder="NoSertifikat" value="<?php echo $noSertifikat; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">LinkSertifkat <?php echo form_error('linkSertifkat') ?></label>
            <input type="text" class="form-control" name="linkSertifkat" id="linkSertifkat" placeholder="LinkSertifkat" value="<?php echo $linkSertifkat; ?>" />
        </div>
	    <input type="hidden" name="idAktivitas" value="<?php echo $idAktivitas; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbl_aktivaitas') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>