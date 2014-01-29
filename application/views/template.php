<!DOCTYPE html>

<html>
<head>
	<?php echo $_meta; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome-4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/icon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/icon.png" type="image/x-icon">

</head>
<body>
	<div id="utama">
		<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
			<?php echo $_top; ?>
		</div>

		<div class="container">
			<?php echo $_center; ?>

			<?php echo $_bottom; ?>
		</div> 
	</div>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$("#utama").css("display", "none");
            $("#utama").slideDown(700);

			$('.carousel').carousel({
                interval: 3000
            });
            $('.carousel').carousel('cycle');

			$('#myTab a').click(function (e) {
				e.preventDefault()
				$(this).tab('show')
			});

	        $('.konfirmasi').on('click', function () {
		        return confirm('Apakah anda yakin ingin menghapus data?');
		    });

		});
	</script>

</body>
</html>