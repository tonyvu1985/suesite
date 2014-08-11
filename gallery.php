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
		<a href='images/gallery/Adoption-1.jpg' class='fresco' data-fresco-group='slider' data-fresco-group-options="ui: 'outside'" data-fresco-caption="Adoption 1">
		     <img class="img-responsive" src='images/gallery-img.png' />
		</a>

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
