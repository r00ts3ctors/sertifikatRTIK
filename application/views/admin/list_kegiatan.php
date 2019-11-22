<div class="row">
  <div class="container-fluid">
		<?php echo $this->session->flashdata('msg'); ?>
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
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listing Kegiatan </h6>
				<p>[Kegiatan di urutkan berdasarkan data terakhir yang di input klik detail untuk melihat lengkap kegiatan.]</p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>No.</th>
                <th>Nama Kegiatan</th>
                <th>Tema</th>
                <th>#</th>
              </tr>
            </thead>
            	<tbody>
								<?php $nomor=1; foreach ($dataKegiatan as $pelatihanlist): ?>
									<tr>
										<td class="text-center"><?=$nomor++; ?></td>
										<td><?=$pelatihanlist->nama ?></td>
										<td><?=$pelatihanlist->tema . " " .  $pelatihanlist->tema1 . "  " . $pelatihanlist->tema2 . " <br /> " .
										$pelatihanlist->tempat . " <br /> <strong> " . $pelatihanlist->tanggal . "</strong> <br /> <i> Kapasitas</i> : " .  $pelatihanlist->kapasistas_peserta . " Orang"
										 ?>
									 </td>
										<td class="py-5">
											<?=anchor('Admin/Kegiatan/detail/'.$pelatihanlist->idKegiatan, 'Detail', '<span class="badge badge-success"');?>
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
