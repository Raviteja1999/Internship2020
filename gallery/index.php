<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CTRI Rajahmundry</title>
		<meta charset="UTF-8" />
		<meta https-equiv="X-UA-Compatible" content="IE=edge" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        <meta name="description" content="Responsive Image Gallery with jQuery" />
        <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
		<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl"></script>	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
    </head>
    <body>
		<div class="container">
			    <a href="../index.php">CTRI HOME<br>
                    <img class="simple" alt="image is loading" src="images/home.png">
                    </a>
		
			
			<div class="content">
				
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
<div class="es-carousel">
<ul>


<li><a href='#'><img src='images/thumbs/ainpt-18.jpg' data-large='images/ainpt-18.jpg' alt='ainpt-18' /></a></li>
<li><a href='#'><img src='images/thumbs/ainpt-181.jpg' data-large='images/ainpt-181.jpg' alt='ainpt-181' /></a></li>
<li><a href='#'><img src='images/thumbs/hi1.jpg' data-large='images/hi1.jpg' alt='hi1' /></a></li>
<li><a href='#'><img src='images/thumbs/hi2.jpg' data-large='images/hi2.jpg' alt='hi2' /></a></li>
<li><a href='#'><img src='images/thumbs/dsa6.jpg' data-large='images/dsa6.jpg' alt='dsa6' /></a></li>
<li><a href='#'><img src='images/thumbs/dsa5.jpg' data-large='images/dsa5.jpg' alt='dsa5' /></a></li>
<li><a href='#'><img src='images/thumbs/dsa4.jpg' data-large='images/dsa4.jpg' alt='dsa4' /></a></li>
<li><a href='#'><img src='images/thumbs/dsa3.jpg' data-large='images/dsa3.jpg' alt='dsa3' /></a></li>
<li><a href='#'><img src='images/thumbs/dsa2.jpg' data-large='images/dsa2.jpg' alt='dsa2' /></a></li>
<li><a href='#'><img src='images/thumbs/dsa1.jpg' data-large='images/dsa1.jpg' alt='dsa1' /></a></li>
<li><a href='#'><img src='images/thumbs/irc1.jpg' data-large='images/irc1.jpg' alt='irc1' /></a></li>
<li><a href='#'><img src='images/thumbs/irc2.jpg' data-large='images/irc2.jpg' alt='irc2' /></a></li>
<li><a href='#'><img src='images/thumbs/irc3.jpg' data-large='images/irc3.jpg' alt='irc3' /></a></li>
<li><a href='#'><img src='images/thumbs/irc4.jpg' data-large='images/irc4.jpg' alt='irc4' /></a></li>
<li><a href='#'><img src='images/thumbs/irc5.jpg' data-large='images/irc5.jpg' alt='irc5' /></a></li>
<li><a href='#'><img src='images/thumbs/yoga-18.jpg' data-large='images/yoga-18.jpg' alt='yoga-18' /></a></li>
<li><a href='#'><img src='images/thumbs/rac181.jpg' data-large='images/rac181.jpg' alt='rac181' /></a></li>
<li><a href='#'><img src='images/thumbs/rac182.jpg' data-large='images/rac182.jpg' alt='rac182' /></a></li>
<li><a href='#'><img src='images/thumbs/rac183.jpg' data-large='images/rac183.jpg' alt='rac183' /></a></li>
<li><a href='#'><img src='images/thumbs/rac184.jpg' data-large='images/rac184.jpg' alt='rac184' /></a></li>
<li><a href='#'><img src='images/thumbs/imc-18.jpg' data-large='images/imc-18.jpg' alt='imc-18' /></a></li>
<li><a href='#'><img src='images/thumbs/train-1.jpg' data-large='images/train-1.jpg' alt='train-1' /></a></li>
<li><a href='#'><img src='images/thumbs/women-18.jpg' data-large='images/women-18.jpg' alt='women-18' /></a></li>
<li><a href='#'><img src='images/thumbs/krishi1.jpg' data-large='images/krishi-1.jpg' alt='krishi-1' /></a></li>
<li><a href='#'><img src='images/thumbs/krishi2.jpg' data-large='images/krishi-2.jpg' alt='krishi-2' /></a></li>
<li><a href='#'><img src='images/thumbs/krishi1.jpg' data-large='images/krishi-3.jpg' alt='krishi-3' /></a></li>
<li><a href='#'><img src='images/thumbs/f1.jpg' data-large='images/f1.jpg' alt='f1' /></a></li>
<li><a href='#'><img src='images/thumbs/f2.jpg' data-large='images/f2.jpg' alt='f2' /></a></li>
<li><a href='#'><img src='images/thumbs/f3.jpg' data-large='images/f3.jpg' alt='f3' /></a></li>
<li><a href='#'><img src='images/thumbs/f4.jpg' data-large='images/f4.jpg' alt='f4' /></a></li>
<li><a href='#'><img src='images/thumbs/swa5.jpg' data-large='images/swa5.jpg' alt='swa5' /></a></li>
<li><a href='#'><img src='images/thumbs/imc17.jpg' data-large='images/imc17.jpg' alt='imc17' /></a></li>



