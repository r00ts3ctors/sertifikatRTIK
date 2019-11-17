<?php
if ($cari) { ?>

<?php }
else {
  ?>
  <div class="row">
    <div class="col-lg-12">
      <p>Maaf, Informasi yang anda cari belum tersedia saat ini.</p>
    </div>
  </div>
  <?php
}

 ?>

<div class="row">
  <div class="col-lg-12 mb-2">
    Total Pencarian = <strong> <?php echo count($cari); ?> </strong> Kegiatan
  </div>
<?php
$nomor = 1;
foreach ($cari as $key) { ?>
  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header">
      No. <?php echo $nomor++; ?> Kegiatan <strong> <?= $key['nama'] ?></strong>
      </div>
      <div class="card-body">
          <div class="form-group">
            <div class="row">
              <div class="col-lg-6">
                <label for=""> Kegiatan : </label>
                <input type="text" readonly class ="form-control" value="<?php echo $key['nama']; ?>" >
                <br / >
                <label for=""> Tempat : </label>
                <input type="text" readonly class ="form-control" value="<?php echo $key['tempat']; ?>" >
                <br / >
                <label for=""> Tanggal Kegiatan : </label>
                <input type="text" readonly class ="form-control" value="<?php echo $key['tanggal']; ?>" >

              </div>
              <div class="col-lg-6">
                <label for=""> Tema Kegiatan : </label>
                <input type="text" readonly class ="form-control"  value="<?php echo $key['tema'] . ' ' . $key['tema1'] . ' ' . $key['tema2']; ?>" >

                <br />
                <label for=""> Kota Pelaksanaan : </label>
                <input type="text" readonly class ="form-control" value="<?php echo $key['wilayah']; ?>" >
                <br />
                <label for=""> Sisa Kapasistas : </label>
                <input type="text" readonly class ="form-control" value="<?php echo $key['kapasistas_peserta']; ?> Orang" >
                <br />

                <a href="<?php echo base_url('daftar/'.$key['idKegiatan']) ?>"
                  class="btn btn-primary btn-sm">Daftar Kegiatan</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>




</div>
