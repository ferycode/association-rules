<!DOCTYPE html>

<html>
<head>
	<title>Association Rule Data Mining</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome-4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>

	<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	      	</button>
	      	<a href="#" class="navbar-brand"><span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;Association Rule</a>
		</div>
		<div class="collapse navbar-collapse">
			<!-- <ul class="nav navbar-nav">
				<li class="active">
					<a href="#"><i class="fa fa-home"></i> Home</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-group"></i> About Us</a>
				</li>
			</ul> -->
			<ul class="nav navbar-nav navbar-right">
				<li class="active">
					<a href="#"><i class="fa fa-home"></i> Home</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-group"></i> Kelompok</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="container">
      <!-- <div class="header">
        
		
      </div> -->

		<!-- <div class="row">
			<div class="col-sm-12">
				<div id="myCarousel" class="carousel slide">
					<ol class="carousel-indicators hidden-xs">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="assets/img/3d-1.jpg" alt="Sepatu Kulit Eksklusif">
							<div class="carousel-caption hidden-xs">
								<div class="link_slide">
									<a href="#"><h2>Sepatu Kulit Eksklusif</h2></a>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<br>
							</div> -->
							<!-- <div class="jumbotron">
								<h1>Association Rule</h1>
								<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
								<p><a class="btn btn-lg btn-success" href="#">Sign up today</a></p>
							</div> -->
	<!-- 					</div>
						<div class="item">
							<img src="assets/img/3d-2.jpg" alt="Sepatu Kulit Eksklusif">
							<div class="carousel-caption hidden-xs">
								<div class="link_slide">
									<a href="#"><h2>Sepatu Kulit Eksklusif</h2></a>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<br>
							</div>
						</div>
						<div class="item">
							<img src="assets/img/3d-3.jpg" alt="Sepatu Kulit Eksklusif">
							<div class="carousel-caption hidden-xs">
								<div class="link_slide">
									<a href="#"><h2>Sepatu Kulit Eksklusif</h2></a>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<br>
							</div>
						</div>
					</div>
					<a href="#myCarousel" class="left carousel-control" data-slide="prev"><span class="icon-prev"></span></a>
					<a href="#myCarousel" class="right carousel-control" data-slide="next"><span class="icon-next"></span></a>
				</div>
			</div>
		</div> -->

		<!-- <div class="row">
			<div class="col-sm-12">
				<div class="separator middle"></div>
			</div>
		</div> -->
      <!-- <div class="jumbotron">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#">Sign up today</a></p>
      </div> -->

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

      <div class="footer">
        <p>&copy; 2014 Kelompok 10 Data Mining B</p>
      </div>

    </div> 

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.carousel').carousel({
                interval: 3000
            });
            $('.carousel').carousel('cycle');

			$('#myTab a').click(function (e) {
				e.preventDefault()
				$(this).tab('show')
			});

		});
	</script>

</body>
</html>