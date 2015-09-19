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
		<div class="graphs">
			 <div class="xs">
				 	<h3>Add Portofolio</h3>
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="admin_controller.php" method="post" enctype="multipart/form-data">
								<input type="hidden" name="code" value="portofolio">
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Title*</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input" name="title">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Description*</label>
									<div class="col-sm-8">
										<textarea id="txtarea1" cols="0" rows="0" class="form-control1" name="description" style="height: 200px;">
										</textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Release Date*</label>
									<div class="col-sm-8">
										<input type="date" name="release_date" id="release_date">
									</div>
								</div>
								<div class="form-group">
					        <label for="exampleInputFile" class="col-sm-2 control-label">Photo*</label>
									<div class="col-sm-8">
						        <input type="file" name="photo" size="25" id="exampleInputFile">
						        <p class="help-block">Example block-level help text here.</p>
									</div>
					      </div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<input type="submit" value="submit" class="btn-success btn">
										</div>
									</div>
							 </div>
							</form>
						</div>
					</div>
			</div>
		</div>
	</div>
<?php
  include "footer.php";
?>
