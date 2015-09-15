<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
    <script type="text/javascript">
        $(document).ready(function(){
            $("#date").datepicker();
        });
	</script>
  <div id="page-wrapper">
			<form action="admin_controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="code" value="portofolio">
					<div class="register-top-grid">
						<h3>Add Portofolio</h3>
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
							<span>Release Date<label>*</label></span>
							<input type="date" name="release_date" id="release_date">
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
