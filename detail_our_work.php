<?php
  include "header.php";
  include "class/first_class.php";
?>

<div id="gallery">
    <img src="admin/images/portofolio/screenshot aplikasi bpjs.png" alt="Hackathon : Aplikasi BPJS Kesehatan" />
	<img src="admin/images/portofolio/2.jpg" alt="Photo 2" />
    <img src="admin/images/portofolio/3.jpg" alt="Photo 3" />
</div>
<script type="text/javascript">
$( function() {
    $( '#gallery' ).jGallery( { mode: 'slider' } );
} );
</script>

<!-- about-section -->
	<div class="about-section">
		<div class="container">
			<?php 
				$id = $_GET["id"];
				$rows = $portofolioHandler->queryDetail($id);
				$row = mysql_fetch_array($rows, MYSQL_ASSOC);
				echo '
				<h2>'.$row["title"].'</h2>
				<div class="col-md-offset-2 col-md-8 about-left1">
					<div class="left">
						<div class="left-top">
							<img src="admin/images/portofolio/'.$row["foto"].'"  class="img-responsive" alt="" />
						</div>
						<div class="left-top1">
							<p>
							  Release date : '.date_format(date_create($row["release_date"]),"d M Y").'
							  <br/>
							  '.$row["description"].'
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>';
			?>	
		</div>
	</div>
<!-- about-section -->

<?php
  include "footer.php";
?>
