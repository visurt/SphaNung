<?php if (isset($_GET['id'])) : ?>
<?php foreach ($movies as $movie) : ?>
<?php foreach ($trailers as $trailer) : ?>
<?php if ($movie->id == $_GET['id']) : ?>
<?php if ($movie->trailerid == $trailer->id) : ?>

<?php if (isset($_SESSION['userinfo'])) : ?>
<!--write review form popup-->

	<?php $isAlreadyReviewed = false ?>
	<?php foreach ($reviews as $review) : ?>
		<?php foreach ($users as $user) : ?>
			<?php if (isset($_SESSION['userinfo'])) : ?>
				<?php if ($user->id == $_SESSION['userinfo']['id'] && $review->userid == $user->id && $review->movieid == $_GET['id']) : ?>
					<?php $isAlreadyReviewed = true ?>
				<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endforeach; ?>

<div class="login-wrapper" id="review-content">
	<div class="login-content">
		<?php if (!$isAlreadyReviewed) : ?>
		<h3>แสดงความคิดเห็น</h3>
		<form method="post" action="ReviewController">
			<?php echo '<input type="hidden" name="movieid" value=' . $movie->id . '"/>' ?>
			<?php echo '<input type="hidden" name="userid" value=' . $_SESSION['userinfo']['id'] . '"/>' ?>
			<div class="row">
				<label for=""> คะแนน:
					<input type="text" name="score" required="required" placeholder="1 - 100"/>
				</label>
			</div>
			<div class="row">
				<label for=""> รีวิว:
					<input type="text" name="review" required="required" placeholder="..."/>
				</label>
			</div>
			<div class="row">
				<button type="submit">บันทึก</button>
			</div>
		</form>
		<?php else : ?>
		<div class="row">
				<label for=""> ท่านได้รีวิวไปแล้ว..
				</label>
			</div>
		<?php endif; ?>
	</div>
</div> <!--end of write review form popup-->
<?php else : ?>
<div class="login-wrapper" id="review-content">
	<div class="login-content">
		<a href="#" class="close">x</a>
		
			<div class="row">
				<label for=""> ท่านยังไม่ได้เข้าสู่ระบบ..
				</label>
			</div>
			
		</form>
	</div>
</div> <!--end of write review form popup-->
<?php endif; ?>

<div class="hero" style="background: url('data:image/jpg;base64,<?php echo base64_encode($movie->bigposter) ?>') no-repeat; height: 598px;">
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
							<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> ตัวอย่างภาพยนตร์</a></div>
							<?php echo '<div><a href="https://www.youtube.com/embed/' . $trailer->link . '" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>'; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<?php echo '<h1 class="bd-hd">' . $movie->engname . '<span>' . $movie->year . '</span></h1>'; ?>
					<?php echo '<h1 class="bd-hd">' . $movie->thainame . '<span>' . $movie->year . '</span></h1>' ?>
					<div class="movie-rate" style="margin-top:33px">
						<div class="rate">
							<i class="ion-android-star"></i>
							<?php foreach ($scores as $score) : ?>
												<?php if ($score['movieid'] == $movie->id) : ?>
													<?php echo '<p><span>' . $score['avg'] / 10 . '</span> /10<br/>' ?>
												<?php endif; ?>
											<?php endforeach; ?>
								<span class="rv"><?php echo $count ?> รีวิว</span>
							</p>
						</div>
						<div class="rate-star">
							<p>เรตติ้งภาพยนตร์: </p>
							<?php foreach ($scores as $score) : ?>
							<?php if ($score['movieid'] == $movie->id) : ?>
								<?php for ($x = floor($score['avg'] / 10); $x > 0; $x--) : ?>
									<i class="ion-ios-star"></i>
								<?php endfor; ?>
								<?php if ($score['avg'] % 10 >= 5) : ?>
									<i class="ion-ios-star-half"></i>
									<?php for ($y = 10 - floor($score['avg'] / 10) - 1; $y > 0; $y--) : ?>
										<i class="ion-ios-star-outline"></i>
									<?php endfor; ?>
								<?php else : ?>
								<?php for ($y = 10 - floor($score['avg'] / 10); $y > 0; $y--) : ?>
										<i class="ion-ios-star-outline"></i>
									<?php endfor; ?>
								<?php endif; ?>
							<?php endif; ?>
							<?php endforeach; ?>
						</div>
					</div>
					:<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">ข้อมูลภาพยนตร์</a></li>
								<li><a href="#reviews"> รีวิว</a></li>                    
							</ul>
							<div class="tab-content">
								<div id="overview" class="tab active">
									<div class="row">
										<div class="col-md-8 col-sm-12 col-xs-12">
											<?php echo '<p>' . $movie->short . '</p>'; ?>
											<?php $isReviewed = false ?>
											<?php foreach ($reviews as $review) : ?>
												<?php foreach ($users as $user) : ?>
												<?php if (isset($_SESSION['userinfo'])) : ?>
													<?php if ($user->id == $_SESSION['userinfo']['id'] && $review->userid == $user->id && $review->movieid == $_GET['id']) : ?>
														<?php $isReviewed = true ?>
													<?php endif; ?>
												<?php endif; ?>
												<?php endforeach; ?>
											<?php endforeach; ?>
											<?php if (isset($_SESSION['userinfo']) && $isReviewed) : ?>
												<div class="title-hd-sm">
													<h4>ความเห็นของฉัน</h4>
												</div>
												<?php foreach ($reviews as $review) : ?>
												<?php foreach ($users as $user) : ?>
												<?php if ($user->id == $_SESSION['userinfo']['id'] && $review->userid == $user->id && $review->movieid == $_GET['id']) : ?>
													<div class="mv-user-review-item">
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
															<h6><u>ผู้กำกับ</u> :</h6>
															<?php echo '<p>' . $movie->directer . '</p>'; ?>
														</div>
														<div class="sb-it">
															<h6><u>นักแสดง</u> :</h6>
															<?php echo '<p>' . $movie->cast . '</p>'; ?>
														</div>
														<div class="sb-it">
															<h6><u>หมวดหมู่</u> :</h6>
															<?php echo '<p>' . $movie->genre . '</p>'; ?>
														</div>
														<div class="sb-it">
															<h6><u>วันที่เข้าฉาย</u> :</h6>
															<?php echo '<p>' . $movie->date . '</p>'; ?>
														</div>
														<div class="sb-it">
															<h6><u>ความยาว</u> :</h6>
															<?php echo '<p>' . $movie->runtime . ' นาที</p>'; ?>
														</div>
														<div class="sb-it">
															<h6><u>ความเหมาะสม</u> :</h6>
															<?php echo '<p>' . $movie->age . '</p>'; ?>
														</div>
													</div>
												</div>
										</div>
										<div id="reviews" class="tab review">
											<div class="row">
													<div class="rv-hd">
														<div class="div">
															<h3></h3>
														<?php echo '<h2>' . $movie->engname . '</h2>'; ?>
														</div>
														<a href="#" class="redbtn reviewLink">แสดงความคิดเห็น</a>
													</div>
													<div class="topbar-filter">
											<p>ผลลัพธ์การค้นหา <span><?php echo $count ?> รีวิว</span></p>
											
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