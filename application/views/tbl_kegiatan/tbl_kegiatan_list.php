<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tbl_kegiatan List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('tbl_kegiatan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('tbl_kegiatan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tbl_kegiatan'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama</th>
		<th>Tema</th>
		<th>Tema1</th>
		<th>Tema2</th>
		<th>Tanggal</th>
		<th>Jam</th>
		<th>Wilayah</th>
		<th>Tempat</th>
		<th>Status Kegiatan</th>
		<th>Kapasistas Peserta</th>
		<th>Alamat</th>
		<th>Kontak</th>
		<th>Poster</th>
		<th>Fb</th>
		<th>Tw</th>
		<th>Ig</th>
		<th>Action</th>
            </tr><?php
            foreach ($tbl_kegiatan_data as $tbl_kegiatan)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $tbl_kegiatan->nama ?></td>
			<td><?php echo $tbl_kegiatan->tema ?></td>
			<td><?php echo $tbl_kegiatan->tema1 ?></td>
			<td><?php echo $tbl_kegiatan->tema2 ?></td>
			<td><?php echo $tbl_kegiatan->tanggal ?></td>
			<td><?php echo $tbl_kegiatan->jam ?></td>
			<td><?php echo $tbl_kegiatan->wilayah ?></td>
			<td><?php echo $tbl_kegiatan->tempat ?></td>
			<td><?php echo $tbl_kegiatan->status_kegiatan ?></td>
			<td><?php echo $tbl_kegiatan->kapasistas_peserta ?></td>
			<td><?php echo $tbl_kegiatan->alamat ?></td>
			<td><?php echo $tbl_kegiatan->kontak ?></td>
			<td><?php echo $tbl_kegiatan->poster ?></td>
			<td><?php echo $tbl_kegiatan->fb ?></td>
			<td><?php echo $tbl_kegiatan->tw ?></td>
			<td><?php echo $tbl_kegiatan->ig ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('tbl_kegiatan/read/'.$tbl_kegiatan->idKegiatan),'Read'); 
				echo ' | '; 
				echo anchor(site_url('tbl_kegiatan/update/'.$tbl_kegiatan->idKegiatan),'Update'); 
				echo ' | '; 
				echo anchor(site_url('tbl_kegiatan/delete/'.$tbl_kegiatan->idKegiatan),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('tbl_kegiatan/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>