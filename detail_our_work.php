<?php
  include "header.php";
  include "class/first_class.php";
?>

<div id="gallery">
	 <?php 
		$id = $_GET["id"];
		$rows = $portofolioHandler->queryDetail($id);
		$row = mysql_fetch_array($rows, MYSQL_ASSOC);
		echo '<img src="admin/images/portofolio/'.$row["foto"].'" alt="<b>'.$row["title"].'</b>" />';
		$rows = $portofolioHandler->queryPhoto($id);
		while($row_foto = mysql_fetch_array($rows, MYSQL_ASSOC))
		{
			echo '<img src="admin/images/portofolio/'.$row_foto["foto"].'" alt="<b>'.$row_foto["title_photo"].'</b>"/>';
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
							  <b>Release date : '.date_format(date_create($row["release_date"]),"d M Y").'</b>
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
