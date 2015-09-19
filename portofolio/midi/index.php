<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Melody an Music Category Flat Bootstarp responsive Website Template| Album :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Melody Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<script src="js/bootstrap.min.js"></script>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <script src="js/midi.js"></script>
        <script type="text/javascript">
        var mp1, mp2, mp3, mp4, mp5, mp6, mp7, mp8, mp9, mp10;
        var mp11, mp12, mp13, mp14, mp15, mp16, mp17, mp18, mp19, mp20;
        var mp21, mp22, mp23, mp24, mp25, mp26, mp27, mp28, mp29, mp30;
        var mp31, mp32, mp33, mp34, mp35, mp36;
        function init() {
			
            // Example 2. This will not loop.
            mp1 = new MidiPlayer('listmidi/jessie_j-domino.mid', 'btn1'); 
			mp2 = new MidiPlayer('listmidi/jessie_j-price_tag_feat_bob.mid', 'btn2'); 
			mp3 = new MidiPlayer('listmidi/Jet_-_Are_You_Gonna_Be_My_Girl.mid', 'btn3'); 
			mp4 = new MidiPlayer('listmidi/Jet_-_Cold_Hard_Bitch_(2).mid', 'btn4'); 
			mp5 = new MidiPlayer('listmidi/Jet_Get_Me_Outta_Here.mid', 'btn5'); 
			
			mp6 = new MidiPlayer('listmidi/Jet_-_Hey_Kids.mid', 'btn6'); 
			mp7 = new MidiPlayer('listmidi/Jet_-_Lazy_Gun.mid', 'btn7'); 
			mp8 = new MidiPlayer('listmidi/Jet_-_Look_What_Youve_Done.mid', 'btn8'); 
			mp9 = new MidiPlayer('listmidi/Jet_-_Timothy.mid', 'btn9'); 
			mp10 = new MidiPlayer('listmidi/kelly_clarkson-break_away.mid', 'btn10'); 
			
			mp11 = new MidiPlayer('listmidi/kelly_clarkson-a_moment_like_this.mid', 'btn11'); 
			mp12 = new MidiPlayer('listmidi/kelly_clarkson-cry.mid', 'btn12'); 
			mp13 = new MidiPlayer('listmidi/kelly_clarkson-miss_independent.mid', 'btn13'); 
			mp14 = new MidiPlayer('listmidi/kelly_clarkson-the_trouble_with_love_is.mid', 'btn14'); 
			mp15 = new MidiPlayer('listmidi/kelly_clarkson-walk_away.mid', 'btn15'); 
			
			mp16 = new MidiPlayer('listmidi/righteous_brothers-unchained_melody.mid', 'btn16'); 
			mp17 = new MidiPlayer('listmidi/the_cure_-_boys_dont_cry.mid', 'btn17'); 
			mp18 = new MidiPlayer('listmidi/the_cure_-_burn.mid', 'btn18'); 
			mp19 = new MidiPlayer('listmidi/the_killers-when_you_were_young.mid', 'btn19'); 
			mp20 = new MidiPlayer('listmidi/the_cure_-_just_like_heaven.mid', 'btn20'); 
			
			mp21 = new MidiPlayer('listmidi/the_killers-human.mid', 'btn21'); 
			mp22 = new MidiPlayer('listmidi/the_killers-jenny_was_a_friend_of_mine.mid', 'btn22'); 
			mp23 = new MidiPlayer('listmidi/the_killers-mr_brightside.mid', 'btn23'); 
			mp24 = new MidiPlayer('listmidi/the_killers-read_my_mind.mid', 'btn24');
			mp25 = new MidiPlayer('listmidi/the_killers-smile_like_you_mean_it.mid', 'btn25');
			
			mp26 = new MidiPlayer('listmidi/the_killers-somebody_told_me.mid', 'btn26');
			mp27 = new MidiPlayer('listmidi/adaaotn.mid', 'btn27');
			mp28 = new MidiPlayer('listmidi/alcohol.mid', 'btn28');
			mp29 = new MidiPlayer('listmidi/sunnypm.mid', 'btn29');
			mp30 = new MidiPlayer('listmidi/villagegreen.mid', 'btn30');
			
			mp31 = new MidiPlayer('listmidi/waterloo.mid', 'btn31');
			mp32 = new MidiPlayer('listmidi/vrgm.mid', 'btn32');
			mp33 = new MidiPlayer('listmidi/autumn.mid', 'btn33');
			mp34 = new MidiPlayer('listmidi/betterthings.mid', 'btn34');
			mp35 = new MidiPlayer('listmidi/arthur.mid', 'btn35');
			mp36 = new MidiPlayer('listmidi/berkeleymews.mid', 'btn36');

}

        function doPlay(m, btn) {
            if (btn.value == 'play') {
                m.play();
                btn.value = 'stop';
            }
            else {
                m.stop();
                btn.value = 'play';
            }
        }
        
        function do_clear() { 
            document.getElementById('msg').innerHTML=''; 
            document.getElementById('div_clear').style.display='none';
        }
        function show_clear() {
            document.getElementById('div_clear').style.display='block';
        }
        </script>
 </head>
<body onload="javascript:init();">
 <div class="banner">
 	<!-- start search-->
			<div class="search-box">
			   <div id="sb-search" class="sb-search">
				  <form>
					 <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
					 <input class="sb-search-submit" type="submit" value="">
					 <span class="sb-icon-search"> </span>
				  </form>
			    </div>
			 </div>
			 <!----search-scripts---->
			 <script src="js/classie.js"></script>
			 <script src="js/uisearch.js"></script>
			   <script>
				 new UISearch( document.getElementById( 'sb-search' ) );
			   </script>
				<!----//search-scripts---->
		   <div class="header_bottom">
		   	<div class="container">
      		  <div class="logo">
				<h2><a href="index.php">Melody</a></h2>
			  </div>
			 <nav class="navbar navbar-default menu" role="navigation"><h3 class="nav_right"><a href="index.php">Melody</a></h3>
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav menu1">
			      	<li class="active"><a href="index.php">Home</a></li>
			      </ul>
			   </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
            <div class="clearfix"></div>
		 </div>  
       </div>
