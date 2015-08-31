<?php
  include "header.php";
?>
<div class="content_bg">
<div class="container">
			<div class="register">
		    <form action="activities.php" method="post">

           <input type="hidden" name="code" value="contact_us">
  				 <div class="register-top-grid">
  					<h3>CONTACT US</h3>
  					 <div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
  						<span>Name<label>*</label></span>
  						<input type="text" name="name">
  					 </div>
  					 <div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
  						<span>Phone Number<label>*</label></span>
  						<input type="text" name="phone_number">
  					 </div>
  					 <div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
  						 <span>Email Address<label>*</label></span>
  						 <input type="text" name="email_address">
  					 </div>
             <div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
  						 <span>Message<label>*</label></span>
  						 <textarea id="message" style="padding:0px; height:150px" name="message">
               </textarea>
  					 </div>
             <div class="wow fadeInRight col-md-8 col-sm-12" data-wow-delay="0.4s">
  						  <input type="submit" value="submit">
  					 </div>
  			   </div>
				</form>
		   </div>
		 </div>
	</div>
<?php
  include "footer.php";
?>
