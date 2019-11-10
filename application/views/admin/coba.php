
          <div class="row">
            <div class="container-fluid">
              <?=$this->session->flashdata('msg') ?>
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
                          <th>Tema Kegiatan</th>
                          <th>AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;foreach ($pelatihanTersedia as $pelatihan): ?>
                          <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><i>
                              <?= ucwords($pelatihan['tema'] . ' ' .$pelatihan['tema1'] . ' ' .$pelatihan['tema2']) ?>
                            </i>
                          </td>
                            <td class="text-center">
                              <a href="<?= base_url('Admin/Home/pelatihan/'.$pelatihan['idKegiatan']) ?>" class="btn btn-sm btn-primary">Tambah Peserta</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
