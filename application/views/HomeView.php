<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<!-- Basic need -->
	<title>Spha Nung</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

	<!--Google Font-->
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<!-- preloading -->
	<div id="preloader">
		<!-- <img class="logo" src="assets/images/logo1.png" alt="" width="119" height="58">
		<div id="status">
			<span></span>
			<span></span>
		</div> -->
	</div><!--end of preloading-->

	<!--login form popup-->
	<div class="login-wrapper" id="login-content">
		<div class="login-content">
			<a href="#" class="close">x</a>
			<h3>Login</h3>
			<form method="post" action="login.php">
				<div class="row">
					<label for="username">
						Username:
						<input type="text" name="username" id="username" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required"
						/>
					</label>
				</div>

				<div class="row">
					<label for="password">
						Password:
						<input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
						 required="required" />
					</label>
				</div>
				<div class="row">
					<div class="remember">
						<div>
							<input type="checkbox" name="remember" value="Remember me">
							<span>Remember me</span>
						</div>
						<a href="#">Forget password ?</a>
					</div>
				</div>
				<div class="row">
					<button type="submit">Login</button>
				</div>
			</form>
			<div class="row">
				<p>Or via social</p>
				<div class="social-btn-2">
					<a class="fb" href="#">
						<i class="ion-social-facebook"></i>Facebook</a>
					<a class="tw" href="#">
						<i class="ion-social-twitter"></i>twitter</a>
				</div>
			</div>
		</div>
	</div> <!--end of login form popup-->

	<!--signup form popup-->
	<div class="login-wrapper" id="signup-content">
		<div class="login-content">
			<a href="#" class="close">x</a>
			<h3>sign up</h3>
			<form method="post" action="signup.php">
				<div class="row">
					<label for="username-2">
						Username:
						<input type="text" name="username" id="username-2" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required"
						/>
					</label>
				</div>
				<div class="row">
					<label for="email-2">
						your email:
						<input type="password" name="email" id="email-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
						 required="required" />
					</label>
				</div>
				<div class="row">
					<label for="password-2">
						Password:
						<input type="password" name="password" id="password-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
						 required="required" />
					</label>
				</div>
				<div class="row">
					<label for="repassword-2">
						re-type Password:
						<input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
						 required="required" />
					</label>
				</div>
				<div class="row">
					<button type="submit">sign up</button>
				</div>
			</form>
		</div>
	</div> <!--end of signup form popup-->

	<!-- BEGIN | Header -->
	<header class="ht-header full-width-hd">
		<div class="row">
			<nav id="mainNav" class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
					<div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<a href="#">
						<img class="logo" src="assets/images/logo1.png" alt="" width="119" height="58">
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
								Home
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
								movies
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li>
									<a href="#">Movie list</a>
								</li>
								<li class="it-last">
									<a href="#">Movie single</a>
								</li>
							</ul>
						</li>
					</ul>

					<!-- top search form -->
					<div class="top-search">
						<input type="text" placeholder="Search Me">
					</div>

					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="loginLink">
							<a href="#">LOG In</a>
						</li>
						<li class="btn signupLink">
							<a href="#">sign up</a>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</header>
	<!-- END | Header -->

	<div class="slider sliderv2">
		<div class="container">
			<div class="row">
				<div class="slider-single-item">

					<?php foreach ($movies as $movie) : ?>
						<div class="movie-item">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-xs-12">
									<div class="title-in">
										<div class="cate">
											<span class="blue">
												<a href="#">Sci-fi</a>
											</span>
											<span class="yell">
												<a href="#">Action</a>
											</span>
											<span class="orange">
												<a href="#">advanture</a>
											</span>
										</div>
										<h1>
											<?php echo '<a href="#">' . $movie->engname . '</br><span>' . $movie->thainame . '</span></a>'; ?>
										</h1>
										<div class="social-btn">
											<a href="#" class="parent-btn">
												<i class="ion-play"></i> Watch Trailer</a>
											<a href="#" class="parent-btn">
												<i class="ion-heart"></i> Add to Favorite</a>
											<div class="hover-bnt">
												<a href="#" class="parent-btn">
													<i class="ion-android-share-alt"></i>share</a>
												<div class="hvr-item">
													<a href="#" class="hvr-grow">
														<i class="ion-social-facebook"></i>
													</a>
													<a href="#" class="hvr-grow">
														<i class="ion-social-twitter"></i>
													</a>
													<a href="#" class="hvr-grow">
														<i class="ion-social-googleplus"></i>
													</a>
													<a href="#" class="hvr-grow">
														<i class="ion-social-youtube"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="mv-details">
											<p>
												<i class="ion-android-star"></i>
												<span>7.4</span> /10</p>
											<ul class="mv-infor">
												<li> Run Time: 2h21’ </li>
												<li> Rated: PG-13 </li>
												<li> Release: 1 May 2015</li>
											</ul>
										</div>
										<div class="btn-transform transform-vertical">
											<div>
												<a href="#" class="item item-1 redbtn">more detail</a>
											</div>
											<div>
												<a href="#" class="item item-2 redbtn hvrbtn">more detail</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="mv-img-2">
										<a href="#">
											<?php echo '<img height="414" width="270" src="data:image/jpeg;base64,' . base64_encode($movie->poster) . '"/>'; ?>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="movie-items  full-width">
		<div class="row">
			<div class="col-md-12">
				<div class="title-hd">
					<h2>in theater</h2>
					<a href="#" class="viewall">View all
						<i class="ion-ios-arrow-right"></i>
					</a>
				</div>
				<div class="tabs">
					<ul class="tab-links">
						<li class="active">
							<a href="#tab1-h2">#Popular</a>
						</li>
						<li>
							<a href="#tab2-h2"> #Top rated </a>
						</li>
						<li>
							<a href="#tab3-h2"> #Most reviewed</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="tab1-h2" class="tab active">
							<div class="row">
								<div class="slick-multiItem2">
									<?php foreach ($movies as $movie) : ?>
									<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<?php echo '<img src="data:image/jpeg;base64,' . base64_encode($movie->poster) . '"/>'; ?>
												</div>
												<div class="hvr-inner">
													<a href="#"> Read more
														<i class="ion-android-arrow-dropright"></i>
													</a>
												</div>
												<div class="title-in">
													<p>
														<i class="ion-android-star"></i>
														<span>7.4</span> /10
													</p>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="trailers full-width">
		<div class="row ipad-width">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="title-hd">
					<h2>movie trailer</h2>
					<a href="#" class="viewall">View all
						<i class="ion-ios-arrow-right"></i>
					</a>
				</div>
				<div class="videos">
					<div class="slider-for-2 video-ft">
						<?php foreach ($trailers as $trailer) : ?>
							<div>
								<?php echo '<iframe class="item-video" src="" data-src="https://www.youtube.com/embed/' . $trailer->link . '"></iframe>'; ?>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="slider-nav-2 thumb-ft">
						<?php foreach ($movies as $movie) : ?>
							<?php foreach ($trailers as $trailer) : ?>
								<?php if ($movie->trailerid == $trailer->id) : ?>
									<div class="item">
										<div class="trailer-img">
											<?php echo '<img src=data:image/jpeg;base64,' . base64_encode($trailer->icon) . '>'; ?>
										</div>
										<div class="trailer-infor">
											<?php echo '<h4 class="desc">' . $movie->engname . '</h4>' ?>
											<?php echo '<p>' . $trailer->duration . '</p>' ?>
										</div>
									</div>
								<?php	endif; ?>
							<?php endforeach; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="celebrities">
						<h4 class="sb-title">Box Office</h4>
						<?php foreach ($movies as $movie) : ?>
							<div class="celeb-item">
								<a href="#">
									<?php echo '<img width="50" src="data:image/jpeg;base64,' . base64_encode($movie->poster) . '"/>'; ?>
								</a>
								<div class="celeb-author">
									<h6>
										<?php echo '<a href="#">' . $movie->engname . '</a>' ?>
									</h6>
									<?php echo '<span>' . $movie->thainame . '</span>' ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/plugins2.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>