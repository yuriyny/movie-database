<?php require_once("initialize.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Movies</title>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/movielist.css" type="text/css" media="all" />
	<link href="css/single.css" rel='stylesheet' type='text/css' />
	<link href="css/medile.css" rel='stylesheet' type='text/css' />
	<!-- banner-slider -->
	<link href="css/jquery.slidey.min.css" rel="stylesheet">
	<!-- //banner-slider -->
	<!-- pop-up -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-up -->
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<!-- //font-awesome icons -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- banner-bottom-plugin -->
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({

		  autoPlay: 3000, //Set AutoPlay to 3 seconds

		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]

		});

		}); 
	</script> 
	<!-- //banner-bottom-plugin -->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
</head>

<body>
	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="index.html"><h1>OYO<span>Movies</span></h1></a>
			</div>
			<div class="w3_search">
				<form action="action.php" method="post">
					<input type="text" name="Search" placeholder="Search" required="">
					<input type="submit" value="Go">
				</form>
			</div>
			<div class="w3l_sign_in_register">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> (+631) 123 345 653</li>
					<li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header -->
	<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
								<div class="toggle"><i class="fa fa-times fa-pencil"></i>
									<div class="tooltip">Click Me</div>
								</div>
								<div class="form">
									<h3>Login to your account</h3>
									<form action="#" method="post">
										<input type="text" name="Username" placeholder="Username" required="">
										<input type="password" name="Password" placeholder="Password" required="">
										<input type="submit" value="Login">
									</form>
								</div>
								<div class="form">
									<h3>Create an account</h3>
									<form action="#" method="post">
										<input type="text" name="Username" placeholder="Username" required="">
										<input type="password" name="Password" placeholder="Password" required="">
										<input type="email" name="Email" placeholder="Email Address" required="">
										<input type="text" name="Phone" placeholder="Phone Number" required="">
										<input type="submit" value="Register">
									</form>
								</div>
								<div class="cta"><a href="#">Forgot your password?</a></div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
		  	height: "toggle",
		  	'padding-top': 'toggle',
		  	'padding-bottom': 'toggle',
		  	opacity: "toggle"
		  }, "slow");
		});
	</script>
	<!-- //bootstrap-pop-up -->
	<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.php?genre=Action">Action</a></li>
												<li><a href="genres.php?genre=Biography">Biography</a></li>
												<li><a href="genres.php?genre=Crime">Crime</a></li>
												<li><a href="genres.php?genre=Family">Family</a></li>
												<li><a href="genres.php?genre=Horror">Horror</a></li>
												<li><a href="genres.php?genre=Romance">Romance</a></li>
												<li><a href="genres.php?genre=Sports">Sports</a></li>
												<li><a href="genres.php?genre=War">War</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.php?genre=Adventure">Adventure</a></li>
												<li><a href="genres.php?genre=Comedy">Comedy</a></li>
												<li><a href="genres.php?genre=Documentary">Documentary</a></li>
												<li><a href="genres.php?genre=Fantasy">Fantasy</a></li>
												<li><a href="genres.php?genre=Thriller">Thriller</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.php?genre=Animation">Animation</a></li>
												<li><a href="genres.php?genre=Costume">Costume</a></li>
												<li><a href="genres.php?genre=Drama">Drama</a></li>
												<li><a href="genres.php?genre=History">History</a></li>
												<li><a href="genres.php?genre=Musical">Musical</a></li>
												<li><a href="genres.php?genre=Psychological">Psychological</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="top.php">Top Rated</a></li>
							<li><a href="actors.php">Actors</a></li>
							<li><a href="rate.php">Rate A Movie</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
	<!-- //nav -->

	<!-- MOVIE LIST -->
	<div id="DIV_1">
		<br id="BR_14" />
		<table id="TABLE_15">
			<colgroup id="COLGROUP_16">
				<col id="COL_17" />
				<col id="COL_18" />
				<col id="COL_19" />
				<col id="COL_20" />
				<col id="COL_21" />
			</colgroup>
			<thead id="THEAD_22">
				<tr id="TR_23">
					<th id="TH_24">
					</th>
					<th id="TH_25">
						Actor Name
					</th>
				</tr>
			</thead>
			<tbody id="TBODY_29">
				<?php 
					$result = find_all_actors();
					while ($nresult = db_fetch_assoc($result)){
						echo 
						'
							<tr id="TR_30">
							<td id="TD_31">
							<span id="SPAN_32"></span><span id="SPAN_33"></span><span id="SPAN_34"></span><span id="SPAN_35"></span><span id="SPAN_36"></span> <a href="/title/tt5491994/?pf_rd_m=A2FGELUUNOQJNL&amp;pf_rd_p=12230b0e-0e00-43ed-9e59-8d5353703cce&amp;pf_rd_r=PDZ0DG8SQ8B0MRK3H9D1&amp;pf_rd_s=center-1&amp;pf_rd_t=15506&amp;pf_rd_i=toptv&amp;ref_=chttvtp_tt_1" id="A_37"><img src="images/actor3.jpg" width="67" height="67" id="IMG_38" alt="" /></a>
							</td>
							<td id="TD_39">
							 <a href="personinfo.html" title="David Attenborough" id="A_40">'.$nresult["firstName"].' '.$nresult["lastName"].'</a> 
							</td>
							</tr>
						';
					}
					db_free_result($result);
					db_close($db); 
				?>
				
			</tbody>
		</table>
	</div>




	<!-- //MOVIE LIST -->




	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".dropdown").hover(            
				function() {
					$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
					$(this).toggleClass('open');        
				},
				function() {
					$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
					$(this).toggleClass('open');       
				}
				);
		});
	</script>
	<!-- //Bootstrap Core JavaScript -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		<!-- //here ends scrolling icon -->
	</body>
	</html>