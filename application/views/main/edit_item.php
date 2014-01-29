<div class="row">
	<div class="col-sm-12">
		<h1><span class="glyphicon glyphicon-pencil"></span> Edit Item</h1>
		<?php 
			if ($this->session->flashdata('sukses')) {
		?>
		<div class="alert alert-success alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <?php echo $this->session->flashdata('status') ?>
		</div>
		<?php
			}
		?>
		<?php 
			if ($this->session->flashdata('gagal')) {
		?>
		<div class="alert alert-danger alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <?php echo $this->session->flashdata('status') ?>
		</div>
		<?php
			}
		?>
		<form method="POST" action="<?php echo base_url(); ?>item/doedit" role="form">
			<div class="form-group">
				<textarea class="form-control" rows="10" name="item"><?php 
						// foreach ($file as $text) {
							echo $file;
						//}
					 ?>
				</textarea>
			</div>
			<div class="form-group">
				<a href="javascript:history.go(-1)" class="btn btn-default">Cancel</a>
				<button type="submit" class="btn btn-info">Submit</button>
			</div>
		</form>

	</div>
</div>