<div class="row">
	<div class="col-sm-12">
		<div class="widget-title">
			<h1><span class="glyphicon glyphicon-th-list"></span> Data Transaksi</h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<?php 
			if ($this->session->flashdata('sukses')) {
		?>
		<div class="alert alert-success alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <?php echo $this->session->flashdata('sukses') ?>
		</div>
		<?php
			}
		?>
		<?php 
			if ($this->session->flashdata('gagal')) {
		?>
		<div class="alert alert-danger alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <?php echo $this->session->flashdata('gagal') ?>
		</div>
		<?php
			}
		?>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<tr class="info">
					<th class="text-center">TID</th>
					<th class="text-center">ITEMS</th>
					<th class="text-center">ACTION</th>
				</tr>
				<?php
					foreach ($hasil->result() as $row) {
				?>
				<tr>
					<td class="text-center"><?php echo $row->id_transaksi; ?></td>
					<td class="text-center"><?php echo $row->items; ?></td>
					<td class="text-center">
						<a href="<?php echo base_url(); ?>transaksi/edit/<?php echo $row->id_transaksi; ?>" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
						<a href="<?php echo base_url(); ?>transaksi/delete/<?php echo $row->id_transaksi; ?>" class="btn btn-default konfirmasi"><span class="glyphicon glyphicon-trash"></span></a>
					</td>
				</tr>
				<?php
					}
				?>
			 </table>
		</div>
		<div class="paging">
			<ul class="pagination">
				<?php echo $pagination; ?>
			</ul>
		</div>
	</div>
</div>
<!-- <div class="row">
	<div class="col-sm-12">
		<div class="separator middle"></div>
	</div>
</div> -->
<div class="row">
	<div class="col-sm-12 text-center">
		<a href="<?php echo base_url(); ?>transaksi/tambah" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
	</div>
	<br>
</div>