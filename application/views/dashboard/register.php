<div class="row">
  <div class="container-fluid col-lg">
    <?= $this->session->flashdata('msg'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Register pelatihan</h1>
    <p class="mb-4">Silahkan daftar kegiatan Workshop / Seminar yang anda butuhkan, perhatiakan wilayah dan waktu agar anda benar benar dapat berhadir.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>#</th>
                <th>Tema Kegiatan</th>
                <th></th>

              </tr>
            </thead>


            <tbody>
              <?php
              $no = 1;
              foreach ($kegiatan as $key) { ?>


                <tr>
                  <th class="text-center py-5" scope="row"><?=$no++; ?>.</th>
                  <td>
                    <strong class="text-success"> <?=$key['tema'] . ' ' . $key['tema1'] . ' ' . $key['tema2'] ?> </strong>
                    <br />
                    <?= "<strong> Tempat : </strong> " . $key['tempat'] . "<strong> Tanggal : " . $key['tanggal'] . " / " . $key['jam'] .  "</strong>"?>
                    <br />
                    <?="Katagori Kegiatan : <strong> " . $key['katagori'] . "</strong>" ?>
                    <br />
                    <?= "Sisa Kapasistas : <strong class='text-danger'>" . $key['kapasistas_peserta'] . " Peserta </strong>" ?>
                    <br />
                    <?= "Kontak Panitia : <strong class='text-warning'>" . $key['kontak']. "</strong>" ?>
                  </td>
                  <td class="mx-auto py-5 "><a href="<?php echo base_url('daftar/'.$key['idKegiatan']) ?>" class="btn btn-outline-success">Daftar</a></td>
                </tr>

              <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>
