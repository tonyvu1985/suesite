<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="from dada to gaga">
    <title>From Dada To Gaga</title>
<?php include_once('call-bootstrap.php'); ?>

</head>
<body>
<style>
.navbar-brand.home{background: #cb3338 !important; color:#000 !important}
</style>

<div class="container">
<!-- Call Narbar -->
<?php include_once('narbar.php'); ?>
<!-- Main component for a primary marketing message or call to action -->
<div class="row equal homepage-container">
	<div class="col-md-6 col-xs-12 homepage-left text-center">
		<img class="img-responsive" src="images/home1.jpg" alt="" />
	</div>
	<div class="col-md-6 col-xs-12 homepage-right text-center">
		<p class="text-right"><img class="imagehome" src="images/exhibition.jpg" alt="" /></p>
		<div class="text-right exhibitiondetail col-xs-9">
			<h1>Exhibition</h1>
			<p>Chrissie Cotter Gallery<br/>
			Pidcock Street, Camperdown<br/>
			Opening night 25 September, 6pm<br/>
			Thurs-Sun 11am-5pm until 05 October 2014</p>
		</div>
      </div><!-- End of Main Content -->
</div>
	<!-- footer -->    
	<?php include_once('footer.php'); ?>
</div> <!-- /container -->
<script>
jQuery(document).ready(function(){
	jQuery('.imagehome').mouseover(function(){
		jQuery('.imagehome').attr('src','images/home_rollover.jpg');	
	});

	jQuery('.imagehome').mouseout(function(){
		jQuery('.imagehome').attr('src','images/exhibition.jpg');	
	});
})
</script>
</body>
</html>
