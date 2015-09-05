<?php
  include "header.php";
  include "class/first_class.php";
?>

<!-- about-section -->
	<div class="about-section">
		<div class="container">
			<h2>Article</h2>
			<div class="col-md-offset-2 col-md-8 about-left1">
			<?php 
				$rows = $articleHandler->query();
				while($row = mysql_fetch_array($rows, MYSQL_ASSOC))
				{
					echo '
					<div class="left">
						<div class="left-top">
							<img src="admin/images/'.$row["foto"].'"  class="img-responsive" alt="" />
						</div>
						<div class="left-top1">
							<h5><a href="#">'.$row["title"].'</a></h5>
							<p>
							  Added date : '.$row["date"].'
							  <br/>
							  '.$row["description"].'
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>';
				}
			?>
			</div>
		</div>
	</div>
<!-- about-section -->

<?php
  include "footer.php";
?>
