<div class="row">
	<div class="col-sm-12">
		<div class="widget-title">
			<h1><span class="glyphicon glyphicon-pencil"></span> Edit Perhitungan</h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<form class="form" role="form" method="POST" action="<?php echo base_url(); ?>perhitungan/hitung">
			<div class="form-group">
			    <label for="isitransaksi">MIN-Support</label>
			    <input type="text" class="form-control" id="min_sup" name="min_sup" placeholder="Masukkan minimium support (%). . .">
			</div>
			<div class="form-group">
			    <label for="isitransaksi">MIN-Confidence</label>
			    <input type="text" class="form-control" id="min_conf" name="min_conf" placeholder="Masukkan minimium confidence (%). . .">
			</div>
			<button type="submit" class="btn btn-info">Submit</button>
		</form>
		<br>
	</div>
</div>