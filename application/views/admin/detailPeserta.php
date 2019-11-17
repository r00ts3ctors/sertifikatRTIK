<div class="row">
  <div class="card-body">
    <h3 class="text-success">Detail Informasi Peserta</h3>
      <div class="table-responsive">
    <table class="table table-bordered">
      <?php foreach ($detailPeserta as $key): ?>

        <tr>
          <th>Nama Peserta</th>
          <th><?php echo $key['namaPeserta'] ?></th>
        </tr>
        <tr>
          <th>Alamat Email</th>
          <th><?php echo $key['email'] ?></th>
        </tr>
        <tr>
          <th>No Telepon</th>
          <th><?php echo $key['telepon'] ?></th>
        </tr>
        <tr>
          <th>Wilayah</th>
          <th><?php echo $key['wilayah'] ?></th>
        </tr>

      <?php endforeach; ?>

    </table>
  </div>

  </div>
</div>
<div class="card-body">
  <h4>List Pelatihan / Workshop / Seminar</h4>
  <div class="tables-responsive">
      <table class="table table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Kegiatan</th>
          <th>Tema</th>
          <th>No.Reg</th>
          <th>Tanggal</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php $nomor =1; foreach ($detailPelatihan as $detailpelatihans):
          $status = "";
          if ($detailpelatihans['status'] == 1) {
          $status = "<span class='badge badge-primary'>Selesai</span>";
          }
          else {
            $status = "<span class='badge badge-danger'>Tunda</span>";
          }
          ?>
          <tr>
            <td class="text-center"><?php echo $nomor++; ?></td>
            <td><?php echo $detailpelatihans['namakegiatan'] ?></td>
            <td><?php echo $detailpelatihans['tema'] . " " . $detailpelatihans['tema1']  . " <br /> "  . $detailpelatihans['tema2']  ?></td>
            <td><?php echo $detailpelatihans['nosertifikat'] ?></td>
            <td><?php echo $detailpelatihans['tanggal'] ?></td>
            <td class="text-center"><?php echo $status ?></td>
          </tr>

        <?php endforeach; ?>

      </tbody>
      </table>
    </div>
</div>
