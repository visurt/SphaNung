<?php if (isset($_GET['id'])) : ?>
<?php foreach ($movies as $movie) : ?>
<?php foreach ($trailers as $trailer) : ?>
<?php if ($movie->id == $_GET['id']) : ?>
<?php if ($movie->trailerid == $trailer->id) : ?>

<?php if (isset($_SESSION['userinfo'])) : ?>
<!--write review form popup-->
<div class="login-wrapper" id="review-content">
	<div class="login-content">
		<a href="#" class="close">x</a>
		<h3>Write Review</h3>
		<form method="post" action="ReviewController">
			<?php echo '<input type="hidden" name="movieid" value=' . $movie->id . '"/>' ?>
			<?php echo '<input type="hidden" name="userid" value=' . $_SESSION['userinfo']['id'] . '"/>' ?>
			<div class="row">
				<label for=""> Rating:
					<input type="text" name="score" required="required"/>
				</label>
			</div>
			<div class="row">
				<label for=""> Review:
					<input type="text" name="review" required="required"/>
				</label>
			</div>
			<div class="row">
				<button type="submit">Submit</button>
			</div>
		</form>
	</div>
</div> <!--end of write review form popup-->
<?php else : ?>
<div class="login-wrapper" id="review-content">
	<div class="login-content">
		<a href="#" class="close">x</a>
		
			<div class="row">
				<label for=""> Please Login..
				</label>
			</div>
			
		</form>
	</div>
</div> <!--end of write review form popup-->
<?php endif; ?>

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
							<?php foreach ($scores as $score) : ?>
												<?php if ($score['movieid'] == $movie->id) : ?>
													<?php echo '<p><span>' . $score['avg'] . '</span> /100<br/>' ?>
												<?php endif; ?>
											<?php endforeach; ?>
								<span class="rv"><?php echo $count ?> Reviews</span>
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
											<?php if (isset($_SESSION['userinfo'])) : ?>
												<div class="title-hd-sm">
													<h4>Your review</h4>
													<a href="#" class="time">See All <?php echo $count ?> Reviews <i class="ion-ios-arrow-right"></i></a>
												</div>
												<?php foreach ($reviews as $review) : ?>
												<?php foreach ($users as $user) : ?>
												<?php if ($user->id == $_SESSION['userinfo']['id'] && $review->userid == $user->id && $review->movieid == $_GET['id']) : ?>
													<div class="mv-user-review-item">
														<?php echo '<h3>' . $user->name . '</h3>' ?>
														<div class="no-star">
															<?php $score = floor($review->score / 10) ?>
															<?php for ($x = $score; $x > 0; $x--) : ?>
																<i class="ion-android-star"></i>
															<?php endfor; ?>
															<?php if ($review->score % 10 != 0) : ?>
																<i class="ion-android-star-half"></i>
																<?php for ($y = 10 - $score - 1; $y > 0; $y--) : ?>
																	<i class="ion-android-star last"></i>
																<?php endfor; ?>
															<?php else : ?>
																<?php for ($y = 10 - $score; $y > 0; $y--) : ?>
																	<i class="ion-android-star last"></i>
																<?php endfor; ?>
															<?php endif; ?>
														</div> <!-- end class "no-star" -->
														<?php echo '<p class="time"> @ ' . $review->date . '</p>'; ?>
														<?php echo '<p>' . $review->rshort . '</p>'; ?>
													</div> <!-- end class mv-user-review-item -->
												<?php endif; ?>
												<?php endforeach; ?>
												<?php endforeach; ?>
											<?php endif; ?>
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
														<a href="#" class="redbtn reviewLink">Write Review</a>
													</div>
													<div class="topbar-filter">
											<p>Found <span><?php echo $count ?> reviews</span> in total</p>
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
										
										<?php foreach ($reviews as $review) : ?>
										<?php foreach ($pages as $page) : ?>
										<?php if ($review->movieid == $movie->id && $review->pageid == $page->id) : ?>
										<div class="mv-user-review-item">
											<div class="user-infor">
												<?php echo '<img src=data:image/jpeg;base64,' . base64_encode($page->logo) . '>'; ?>
												<div>
													<?php echo '<h3>' . $page->name . '</h3>'; ?>
													<div class="no-star">
														<?php $score = floor($review->score / 10) ?>
														<?php for ($x = $score; $x > 0; $x--) : ?>
															<i class="ion-android-star"></i>
														<?php endfor; ?>
														<?php if ($review->score % 10 != 0) : ?>
															<i class="ion-android-star-half"></i>
															<?php for ($y = 10 - $score - 1; $y > 0; $y--) : ?>
																<i class="ion-android-star last"></i>
															<?php endfor; ?>
														<?php else : ?>
															<?php for ($y = 10 - $score; $y > 0; $y--) : ?>
																<i class="ion-android-star last"></i>
															<?php endfor; ?>
														<?php endif; ?>
													</div>
													<?php echo '<p class="time"> @ ' . $review->date . '</p>'; ?>
												</div>
											</div>
											<?php echo '<p>' . $review->rshort . '</p>'; ?>
										</div>
										<?php	endif; ?>
										<?php endforeach; ?>
										<?php endforeach; ?>

										<?php foreach ($reviews as $review) : ?>
										<?php foreach ($users as $user) : ?>
										<?php if ($review->movieid == $movie->id && $review->userid == $user->id) : ?>
										<div class="mv-user-review-item">
											<div class="user-infor">
												<?php echo '<img src=data:image/jpeg;base64,' . base64_encode($user->picture) . '>'; ?>
												<div>
													<?php echo '<h3>' . $user->name . '</h3>'; ?>
													<div class="no-star">
														<?php $score = floor($review->score / 10) ?>
														<?php for ($x = $score; $x > 0; $x--) : ?>
															<i class="ion-android-star"></i>
														<?php endfor; ?>
														<?php if ($review->score % 10 != 0) : ?>
															<i class="ion-android-star-half"></i>
															<?php for ($y = 10 - $score - 1; $y > 0; $y--) : ?>
																<i class="ion-android-star last"></i>
															<?php endfor; ?>
														<?php else : ?>
															<?php for ($y = 10 - $score; $y > 0; $y--) : ?>
																<i class="ion-android-star last"></i>
															<?php endfor; ?>
														<?php endif; ?>
													</div>
													<?php echo '<p class="time"> @ ' . $review->date . '</p>'; ?>
												</div>
											</div>
											<?php echo '<p>' . $review->rshort . '</p>'; ?>
										</div>
										<?php	endif; ?>
										<?php endforeach; ?>
										<?php endforeach; ?>

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
<?php	endif; ?>
<?php	endif; ?>
<?php endforeach; ?>
<?php endforeach; ?>
<?php	endif; ?>