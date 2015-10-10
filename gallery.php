<!DOCTYPE HTML>
<html>
<head>
<title>Gallery</title>
<?php include_once('call-bootstrap.php'); ?>
<!-- Lightbox Make IE8 and below responsive by adding CSS3 MediaQuery support -->
<!--[if lt IE 9]>
  <script type='text/javascript' src='http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js'></script> 
<![endif]-->

<link href="fresco.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="fresco.js"></script>
<script type="text/javascript" src="jquery.rwdImageMaps.min.js"></script>

<script>
	jQuery(document).ready(function(){
		jQuery('img[usemap]').rwdImageMaps();
	})
</script>
</head>

<body>
<style>
.nav .gallery{background: #cb3338 !important; color:#000 !important}
</style>

<div class="container">
<!-- Call Narbar -->
<?php include_once('narbar.php'); ?>
<div class="row equal">
	<div class="col-md-9 col-xs-12 gallery-left text-center">
		<img src="images/gallery-img.png" class="img-responsive" border="0" usemap="#map" />
			<map name="map">
				<area shape="poly" coords="200,347,201,27,517,29,518,340,549,354,537,327,552,327,578,360,585,378,594,382,581,418,572,421,637,454,621,483,518,437,517,465,263,463,215,342,200,347,201,28" class='fresco' data-fresco-group='slider' data-fresco-group-options="ui: 'outside'" data-fresco-caption="Adoption 1" href="images/gallery/Adoption-1.jpg" />
				<area shape="poly" coords="3,199,81,168,95,193,85,205,98,234,138,312,199,347,213,344,266,471,55,553,7,424,4,195" class='fresco' data-fresco-group='glomesh' data-fresco-group-options="ui: 'outside'" data-fresco-caption="Cream mesh" href="images/glomesh-gallery/Cream-mesh.jpg" />
			</map>

		<!-- Gallery -->
		<a href='images/gallery/Adoption-2.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Adoption 2"></a>
		<a href='images/gallery/Adoption-3.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Adoption 3"></a>
		<a href='images/gallery/Cruise-Control-1.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Cruise Control 1"></a>
		<a href='images/gallery/Cruise-Control-2.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Cruise Control 1"></a>
		<a href='images/gallery/Double-O---GLO--1.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="00-GLO 1"></a>
		<a href='images/gallery/Double-O---GLO--2.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="00-GLO 2"></a>
		<a href='images/gallery/Double-O---GLO--3.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="00-GLO 3"></a>
		<a href='images/gallery/Double-O---GLO--4.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="00-GLO 4"></a>
		<a href='images/gallery/Glomesh-Queen-1.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glomesh Queen 1"></a>
		<a href='images/gallery/Glomesh-Queen-2.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glomesh Queen 2"></a>
		<a href='images/gallery/Glomesh-Queen-3.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glomesh Queen 3"></a>
		<a href='images/gallery/Glomesh-Queen-4.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glomesh Queen 4"></a>
		<a href='images/gallery/Glomesh-Spice-1.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glomesh Spice 1"></a>

		<!-- Glomesh -->
		<a href='images/glomesh-gallery/Glomesh-bags.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh bags"></a>
		<a href='images/glomesh-gallery/Glomesh-key-chain.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh key chain"></a>
		<a href='images/glomesh-gallery/glomesh-pic.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="glomesh pic"></a>
		<a href='images/glomesh-gallery/Golden-glo.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Golden glo"></a>
		<a href='images/glomesh-gallery/i-luv-glomesh.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="i luv glomesh"></a>
	</div>
	<div class="col-md-3 col-xs-12 gallery-right">
		<h1 class="heading" style="color:#daa521">The L’Ash Gallery</h1>
		<p>A retrospective and installation featuring photomontage artworks and Glomesh articles.  </p>
		
		<h1 class="title" style="color:#daa521">List of artworks</h2>
		<table class="table table-no-border">
			<tr>
				<td>Bonkers in Honkers</td>
				<td>1995</td>
			</tr><tr>
				<td>Glomesh Spice</td>
				<td>1997</td>    
			</tr><tr> 
				<td>Madam President</td>
				<td>1998</td>
			<tr></tr>	
				<td>OO-GLO</td>
				<td>1999</td>
			<tr></tr>	
				<td>Glomesh Queen</td>
				<td>2000</td>
			<tr></tr>	
				<td>Cruise control</td> 
				<td>2001</td>
			<tr></tr>	
				<td>Glamourism</td>
				<td>2002 </td>
			<tr></tr>	
				<td>Madge Kiss</td>
				<td>2003</td>
			<tr></tr>	
				<td>Rehab</td> 
				<td>2004</td>
			<tr></tr>	
				<td>Sedition</td>
				<td>2005</td>
			<tr></tr>	
				<td>Adoption</td>
				<td>2006</td>
			<tr></tr>	
				<td>Bag snatch</td>
				<td>2007</td>
			<tr></tr>	
				<td>Lady Pope</td>
				<td>2008</td>
			<tr></tr>	
				<td>Portable glamour</td> 
				<td>2009</td>
			<tr></tr>	
				<td>Guerilla mesh</td> 
				<td>2010</td>
			<tr></tr>	
				<td>Bowled over</td>
				<td>2011</td>
			<tr></tr>	
				<td>Psy-ched up</td> 
				<td>2012</td>
			<tr></tr>	
				<td>XRAY-ted</td> 
				<td>2013</td>
			</tr>
			<tr></tr>	
				<td>
					<a href="images/glo-down/Glo-down-1.jpg" class='fresco artwork' data-fresco-group='glo-down' data-fresco-group-options="ui: 'outside'" data-fresco-caption="Glo-down">GLO-down</a>
					<a href="images/glo-down/Glo-down-2.jpg" class='fresco' data-fresco-group='glo-down' data-fresco-caption="Glo-down"></a>
					<a href="images/glo-down/Glo-down-3.jpg" class='fresco' data-fresco-group='glo-down' data-fresco-caption="Glo-down"></a>
					<a href="images/glo-down/Glo-down-4.jpg" class='fresco' data-fresco-group='glo-down' data-fresco-caption="Glo-down"></a>
				</td> 
				<td>2014</td>
			</tr>
		</table>
	</div>
</div>	
<?php include_once('footer.php'); ?>
</div> <!-- /container -->
</body>
</html>
