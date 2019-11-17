<div class="col-12">
  <?php echo $this->session->flashdata('msg') ?>    </div>
<div class="row">

  <form class="form" action="<?php echo base_url('proses') ?>" method="post">

    <div class="row">
      <div class="col-4">
        <div class="form-group">
          <label for="">Nama Kegiatan</label>
          <input type="text" class="form-control" name="namakegiatan" value="<?php  echo set_value('namakegiatan') ?>" placeholder="Nama Kegiatan ex. Festik 2019">
          <?php echo form_error('namakegiatan') ?>
        </div>

      </div>

      <div class="col-4">
        <div class="form-group">
          <label for="">Katagori Kegiatan</label>
          <select class="form-control" name="katagori">
            <option value=""> - Katagori Kegiatan - </option>
            <option value="Seminar">Seminar </option>
            <option value="Workshop">Workshop</option>
            <option value="Seminar Nasional">Seminar Nasional</option>
            <option value="Workshop Nasional">Workshop Nasional</option>
            <option value="Pelatihan">Pelatihan</option>
          </select>
      
        </div>



      </div>

      <div class="col-4">
        <div class="form-group">
          <label for="">Tanggal Lengkap</label>
          <input type="text" class="form-control" name="tgl" value="<?php echo set_value('tgl') ?>" placeholder="Minggu / 02 February 2019">
          <?php echo form_error('tgl') ?>
        </div>

      </div>

    </div>

    <div class="row">
      <span class="text-small"></span>
      <div class="col-4">
        <div class="form-group">
          <label for="">Tema </label>
          <input type="text" class="form-control" name="tema" value="<?php echo set_value('tema') ?>" placeholder="Pemberdayaan Perempuan pada">
          <?php echo form_error('tema') ?>
        </div>

      </div>
      <div class="col-4">
        <div class="form-group">
          <label for="">Tema 1</label>
          <input type="text" class="form-control" name="tema1" value="<?php echo set_value('tema1') ?>" placeholder="Pertumbuhan Ekonomi Rumah Tangga">

        </div>

      </div>
      <div class="col-4">
        <div class="form-group">
          <label for="">Tema 2</label>
          <input type="text" class="form-control" name="tema2" value="<?php echo set_value('tema2') ?>" placeholder="di Indonesia di era 4.0">

        </div>

      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <div class="form-group">
          <label for="">Tempat Pelaksanaan</label>
          <input type="text" class="form-control" name="tempat" value="<?php echo set_value('tempat') ?>" placeholder="Gedung Seminar Provinsi">
          <?php echo form_error('tempat') ?>
        </div>
      </div>
      <div class="col-4">
        <div class="form-group">
          <label for="">Wilayah</label>
          <input type="text" class="form-control" name="wilayah" value="<?php echo set_value('wilayah') ?>" placeholder="ex. Aceh">
          <?php echo form_error('wilayah') ?>
        </div>
      </div>
      <div class="col-4">
        <div class="form-group">
          <label for="">Waktu Kegiatan</label>
          <input type="text" class="form-control" name="jam" value="<?php echo set_value('jam') ?>" placeholder="08:10 WIB">
          <?php echo form_error('jam') ?>
        </div>

      </div>
    </div>

    <div class="row">
      <div class="col-2">
        <div class="form-group">
          <label for="">Kapasistas Peserta</label>
          <input type="text" class="form-control" name="peserta" value="<?php echo set_value('peserta') ?>" placeholder="ex 500">
          <?php echo form_error('peserta') ?>
        </div>

      </div>
      <div class="col-2">
        <div class="form-group">
          <label for="">Kontak Panitia</label>
          <input type="text" class="form-control" name="kontak" value="<?php echo set_value('kontak') ?>" placeholder="082161677331">
          <?php echo form_error('kontak') ?>
        </div>

      </div>
      <div class="col-8">
        <div class="form-group">
          <label for="">Alamat Pelaksanaan</label>
          <input type="text" class="form-control" name="alamat" value="<?php echo set_value('alamat') ?>" placeholder="Jl. Farras Sidqi Bin Maulana No. 31137 Banda Aceh">
          <?php echo form_error('alamat') ?>
        </div>

      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <div class="form-group">
          <label for="">Facebook Panitia</label>
          <input type="text" class="form-control" name="fb" value="<?php echo set_value('fb') ?>" placeholder="Username">
          <?php echo form_error('fb') ?>
        </div>

      </div>
      <div class="col-4">
        <div class="form-group">
          <label for="">Twitter Panitia</label>
          <input type="text" class="form-control" name="tw" value="<?php echo set_value('tw') ?>" placeholder="Username">
          <?php echo form_error('tw') ?>
        </div>

      </div>
      <div class="col-4">
        <div class="form-group">
          <label for="">Instagram Panitia</label>
          <input type="text" class="form-control" name="ig" value="<?php echo set_value('ig') ?>" placeholder="Username">
          <?php echo form_error('ig') ?>
        </div>

      </div>
    </div>



    <button type="submit" class="btn btn-lg btn-primary">Tambah Pelatihan</button>

    <br />
    <br />

    <label for=""><strong class="text-danger">Note </strong>, Setiap pelatihan yang di tambahkan akan langsung aktif, maka untuk itu perhatikan data input yang lebih teliti Setelah di tambahkan setiap anggota yang terlah terdaftar pada aplikasi akan di berikan informasi akan kegiatan ini.</label>


  </form>
</div>
