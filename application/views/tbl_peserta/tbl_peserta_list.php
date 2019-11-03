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
        <h2 style="margin-top:0px">Tbl_peserta List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('tbl_peserta/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('tbl_peserta/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tbl_peserta'); ?>" class="btn btn-default">Reset</a>
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
		<th>NamaPeserta</th>
		<th>Email</th>
		<th>Telepon</th>
		<th>Wilayah</th>
		<th>Fb</th>
		<th>Tw</th>
		<th>Ig</th>
		<th>Tgldaftar</th>
		<th>Foto</th>
		<th>Password</th>
		<th>Level</th>
		<th>Action</th>
            </tr><?php
            foreach ($tbl_peserta_data as $tbl_peserta)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $tbl_peserta->namaPeserta ?></td>
			<td><?php echo $tbl_peserta->email ?></td>
			<td><?php echo $tbl_peserta->telepon ?></td>
			<td><?php echo $tbl_peserta->wilayah ?></td>
			<td><?php echo $tbl_peserta->fb ?></td>
			<td><?php echo $tbl_peserta->tw ?></td>
			<td><?php echo $tbl_peserta->ig ?></td>
			<td><?php echo $tbl_peserta->tgldaftar ?></td>
			<td><?php echo $tbl_peserta->foto ?></td>
			<td><?php echo $tbl_peserta->password ?></td>
			<td><?php echo $tbl_peserta->level ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('tbl_peserta/read/'.$tbl_peserta->idPeserta),'Read'); 
				echo ' | '; 
				echo anchor(site_url('tbl_peserta/update/'.$tbl_peserta->idPeserta),'Update'); 
				echo ' | '; 
				echo anchor(site_url('tbl_peserta/delete/'.$tbl_peserta->idPeserta),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
		<?php echo anchor(site_url('tbl_peserta/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>