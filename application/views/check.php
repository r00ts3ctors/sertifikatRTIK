<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    $data = base_url();
    echo "<meta http-equiv='refresh' content='20;url=".$data."'>";
     ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Validasi Sertifikat</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <h1 class="text-danger mt-5">VALIDASI SERTIFIKAT</h1>
      </div>
      <div class="row">
        <p><strong><h3> No. Sertifkat <?php echo $nosertifikat; ?>  <strong class="text-success">  VALID </strong></h3></strong></p>
      </div>

      <div class="row">
        <table class="table table-borderless">
          <tbody>
            <tr>
              <th scope="row"><h3>Pemilik </h3> </th>
              <td><h3><strong class="text-success"><?php echo $peserta ?></strong></h3></td>
            </tr>
            <tr>
              <th scope="row"><h3>Tema </h3> </th>
              <td><h4><strong class="text-success"><?php echo $kegiatan[0]['tema'] . ' ' . $kegiatan[0]['tema1'] . ' ' . $kegiatan[0]['tema2'] ?></strong></h4></td>
            </tr>
            <tr>
              <th scope="row"><h3>Tempat </h3> </th>
              <td><h3><strong class="text-success"><?php echo $kegiatan[0]['tempat'] ?></strong></h3></td>
            </tr>
            <tr>
              <th scope="row"><h3>Tanggal </h3> </th>
              <td><h3><strong class="text-success"><?php echo $kegiatan[0]['tanggal'] ?></strong></h3></td>
            </tr>
            <tr>
              <th scope="row"><h3>No </h3> </th>
              <td><h3><strong class="text-success"><?php echo $nosertifikat ?></strong></h3></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td>Pemegang no sertifikat di nyatakan telah mengikuti kegiatan yang telah di selenggarakan oleh Relawan TIK Indonesia. Dengan baik dan Selesai</td>
            </tr>

          </tbody>
        </table>
        </div>
      </div>
  </body>
</html>
