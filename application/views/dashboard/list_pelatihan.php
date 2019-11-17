<div class="row py-3 pb-2">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-lg-6">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Kegiatan Belum diikuti</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-lg-6 ">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kegiatan Telah Diikuti</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>


<div class="row">
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DAFTAR SERTIFIKAT ANDA. </h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>No.</th>
                <th>Kegiatan</th>
                <th>Tema</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              <?php
              $nomor = 1;
              foreach ($datasertifkat as $v) {


                ?>
                <tr>
                  <td class="text-center"><?= $nomor++; ?></td>
                  <td><?=$v->namakegiatan?></td>
                  <td><?=ucfirst(strtolower($v->tema)) ?></td>
                  <td class="text-center">
                    <?php
                      if ($v->status == 0 && $v->idPeserta == $this->session->userdata('idPeserta')) {
                        echo "<button class='btn btn-info btn-sm'>Pandding</button>";
                      }

                      else { ?>
                        <a href="<?= base_url('nosertifikat/').$v->nosertifikat ?>" target="_blank" class="btn btn-success btn-sm">View</a>
                      <?php }

                     ?>


                  </td>
                </tr>
              <?php } ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>