<li><a href='#'><img src='images/thumbs/pledge.jpg' data-large='images/pledge.jpg' alt='pledge' /></a></li>
<li><a href='#'><img src='images/thumbs/tra1.jpg' data-large='images/tra1.jpg' alt='tra1' /></a></li>
<li><a href='#'><img src='images/thumbs/swa4.jpg' data-large='images/swa4.jpg' alt='swa4' /></a></li>

<li><a href='#'><img src='images/thumbs/swa3.jpg' data-large='images/swa3.jpg' alt='swa3' /></a></li>							
<li><a href='#'><img src='images/thumbs/swa2.jpg' data-large='images/swa2.jpg' alt='swa2' /></a></li>								
<li><a href='#'><img src='images/thumbs/swa.jpg' data-large='images/swa.jpg' alt='swa' /></a></li>

<li><a href='#'><img src='images/thumbs/sankalp.jpg' data-large='images/sankalp.jpg' alt='swa1' /></a></li>


<li><a href='#'><img src='images/thumbs/yoga.jpg' data-large='images/yoga.jpg' alt='yoga' /></a></li>
<li><a href='#'><img src='images/thumbs/train.jpg' data-large='images/train.jpg' alt='train' /></a></li>
<li><a href='#'><img src='images/thumbs/cash.jpg' data-large='images/cash.jpg' alt='cash' /></a></li>


<li><a href='#'><img src='images/thumbs/pro1.jpg' data-large='images/pro1.jpg' alt='pro1' /></a></li>
<li><a href='#'><img src='images/thumbs/pro2.jpg' data-large='images/pro2.jpg' alt='pro2' /></a></li>


<li><a href='#'><img src='images/thumbs/ag1.jpg' data-large='images/ag1.jpg' alt='ag1' /></a></li>
<li><a href='#'><img src='images/thumbs/ag2.jpg' data-large='images/ag2.jpg' alt='ag2' /></a></li>


<li><a href='#'><img src='images/thumbs/ddg1.jpg' data-large='images/ddg1.jpg' alt='ddg1' /></a></li>
<li><a href='#'><img src='images/thumbs/ddg2.jpg' data-large='images/ddg2.jpg' alt='ddg2' /></a></li>
<li><a href='#'><img src='images/thumbs/ddg3.jpg' data-large='images/ddg3.jpg' alt='ddg3' /></a></li>
<li><a href='#'><img src='images/thumbs/ddg4.jpg' data-large='images/ddg4.jpg' alt='ddg4' /></a></li>


<li><a href='#'><img src='images/thumbs/dg1.jpg' data-large='images/dg1.jpg' alt='dg1' /></a></li>
<li><a href='#'><img src='images/thumbs/dg2.jpg' data-large='images/dg2.jpg' alt='dg2' /></a></li>
<li><a href='#'><img src='images/thumbs/dg3.jpg' data-large='images/dg3.jpg' alt='dg3' /></a></li>
<li><a href='#'><img src='images/thumbs/dg4.jpg' data-large='images/dg4.jpg' alt='dg4' /></a></li>
<li><a href='#'><img src='images/thumbs/dg5.jpg' data-large='images/dg5.jpg' alt='dg5' /></a></li>


</ul>

	
					
							
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
				</div><!-- content -->
		</div><!-- container -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="js/gallery.js"></script>
    </body>
</html>