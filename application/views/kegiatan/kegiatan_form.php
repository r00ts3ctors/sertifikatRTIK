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
        <h2 style="margin-top:0px">Kegiatan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NamaKegiatan <?php echo form_error('namaKegiatan') ?></label>
            <input type="text" class="form-control" name="namaKegiatan" id="namaKegiatan" placeholder="NamaKegiatan" value="<?php echo $namaKegiatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TemaKegiatan <?php echo form_error('temaKegiatan') ?></label>
            <input type="text" class="form-control" name="temaKegiatan" id="temaKegiatan" placeholder="TemaKegiatan" value="<?php echo $temaKegiatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TanggalKegiatan <?php echo form_error('tanggalKegiatan') ?></label>
            <input type="text" class="form-control" name="tanggalKegiatan" id="tanggalKegiatan" placeholder="TanggalKegiatan" value="<?php echo $tanggalKegiatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TempatKegiatan <?php echo form_error('tempatKegiatan') ?></label>
            <input type="text" class="form-control" name="tempatKegiatan" id="tempatKegiatan" placeholder="TempatKegiatan" value="<?php echo $tempatKegiatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NamaTandaTangan <?php echo form_error('namaTandaTangan') ?></label>
            <input type="text" class="form-control" name="namaTandaTangan" id="namaTandaTangan" placeholder="NamaTandaTangan" value="<?php echo $namaTandaTangan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">JabatanTandaTangan <?php echo form_error('jabatanTandaTangan') ?></label>
            <input type="text" class="form-control" name="jabatanTandaTangan" id="jabatanTandaTangan" placeholder="JabatanTandaTangan" value="<?php echo $jabatanTandaTangan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TandaTangan <?php echo form_error('TandaTangan') ?></label>
            <input type="text" class="form-control" name="TandaTangan" id="TandaTangan" placeholder="TandaTangan" value="<?php echo $TandaTangan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Penyelenggara <?php echo form_error('Penyelenggara') ?></label>
            <input type="text" class="form-control" name="Penyelenggara" id="Penyelenggara" placeholder="Penyelenggara" value="<?php echo $Penyelenggara; ?>" />
        </div>
	    <input type="hidden" name="idKegiatan" value="<?php echo $idKegiatan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kegiatan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>