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
        <h2 style="margin-top:0px">Kegiatan List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('kegiatan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('kegiatan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('kegiatan'); ?>" class="btn btn-default">Reset</a>
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
		<th>NamaKegiatan</th>
		<th>TemaKegiatan</th>
		<th>TanggalKegiatan</th>
		<th>TempatKegiatan</th>
		<th>NamaTandaTangan</th>
		<th>JabatanTandaTangan</th>
		<th>TandaTangan</th>
		<th>Penyelenggara</th>
		<th>Action</th>
            </tr><?php
            foreach ($kegiatan_data as $kegiatan)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $kegiatan->namaKegiatan ?></td>
			<td><?php echo $kegiatan->temaKegiatan ?></td>
			<td><?php echo $kegiatan->tanggalKegiatan ?></td>
			<td><?php echo $kegiatan->tempatKegiatan ?></td>
			<td><?php echo $kegiatan->namaTandaTangan ?></td>
			<td><?php echo $kegiatan->jabatanTandaTangan ?></td>
			<td><?php echo $kegiatan->TandaTangan ?></td>
			<td><?php echo $kegiatan->Penyelenggara ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('kegiatan/read/'.$kegiatan->idKegiatan),'Read'); 
				echo ' | '; 
				echo anchor(site_url('kegiatan/update/'.$kegiatan->idKegiatan),'Update'); 
				echo ' | '; 
				echo anchor(site_url('kegiatan/delete/'.$kegiatan->idKegiatan),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>