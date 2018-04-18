<!-- <?php var_dump($movie) ?> -->
	<div class="hero mv-single-hero">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>
	</div>
	<div class="page-single movie-single movie_single">
		<div class="container">
			<div class="row ipad-width2">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="movie-img sticky-sb">
						<?php echo '<img src="data:image/jpeg;base64,' . base64_encode($movie->poster) . '"/>'; ?>
						<div class="movie-btn">	
							<div class="btn-transform transform-vertical red">
								<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
								<?php echo '<div><a href="https://www.youtube.com/embed/' . $trailer->link . '" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>'; ?>
							</div>
							<div class="btn-transform transform-vertical">
								<div><a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i> Buy ticket</a></div>
								<div><a href="#" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="movie-single-ct main-content">
						<?php echo '<h1 class="bd-hd">' . $movie->engname . '<span>' . $movie->year . '</span></h1>'; ?>
						<div class="social-btn">
							<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
							<div class="hover-bnt">
								<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
								<div class="hvr-item">
									<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
									<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
									<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
									<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
								</div>
							</div>		
						</div>
						<div class="movie-rate">
							<div class="rate">
								<i class="ion-android-star"></i>
								<p><span><?=$average_scores?> </span> /10<br>
									<span class="rv"><?=$total_reviewer?> Reviews</span>
								</p>
							</div>
							<div class="rate-star">
								<p>Rate This Movie:  </p>
								<i class="ion-ios-star"></i>
								<i class="ion-ios-star"></i>
								<i class="ion-ios-star"></i>
								<i class="ion-ios-star"></i>
								<i class="ion-ios-star"></i>
								<i class="ion-ios-star-outline"></i>
								<i class="ion-ios-star-outline"></i>
								<i class="ion-ios-star-outline"></i>
								<i class="ion-ios-star-outline"></i>
								<i class="ion-ios-star-outline"></i>
							</div>
						</div>
						<div class="movie-tabs">
							<div class="tabs">
								<ul class="tab-links tabs-mv">
									<li class="active"><a href="#overview">Overview</a></li>
									<li><a href="#reviews"> Reviews</a></li>                    
								</ul>
								<div class="tab-content">
									<div id="overview" class="tab active">
										<div class="row">
											<div class="col-md-8 col-sm-12 col-xs-12">
												<?php echo '<p>' . $movie->short . '</p>'; ?>
												<div class="title-hd-sm">
													<h4>Top reviews</h4>
													<a href="#" class="time">See All 56 Reviews <i class="ion-ios-arrow-right"></i></a>
												</div>
												<!-- movie user review -->
												<div class="mv-user-review-item">
													<h3>Best Marvel movie in my opinion</h3>
													<div class="no-star">
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star last"></i>
													</div>
													<p class="time">
														17 December 2016 by <a href="#"> hawaiipierson</a>
													</p>
													<p>This is by far one of my favorite movies from the MCU. The introduction of new Characters both good and bad also makes the movie more exciting. giving the characters more of a back story can also help audiences relate more to different characters better, and it connects a bond between the audience and actors or characters. Having seen the movie three times does not bother me here as it is as thrilling and exciting every time I am watching it. In other words, the movie is by far better than previous movies (and I do love everything Marvel), the plotting is splendid (they really do out do themselves in each film, there are no problems watching it more than once.</p>
												</div>
														</div>
														<div class="col-md-4 col-xs-12 col-sm-12">
															<div class="sb-it">
																<h6>ผู้กำกับ : </h6>
																<?php echo '<p>' . $movie->directer . '</p>'; ?>
															</div>
															<div class="sb-it">
																<h6>นักแสดง : </h6>
																<?php echo '<p>' . $movie->cast . '</p>'; ?>
															</div>
															<div class="sb-it">
																<h6>หมวดหมู่ :</h6>
																<?php echo '<p>' . $movie->genre . '</p>'; ?>
															</div>
															<div class="sb-it">
																<h6>วันที่เข้าฉาย :</h6>
																<?php echo '<p>' . $movie->date . '</p>'; ?>
															</div>
															<div class="sb-it">
																<h6>ความยาว :</h6>
																<?php echo '<p>' . $movie->runtime . ' นาที</p>'; ?>
															</div>
															<div class="sb-it">
																<h6>ความเหมาะสม :</h6>
																<?php echo '<p>' . $movie->age . '</p>'; ?>
															</div>
														</div>
													</div>
											</div>
											<div id="reviews" class="tab review">
												<div class="row">
														<div class="rv-hd">
															<div class="div">
																<h3>Related Movies To</h3>
															<?php echo '<h2>' . $movie->engname . '</h2>'; ?>
															</div>
															<a href="#" class="redbtn">Write Review</a>
														</div>
														<div class="topbar-filter">
												<p>Found <span>56 reviews</span> in total</p>
												<label>Filter by:</label>
												<select>
													<option value="popularity">Popularity Descending</option>
													<option value="popularity">Popularity Ascending</option>
													<option value="rating">Rating Descending</option>
													<option value="rating">Rating Ascending</option>
													<option value="date">Release date Descending</option>
													<option value="date">Release date Ascending</option>
												</select>
											</div>
											<div class="mv-user-review-item">
												<div class="user-infor">
													<?php echo '<img src=data:image/jpeg;base64,' . base64_encode($page->logo) . '>'; ?>
													<div>
														<?php echo '<h3>' . $review->rshort . '</h3>'; ?>
														<div class="no-star">
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star last"></i>
														</div>
														<?php echo '<p class="time">' . $review->date . ' by ' . '<a href="#">' . $page->name . '</a></p>'; ?>
													</div>
												</div>
												<?php echo '<p>' . $review->rlong . '</p>'; ?>
											</div>

											<div class="topbar-filter">
												<label>Reviews per page:</label>
												<select>
													<option value="range">5 Reviews</option>
													<option value="saab">10 Reviews</option>
												</select>
												<div class="pagination2">
													<span>Page 1 of 6:</span>
													<a class="active" href="#">1</a>
													<a href="#">2</a>
													<a href="#">3</a>
													<a href="#">4</a>
													<a href="#">5</a>
													<a href="#">6</a>
													<a href="#"><i class="ion-arrow-right-b"></i></a>
												</div>
											</div>
													</div>
											</div>
												</div>
											</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>