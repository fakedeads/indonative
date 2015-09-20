<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<?php 
	include "admin_model.php";
	
?>

  <div id="page-wrapper">
			<form action="admin_controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="code" value="foto_portofolio">
					<div class="register-top-grid">
						<h3>Add Portofolio Photos</h3>
						<div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
							<span>Portofolio Title<label>*</label></span>
							<select name="title">
							<?php
								$rows = $portofolioHandler->query();
								//echo mysql_fetch_array($rows, MYSQL_ASSOC);
								while($row = mysql_fetch_array($rows, MYSQL_NUM))
								{
									echo '<option value="'.$row[1].'">'.$row[1].'</option>';
								}
								
							?>
							</select>
						</div>
						<div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
							<table>
								<tr>
									<td>
										<span>Photo 1 Title<label>*</label></span>
										<input type="text" name="photo_title_1">
									</td>
									<td>
										<span>Photo 1<label>*</label></span>
										<input type="file" name="photo1" size="25" />
									</td>
								</tr>
							</table>
						</div>
						<div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
							<table>
								<tr>
									<td>
										<span>Photo 2 Title<label>*</label></span>
										<input type="text" name="photo_title_2">
									</td>
									<td>
										<span>Photo 2<label>*</label></span>
										<input type="file" name="photo2" size="25" />
									</td>
								</tr>
							</table>
						</div>
						<div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
							<table>
								<tr>
									<td>
										<span>Photo 3 Title<label>*</label></span>
										<input type="text" name="photo_title_3">
									</td>
									<td>
										<span>Photo 3<label>*</label></span>
										<input type="file" name="photo3" size="25" />
									</td>
								</tr>
							</table>
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
