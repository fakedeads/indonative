<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <title>Slider with links</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
   	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
   	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   	<meta name="keywords" content="Source Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
   	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
   	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
   	<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" />
   	<script src="assets/js/jquery.min.js"></script>
   	<!-- slider -->
   	<link rel="stylesheet" type="text/css" media="all" href="assets/css/font-awesome.min.css" />
   	<link rel="stylesheet" type="text/css" media="all" href="assets/css/jgallery.min.css?v=1.5.0" />
   	<script type="text/javascript" src="assets/js/jquery-2.0.3.min.js"></script>
   	<script type="text/javascript" src="assets/js/jgallery.min.js?v=1.5.0"></script>
   	<script type="text/javascript" src="assets/js/touchswipe.min.js"></script>
</head>
<body >
 <div class="header">
  	    <div class="container">
			<div class="logo">
				<a href="index.html"><img src="assets/images/logo.png" class="img-responsive" alt="" /></a>
			</div>
			<div class="hader-top">
				<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-16">
							<li><a href="index.php" data-hover="HOME" >home</a></li>
							<li><a href="what_we_do.php"  data-hover="WHAT WE DO">what we do</a></li>
							<li><a href="our_work.php"  data-hover="PORTOFOLIO">portofolio</a></li>
							<li><a href="about_us.php"  data-hover="ABOUT US">about us</a></li>
							<li><a href="tutorials.php"  data-hover="TUTORIALS">tutorials</a></li>
							<li><a href="articles.php"  data-hover="ARTICLES">articles</a></li>
								<div class="clearfix"> </div>
						</ul>
							<!-- script-for-nav -->
						<script>
							$( "span.menu" ).click(function() {
							  $( ".head-nav ul" ).slideToggle(300, function() {
								// Animation complete.
							  });
							});
						</script>
					<!-- script-for-nav -->
				</div>
				<div class="head-right">
					<p><a href="contact_us.php">CONTACT US</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>

<div id="gallery">
    <a href="detail_our_work.php?id=1"><img src="admin/images/portofolio/screenshot aplikasi bpjs.png" alt="Hackathon : Aplikasi BPJS Kesehatan" /></a>
	<a href="http://jgallery.jakubkowalczyk.pl"><img src="admin/images/portofolio/2.jpg" alt="Photo 2" /></a>
    <a href="http://jgallery.jakubkowalczyk.pl"><img src="admin/images/portofolio/3.jpg" alt="Photo 3" /></a>
</div>
<script type="text/javascript">
$( function() {
    $( '#gallery' ).jGallery( { mode: 'slider' } );
} );
</script>
</body>
</html>
