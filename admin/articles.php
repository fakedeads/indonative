<?php
  include "header.php";
  include "sidebar.php";
?>
<div id="page-wrapper">
			<form action="admin_controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="code" value="articles">
					<div class="register-top-grid">
						<h3>Add Articles</h3>
						<div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
							<span>Title<label>*</label></span>
							<input type="text" name="title">
						</div>
						<div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
							<span>Description<label>*</label></span>
							<textarea id="description" style="padding:0px; height:150px" name="description">
							</textarea>
						</div>
						<div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
							<span>Photo<label>*</label></span>
							<input type="file" name="photo" size="25" />
						</div>
						<div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
							<input type="submit" value="submit">
						</div>
					</div>
			</form>
</div>
<?php
  include "footer.php";
?>
