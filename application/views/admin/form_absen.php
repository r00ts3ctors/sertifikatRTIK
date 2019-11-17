<form class="form" action="<?php echo base_url('Admin/Home/proses/') ?>" method="post">
  <div class="col-lg-8 form-group">
    <input type="text" name="noregister" class="form-control input-lg" placeholder="Masukan No Register">
    <input type="hidden" name="uri" value="<?php echo $uri ?>" class="form-control input-lg">
  <br />
    <button type="submit" class="btn btn-sm btn-warning"> Proses Absensi Peserta</button>
  </div>

</form>
<div class="row">
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DAFTAR YANG TELAH HADIR. </h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>No.</th>
                <th>Nama Peserta</th>
                <th>No Telepon</th>
                <th>Alamat Email</th>
              </tr>
            </thead>

            <tbody>
              <?php $no=1;
              foreach ($pesarta as $key): ?>
                <tr>
                  <td><?=$no++; ?></td>
                  <td><?=$key['namaPeserta'] ?></td>
                  <td><?=$key['telepon'] ?></td>
                  <td><?=$key['email'] ?></td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>
