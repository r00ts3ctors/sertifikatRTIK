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
        <h2 style="margin-top:0px">Tbl_peserta <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NamaPeserta <?php echo form_error('namaPeserta') ?></label>
            <input type="text" class="form-control" name="namaPeserta" id="namaPeserta" placeholder="NamaPeserta" value="<?php echo $namaPeserta; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="telepon">Telepon <?php echo form_error('telepon') ?></label>
            <textarea class="form-control" rows="3" name="telepon" id="telepon" placeholder="Telepon"><?php echo $telepon; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Wilayah <?php echo form_error('wilayah') ?></label>
            <input type="text" class="form-control" name="wilayah" id="wilayah" placeholder="Wilayah" value="<?php echo $wilayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Fb <?php echo form_error('fb') ?></label>
            <input type="text" class="form-control" name="fb" id="fb" placeholder="Fb" value="<?php echo $fb; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tw <?php echo form_error('tw') ?></label>
            <input type="text" class="form-control" name="tw" id="tw" placeholder="Tw" value="<?php echo $tw; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ig <?php echo form_error('ig') ?></label>
            <input type="text" class="form-control" name="ig" id="ig" placeholder="Ig" value="<?php echo $ig; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Tgldaftar <?php echo form_error('tgldaftar') ?></label>
            <input type="text" class="form-control" name="tgldaftar" id="tgldaftar" placeholder="Tgldaftar" value="<?php echo $tgldaftar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <input type="hidden" name="idPeserta" value="<?php echo $idPeserta; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbl_peserta') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>