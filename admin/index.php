
<?php 
	session_start();
	if(isset($_SESSION['username']) and $_SESSION['username'] <> '')
	{
		include "header.php"; 
		include "sidebar.php"; 
?>

	   <div id="page-wrapper">
	   </div>
	 <!-- /#wrapper -->
		<!-- Bootstrap Core JavaScript 
		 this moving to header <script src="js/bootstrap.min.js"></script> -->
	  

<?php 
		include "footer.php"; 
	}
	else
	{
		$error_msg = null;
		if(isset($_SESSION['username']))
		{
			if($_SESSION['username']=='')
			{
				$error_msg = 'Kombinasi Username dan Password yang digunakan tidak tepat!';
			}
		}
?>		
		<!--
		Author: W3layouts
		Author URL: http://w3layouts.com
		License: Creative Commons Attribution 3.0 Unported
		License URL: http://creativecommons.org/licenses/by/3.0/
		-->
		<!DOCTYPE HTML>
		<html>
		<head>
		 <title>INDONATIVE ADMIN PAGE</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
		 Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		  <!-- Bootstrap Core CSS -->
		 <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		 <!-- Custom CSS -->
		 <link href="css/style.css" rel='stylesheet' type='text/css' />
		 <link href="css/font-awesome.css" rel="stylesheet">
		 <!-- jQuery -->
		 <script src="js/jquery.min.js"></script>
		 <!----webfonts--->
		 <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		 <!---//webfonts--->
		 <!-- Bootstrap Core JavaScript -->
		 <script src="js/bootstrap.min.js"></script>
		</head>
		<body id="login">
		  <div class="login-logo">
			<a href="index.html"><img src="images/logo.png" alt=""/></a>
		  </div>
		  <h2 class="form-heading">login</h2>
		  <div class="app-cam">
			  <form action="admin_controller.php" method="post">
				<input type="hidden" name="code" value="login">
				<input name="username" type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
				<input name="password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
			  </form>
				<?php 
					if(!is_null($error_msg))
					{
						echo '<h6 style="color:red">'.$error_msg.'</h6>';
					}
				?>
		  </div>
		</body>
		</html>
<?php 
	}
?>
