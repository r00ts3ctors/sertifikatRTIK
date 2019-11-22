<div class="row">
	<div class="container-fluid">
			<div class="row">
				<div class="col-6">
					<div class="from-group">
						<label for="">Nama Kegiatan</label>
						<input type="text" class="form-control" value="<?php echo $dataKegiatan->nama ?>" disabled>
					</div>

				</div>
				<div class="col-3">
					<div class="from-group">
						<label for="">Tanggal Kegiatan</label>
						<input type="text" class="form-control" value="<?php echo $dataKegiatan->tanggal ?>" disabled>
					</div>

				</div>
				<div class="col-3">
					<div class="from-group">
						<label for="">Wilayah Kegiatan</label>
						<input type="text" class="form-control" value="<?php echo $dataKegiatan->wilayah ?>" disabled>
					</div>

				</div>
			</div>
			<div class="row pt-2">
				<div class="col-12">

				<div class="from-group">
					<label for="">Tema Kegiatan</label>
					<input type="text" class="form-control" value="<?php echo strtoupper(strtolower($dataKegiatan->tema . " " . $dataKegiatan->tema1 . " " . $dataKegiatan->tema2))  ?>" disabled>
				</div>
			</div>
			</div>

			<div class="row pt-2">
				<div class="col-4">
					<label for="">Kapasitas Peserta</label>
					<input type="text" class="form-control" value="<?php echo $dataKegiatan->kapasistas_peserta . " Orang" ?>" disabled>
				</div>
				<div class="col-4">
					<label for="">Tempat Kegiatan</label>
					<input type="text" class="form-control" value="<?php echo $dataKegiatan->tempat  ?>" disabled>

				</div>
				<div class="col-4">
					<label for="">Kontak Panitia</label>
					<input type="text" class="form-control" value="<?php echo $dataKegiatan->kontak  ?>" disabled>

				</div>

			</div>

			<div class="row pt-3">
				<div class="col-3">
					<?php
					echo anchor('Admin/Kegiatan/hapus/'.$dataKegiatan->idKegiatan, 'Hapus', 'class="btn btn-danger btn-sm"');
					echo " ";
					echo anchor('Admin/Kegiatan', 'Batal', 'class="btn btn-primary btn-sm"');
					?> </div>
			</div>
	</div>
</div>
