<div class="row">
  <div class="col-lg-12 py-4">
    <form class="form-control" action="<?php echo base_url('Admin/Home/prosesPelatihan') ?>" method="post">
      <label>Nama Kegiatan</label>
      <input type="text" class="form-control" name="nama" value="Festik 2019 Pangkal Pinang">
      <label>Katagori</label>
      <select class="form-control" name="katagori">
        <option value="WORKSHOP">Workshop</option>
        <option value="SEMINAR">Seminar</option>
      </select>
      <div class="row">
        <div class="col-lg-4">
          <label>Tema Kegiatan </label>
          <input type="text" class="form-control" name="tema1"
           placeholder="Hanya 5 Kata max - Pertama">
          <?=form_error('tema1') ?>
        </div>
        <div class="col-lg-4">
          <label>Tema Kegiatan</label>
          <input type="text" class="form-control" name="tema2"
          placeholder="Sambungan 4 Kata max Kedua">
        </div>
        <div class="col-lg-4">
          <label>Tema Kegiatan</label>
          <input type="text" class="form-control" name="tema3"
          placeholder="Sambungan 4 kata max Ketiga">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <label>Jam Kegiatan</label>
          <input type="text" class="form-control" name="jam" placeholder="14:00 WIB" >
          <?=form_error('jam') ?>
          <label>Kontak Panitia</label>
          <input type="text" class="form-control" name="kontak" placeholder="Kontak Panitia" >
          <?=form_error('kontak') ?>
        </div>
        <div class="col-lg-6">
          <label>Tanggal Kegiatan</label>
          <input type="text" class="form-control" name="tgl" placeholder="Sabtu / 22 November 2019">
          <?=form_error('tgl') ?>
          <label>Kapasitas</label>
          <input type="text" class="form-control" name="kapasitas" placeholder="100" >
          <?=form_error('kapasitas') ?>
        </div>
      </div>

      <label>Alamat</label>
      <input type="text" class="form-control" name="alamat" placeholder="Tempat Kegiatan" >
      <?=form_error('alamat') ?>
      <div class="row">
        <div class="col-lg-4">
          <label>Facebook</label>
          <input type="text" class="form-control" name="fb" placeholder="USERNAME" >
        </div>
        <div class="col-lg-4">
          <label>IG</label>
          <input type="text" class="form-control" name="ig" placeholder="USERNAME">

        </div>
        <div class="col-lg-4">
          <label>Twitter</label>
          <input type="text" class="form-control" name="tw" placeholder="USERNAME" >

        </div>
      </div>
      <hr>
      <button type="submit" class="btn btn-sm btn-warning">Proses Tambah Kegiatan</button>
    </form>

  </div>
</div>
<?php


?>