</div>
<div class="main">
	    <div class="about_grid1">
	      <div class="container">
		     <div class="album_2">
		     	  <div class="col-md-12 album_5">
		     		    <ul class="music-list">
		     		       <h3>Track Listing</h3>
                            
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Jessie J - Domino <input  type="button" value="play" id="btn1" onclick="doPlay(mp1, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Jessie J - Price Tag <input  type="button" value="play" id="btn2" onclick="doPlay(mp2, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Jet - Are You Gonna Be My Girl <input  type="button" value="play" id="btn3" onclick="doPlay(mp3, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Jet - Cold Hard Bitch <input  type="button" value="play" id="btn4" onclick="doPlay(mp4, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Jet - Get Me Outta Here <input  type="button" value="play" id="btn5" onclick="doPlay(mp5, this);">
                            </li>
                            <!--  LINE 2 -->
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Jet - Hey Kids <input  type="button" value="play" id="btn6" onclick="doPlay(mp6, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Jet - Lazy Gun <input  type="button" value="play" id="btn7" onclick="doPlay(mp7, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Jet - Look What You've Done <input  type="button" value="play" id="btn8" onclick="doPlay(mp8, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Jet - Timothy <input  type="button" value="play" id="btn9" onclick="doPlay(mp9, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Kelly Clarkson - Break Away <input  type="button" value="play" id="btn10" onclick="doPlay(mp10, this);">
                            </li>
                            <!--  LINE 3 -->
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Kelly Clarkson - A Moment Like This <input  type="button" value="play" id="btn11" onclick="doPlay(mp11, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Kelly Clarkson - Cry <input  type="button" value="play" id="btn12" onclick="doPlay(mp12, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Kelly Clarkson - Miss Independent <input  type="button" value="play" id="btn13" onclick="doPlay(mp13, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Kelly Clarkson - The Trouble With Love Is <input  type="button" value="play" id="btn14" onclick="doPlay(mp14, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Kelly Clarkson - Walk Away <input  type="button" value="play" id="btn15" onclick="doPlay(mp15, this);">
                            </li>
                            <!--  LINE 4 -->
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	Righteous Brothers - Unchained Melody <input  type="button" value="play" id="btn16" onclick="doPlay(mp16, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Cure - Boys Don't Cry<input  type="button" value="play" id="btn17" onclick="doPlay(mp17, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Cure - Burn <input  type="button" value="play" id="btn18" onclick="doPlay(mp18, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Killers - When You Were Young <input  type="button" value="play" id="btn19" onclick="doPlay(mp19, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Cure - Just Like Heaven <input  type="button" value="play" id="btn20" onclick="doPlay(mp20, this);">
                            </li>
                            <!--  LINE 5 -->
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Killers - Human <input  type="button" value="play" id="btn21" onclick="doPlay(mp21, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Killers - Jenny Was A Friend Of Mine <input  type="button" value="play" id="btn22" onclick="doPlay(mp22, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Killers - Mr Brightside <input  type="button" value="play" id="btn23" onclick="doPlay(mp23, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Killers - Read My Mind <input  type="button" value="play" id="btn24" onclick="doPlay(mp24, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Killers - Smile Like You Mean It <input  type="button" value="play" id="btn25" onclick="doPlay(mp25, this);">
                            </li>
                            
                            <!--  LINE 6 -->
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Killers - Somebody Told Me <input  type="button" value="play" id="btn26" onclick="doPlay(mp26, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Kinks - All Day And All Of The Night <input  type="button" value="play" id="btn27" onclick="doPlay(mp27, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Kinks - Alcohol <input  type="button" value="play" id="btn28" onclick="doPlay(mp28, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Kinks - Sunday Afternoon <input  type="button" value="play" id="btn29" onclick="doPlay(mp29, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Kinks - Village Green <input  type="button" value="play" id="btn30" onclick="doPlay(mp30, this);">
                            </li>
                            
                            <!--  LINE 7 -->
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Kinks - Waterloo Sunset <input  type="button" value="play" id="btn31" onclick="doPlay(mp31, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Kinks - You Really Got Me <input  type="button" value="play" id="btn32" onclick="doPlay(mp32, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Kinks - Better Things <input  type="button" value="play" id="btn33" onclick="doPlay(mp33, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Kinks - Arthur <input  type="button" value="play" id="btn34" onclick="doPlay(mp34, this);">
                            </li>
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Kinks - Autumn <input  type="button" value="play" id="btn35" onclick="doPlay(mp35, this);">
                            </li>
                            
                            <li class="skin1">
                            	<a class="dlw-btn" href="#"><i class="fa fa-music"></i></a>
                            	The Kinks - Berkeley Mews <input  type="button" value="play" id="btn36" onclick="doPlay(mp36, this);">
                            </li>
                      	</ul>
		     	</div>
		     	<div class="clearfix"> </div>
		     </div>
	      </div>
	    </div>
	    <div class="footer">
           	 <div class="container">
           	 	
           	 </div>
           </div> 
           <div class="footer_bottom">
           	<div class="container">
           		<p class="copy">Copyright &copy; 2015 Melody. All Rights Reserved. Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
           	</div>
		   </div>   
        </div>
</body>
</html>		