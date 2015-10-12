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
				<area shape="poly" coords="200,347,201,27,517,29,518,340,549,354,537,327,552,327,578,360,585,378,594,382,581,418,572,421,637,454,621,483,518,437,517,465,263,463,215,342,200,347,201,28" class='fresco' data-fresco-group='slider' data-fresco-group-options="ui: 'outside'" data-fresco-caption="Bonkers in Honkers 1" href="images/gallery/01-gallery.jpg" />
				<area shape="poly" coords="3,199,81,168,95,193,85,205,98,234,138,312,199,347,213,344,266,471,55,553,7,424,4,195" class='fresco' data-fresco-group='glomesh' data-fresco-group-options="ui: 'outside'" data-fresco-caption="Cream mesh" href="images/glomesh-gallery/Cream-mesh.jpg" />
			</map>

		<!-- Gallery -->
		<a href='images/gallery/02-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Bonkers in Honkers 2"></a>
		<a href='images/gallery/03-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Bonkers in Honkers 3"></a>
		<a href='images/gallery/04-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glomesh Spice 1"></a>
		<a href='images/gallery/05-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glomesh Spice 2"></a>
		<a href='images/gallery/06-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Madam President 1"></a>
		<a href='images/gallery/07-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Madam President 2"></a>
		<a href='images/gallery/08-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Madam President 3"></a>
		<a href='images/gallery/09-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Madam President 4"></a>
		<a href='images/gallery/10-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="00-GLO 1"></a>
		<a href='images/gallery/11-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="00-GLO 2"></a>
		<a href='images/gallery/12-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="00-GLO 3"></a>
		<a href='images/gallery/13-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="00-GLO 4"></a>
		<a href='images/gallery/14-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glomesh Queen 1"></a>
		<a href='images/gallery/15-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glomesh Queen 2"></a>
		<a href='images/gallery/16-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glomesh Queen 3"></a>
		<a href='images/gallery/17-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glomesh Queen 4"></a>
		<a href='images/gallery/18-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Cruise Control 1"></a>
		<a href='images/gallery/19-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Cruise Control 2"></a>
		<a href='images/gallery/20-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Cruise Control 3"></a>
		<a href='images/gallery/21-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Cruise Control 4"></a>
		<a href='images/gallery/22-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glamourism 1"></a>
		<a href='images/gallery/23-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glamourism 2"></a>
		<a href='images/gallery/24-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glamourism 3"></a>
		<a href='images/gallery/25-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Glamourism 4"></a>
		<a href='images/gallery/26-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Madge Kiss 1"></a>
		<a href='images/gallery/27-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Madge Kiss 2"></a>
		<a href='images/gallery/28-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Madge Kiss 3"></a>
		<a href='images/gallery/29-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Rehab 1"></a>
		<a href='images/gallery/30-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Rehab 2"></a>
		<a href='images/gallery/31-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Rehab 3"></a>
		<a href='images/gallery/32-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Rehab 4"></a>
		<a href='images/gallery/33-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Sedition 1"></a>
		<a href='images/gallery/34-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Sedition 2"></a>
		<a href='images/gallery/35-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Sedition 3"></a>
		<a href='images/gallery/36-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Adoption 1"></a>
		<a href='images/gallery/37-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Adoption 2"></a>
		<a href='images/gallery/38-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Adoption 3"></a>
		<a href='images/gallery/39-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Adoption 4"></a>
		<a href='images/gallery/40-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Bag Snatch 1"></a>
		<a href='images/gallery/41-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Bag Snatch 2"></a>
		<a href='images/gallery/42-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Bag Snatch 3"></a>
		<a href='images/gallery/43-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Lady Pope 1"></a>
		<a href='images/gallery/44-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Lady Pope 2"></a>
		<a href='images/gallery/45-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Lady Pope 3"></a>
		<a href='images/gallery/46-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Lady Pope 4"></a>
		<a href='images/gallery/47-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Lady Pope 5"></a>
		<a href='images/gallery/48-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Lady Pope 6"></a>
		<a href='images/gallery/49-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Portable Glamour 1"></a>
		<a href='images/gallery/50-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Portable Glamour 2"></a>
		<a href='images/gallery/51-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="GPortable Glamour 3"></a>
		<a href='images/gallery/52-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Portable Glamour 4"></a>
		<a href='images/gallery/53-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Guerilla Mesh 1"></a>
		<a href='images/gallery/54-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Guerilla Mesh 2"></a>
		<a href='images/gallery/55-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Guerilla Mesh 3"></a>
		<a href='images/gallery/56-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Bowled Over 1"></a>
		<a href='images/gallery/57-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Bowled Over 2"></a>
		<a href='images/gallery/58-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Bowled Over 3"></a>
		<a href='images/gallery/59-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Bowled Over 4"></a>
		<a href='images/gallery/60-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Psy-ched up 1"></a>
		<a href='images/gallery/61-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Psy-ched up 2"></a>
		<a href='images/gallery/62-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Psy-ched up 3"></a>
		<a href='images/gallery/63-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="Psy-ched up 4"></a>
		<a href='images/gallery/64-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="X-RAYted 1"></a>
		<a href='images/gallery/65-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="X-RAYted 2"></a>
		<a href='images/gallery/66-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="X-RAYted 3"></a>
		<a href='images/gallery/67-gallery.jpg' class='fresco' data-fresco-group='slider' data-fresco-caption="X-RAYted 4"></a>
		

		<!-- Glomesh -->
		<a href='images/glomesh-gallery/Glomesh-bags.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh bags"></a>
		<a href='images/glomesh-gallery/Glomesh-key-chain.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh key chain"></a>
		<a href='images/glomesh-gallery/glomesh-pic.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="glomesh pic"></a>
		<a href='images/glomesh-gallery/Golden-glo.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Golden glo"></a>
		<a href='images/glomesh-gallery/i-luv-glomesh.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="i luv glomesh"></a>
		<a href='images/glomesh-gallery/GLO1.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="GLO 1"></a>
		<a href='images/glomesh-gallery/Glomesh2015.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh 2015"></a>
		<a href='images/glomesh-gallery/Glomeshcigarette-case-and-lighter.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh cigarette case and lighter"></a>
		<a href='images/glomesh-gallery/Glomesh-earrings.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh earrings"></a>
		<a href='images/glomesh-gallery/glomesh-golden-gun.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh golden gun"></a>
		<a href='images/glomesh-gallery/Glomesh-gun.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh gun"></a>
		<a href='images/glomesh-gallery/Glomesh-handcuffs.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh handcuffs"></a>
		<a href='images/glomesh-gallery/glomesh-mesh.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh mesh"></a>
		<a href='images/glomesh-gallery/Glomesh-shoes.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh shoes"></a>
		<a href='images/glomesh-gallery/glomesh-snake.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh-snake"></a>
		<a href='images/glomesh-gallery/glomesh-throne.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Glomesh throne"></a>
		<a href='images/glomesh-gallery/Oroton-glomesh-scarf.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Oroton Glomesh scarf"></a>
		<a href='images/glomesh-gallery/vintage-glomesh.jpg' class='fresco' data-fresco-group='glomesh' data-fresco-caption="Vintage Glomesh"></a>
		
		
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
		</table>
	</div>
</div>	
<?php include_once('footer.php'); ?>
</div> <!-- /container -->
</body>
</html>
