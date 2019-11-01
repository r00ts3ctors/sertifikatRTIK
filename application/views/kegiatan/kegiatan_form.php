Tambah Kegiatan.
<!-- Kegaiatan : Suatu Aktivitas  Festik -->
<!-- Tema : Sebuah Ide Cerita   -->
<form action="<?php echo $action; ?>" method="post">
<div class="row">
  <div class="col-lg-6">

    <div class="form-group">
      <label for="varchar">Nama Kegiatan<?php echo form_error('namaKegiatan') ?></label>
      <input type="text" class="form-control" name="namaKegiatan" id="namaKegiatan" placeholder="Nama Kegiatan ex. Workshop Literasi Digital UMKM." value="<?php echo $namaKegiatan; ?>" />
    </div>
    <div class="form-group">
      <label for="varchar">Tema Kegiatan <?php echo form_error('temaKegiatan') ?></label>
      <input type="text" class="form-control" name="temaKegiatan" id="temaKegiatan" placeholder="Tema Kegiatan ex. Pelatihan Membaca" value="<?php echo $temaKegiatan; ?>" />
    </div>
    <div class="form-group">
      <label for="varchar">Tanda Tangan <?php echo form_error('TandaTangan') ?></label>
      <input type="text" class="form-control" name="TandaTangan" id="TandaTangan" placeholder="Tanda Tangan" value="<?php echo $TandaTangan; ?>" />
    </div>
    <div class="form-group">
      <label for="varchar">Penyelenggara <?php echo form_error('Penyelenggara') ?></label>
      <input type="text" class="form-control" name="Penyelenggara" id="Penyelenggara" placeholder="Penyelenggara" value="<?php echo $Penyelenggara; ?>" />
    </div>
  </div>

  <div class="col-lg-6">

    <div class="form-group">
      <label for="varchar">Tanggal Kegiatan <?php echo form_error('tanggalKegiatan') ?></label>
      <input type="text" class="form-control" name="tanggalKegiatan" id="tanggalKegiatan" placeholder="ex. 20 November 2019" value="<?php echo $tanggalKegiatan; ?>" />
    </div>
    <div class="form-group">
      <label for="varchar">Tempat Kegiatan <?php echo form_error('tempatKegiatan') ?></label>
      <input type="text" class="form-control" name="tempatKegiatan" id="tempatKegiatan" placeholder="ex. Kampus RTIK" value="<?php echo $tempatKegiatan; ?>" />
    </div>
    <div class="form-group">
      <label for="varchar">NamaTandaTangan <?php echo form_error('namaTandaTangan') ?></label>
      <input type="text" class="form-control" name="namaTandaTangan" id="namaTandaTangan" placeholder="NamaTandaTangan" value="<?php echo $namaTandaTangan; ?>" />
    </div>
    <div class="form-group">
      <label for="varchar">JabatanTandaTangan <?php echo form_error('jabatanTandaTangan') ?></label>
      <input type="text" class="form-control" name="jabatanTandaTangan" id="jabatanTandaTangan" placeholder="JabatanTandaTangan" value="<?php echo $jabatanTandaTangan; ?>" />
    </div>

  </div>
</div>

<input type="hidden" name="idKegiatan" value="<?php echo $idKegiatan; ?>" />
<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
<a href="<?php echo site_url('kegiatan') ?>" class="btn btn-default">Cancel</a>
</form>
