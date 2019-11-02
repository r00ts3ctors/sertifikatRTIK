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
        <h2 style="margin-top:0px">Tbl_kegiatan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tema <?php echo form_error('tema') ?></label>
            <input type="text" class="form-control" name="tema" id="tema" placeholder="Tema" value="<?php echo $tema; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tema1 <?php echo form_error('tema1') ?></label>
            <input type="text" class="form-control" name="tema1" id="tema1" placeholder="Tema1" value="<?php echo $tema1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tema2 <?php echo form_error('tema2') ?></label>
            <input type="text" class="form-control" name="tema2" id="tema2" placeholder="Tema2" value="<?php echo $tema2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tanggal <?php echo form_error('tanggal') ?></label>
            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jam <?php echo form_error('jam') ?></label>
            <input type="text" class="form-control" name="jam" id="jam" placeholder="Jam" value="<?php echo $jam; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Wilayah <?php echo form_error('wilayah') ?></label>
            <input type="text" class="form-control" name="wilayah" id="wilayah" placeholder="Wilayah" value="<?php echo $wilayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tempat <?php echo form_error('tempat') ?></label>
            <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat" value="<?php echo $tempat; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Status Kegiatan <?php echo form_error('status_kegiatan') ?></label>
            <input type="text" class="form-control" name="status_kegiatan" id="status_kegiatan" placeholder="Status Kegiatan" value="<?php echo $status_kegiatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kapasistas Peserta <?php echo form_error('kapasistas_peserta') ?></label>
            <input type="text" class="form-control" name="kapasistas_peserta" id="kapasistas_peserta" placeholder="Kapasistas Peserta" value="<?php echo $kapasistas_peserta; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Kontak <?php echo form_error('kontak') ?></label>
            <input type="text" class="form-control" name="kontak" id="kontak" placeholder="Kontak" value="<?php echo $kontak; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Poster <?php echo form_error('poster') ?></label>
            <input type="text" class="form-control" name="poster" id="poster" placeholder="Poster" value="<?php echo $poster; ?>" />
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
	    <input type="hidden" name="idKegiatan" value="<?php echo $idKegiatan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbl_kegiatan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>