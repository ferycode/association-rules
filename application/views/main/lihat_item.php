<div class="row">
	<div class="col-sm-12">
		<h1><span class="glyphicon glyphicon-th-list"></span> Data Item</h1>
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<tr>
					<th class="text-center">ID</th>
					<th>ITEM</th>
				</tr>
				<?php 
					$i = 1;
					foreach ($file as $text) {
				?>
				<tr>
					<td class="text-center"><?php echo $i; ?></td>
					<td><?php echo $text; ?></td>
				</tr>
				<?php
						$i++;
					}
				?>
			 </table>
		</div>
		<a href="javascript:history.go(-1)" class="btn btn-default">Back</a>
		<a href="<?php echo base_url(); ?>item/edit" class="btn btn-info">Edit</a>
		<br>
		<br>
	</div>
</div>