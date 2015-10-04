	<?php
		include "header.php";
		include "class/first_class.php";
	?>

<!-- about-section -->
	<div class="about-section">
		<div class="container">
			<h2>Portofolio</h2>
			<h6 align="center"><i>* Click on the slide to view the detail</i></h6>
			<div id="gallery">
					<?php
						$rows = $portofolioHandler->query();
						while($row = mysql_fetch_array($rows, MYSQL_ASSOC))
						{
							echo '<a href="detail_our_work.php?id='.$row["id"].'"><img src="admin/images/portofolio/'.$row["foto"].'" alt="<b>'.$row["title"].'</b>"/></a>';
						}
					?>
			</div>
				<script type="text/javascript">
				$( function() {
					$( '#gallery' ).jGallery( { mode: 'slider' } );
				} );
				</script>
		</div>
	</div>
<!-- about-section -->
<?php
  include "footer.php";
?>