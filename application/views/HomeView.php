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
										<?php echo '<a href="#">' . $movie->engname . '<br/><span>' . $movie->thainame . '</span></a>'; ?>
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