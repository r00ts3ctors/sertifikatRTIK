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
        <h2 style="margin-top:0px">Register <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Noreg <?php echo form_error('noreg') ?></label>
            <input type="text" class="form-control" name="noreg" id="noreg" placeholder="Noreg" value="<?php echo $noreg; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Idkegiatan <?php echo form_error('idkegiatan') ?></label>
            <input type="text" class="form-control" name="idkegiatan" id="idkegiatan" placeholder="Idkegiatan" value="<?php echo $idkegiatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Telepon <?php echo form_error('telepon') ?></label>
            <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon" value="<?php echo $telepon; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">LinkSertifikat <?php echo form_error('linkSertifikat') ?></label>
            <input type="text" class="form-control" name="linkSertifikat" id="linkSertifikat" placeholder="LinkSertifikat" value="<?php echo $linkSertifikat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">LinkBarcode <?php echo form_error('linkBarcode') ?></label>
            <input type="text" class="form-control" name="linkBarcode" id="linkBarcode" placeholder="LinkBarcode" value="<?php echo $linkBarcode; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">TglRegister <?php echo form_error('tglRegister') ?></label>
            <input type="text" class="form-control" name="tglRegister" id="tglRegister" placeholder="TglRegister" value="<?php echo $tglRegister; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('register') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>