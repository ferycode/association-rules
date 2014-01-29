<div class="row">
	<div class="col-sm-12">
		<div class="widget-title">
			<h1><span class="glyphicon glyphicon-shopping-cart"></span> Tambah Transaksi</h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<form class="form-inline" role="form" method="POST" action="<?php echo base_url(); ?>transaksi/doadd">
			<div class="form-group">
			    <label class="sr-only" for="isitransaksi">Item Transaksi</label>
			    <input type="text" class="form-control" id="item" name="item" placeholder="Masukkan items. . .">
			</div>
			<!-- <div class="form-group">
			    <label for="isitransaksi" class="col-lg-3 control-label">Item Transaksi</label>
			    <div class="col-lg-9">
			      <input type="text" class="form-control" id="item" name="item" placeholder="Masukkan items. . .">
			    </div>
			</div> -->
			<button type="submit" class="btn btn-info">Submit</button>
		</form>
		<br>
	</div>
</div>