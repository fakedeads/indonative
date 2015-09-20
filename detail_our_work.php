<?php
  include "header.php";
  include "class/first_class.php";
?>

<div id="gallery">
	 <?php 
		$id = $_GET["id"];
		$rows = $portofolioHandler->queryDetail($id);
		$row = mysql_fetch_array($rows, MYSQL_ASSOC);
		echo '<img src="admin/images/portofolio/'.$row["foto"].'" alt="'.$row["title"].'" />';
		$rows = $portofolioHandler->queryPhoto($id);
		while($row_foto = mysql_fetch_array($rows, MYSQL_ASSOC))
		{
			echo '<img src="admin/images/portofolio/'.$row_foto["foto"].'" alt="'.$row_foto["title_photo"].'" />';
		}
	?>
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
				echo '
				<h2>'.$row["title"].'</h2>
				<div class="col-md-offset-2 col-md-8 about-left1">
					<div class="left">
							<p>
							  Release date : '.date_format(date_create($row["release_date"]),"d M Y").'
							  <br/>
							  '.$row["description"].'
							</p>
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
