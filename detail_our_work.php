<?php
  include "header.php";
  include "class/first_class.php";
?>

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
							<img src="admin/images/'.$row["foto"].'"  class="img-responsive" alt="" />
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
