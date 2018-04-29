<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> search movies</h1>
					<ul class="breadcumb">
						<li class="active"><a href="<?php echo site_url('HomeController') ?>">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> search movies</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="topbar-filter">
				<?php if (!empty($searchs)) : ?>
					<?php echo '<p>Found <span>' . count($searchs) . ' movies</span> in total</p>' ?>
				<?php endif; ?>
					<label>Sort by:</label>
					<select>
						<option value="popularity">Popularity Descending</option>
						<option value="popularity">Popularity Ascending</option>
						<option value="rating">Rating Descending</option>
						<option value="rating">Rating Ascending</option>
						<option value="date">Release date Descending</option>
						<option value="date">Release date Ascending</option>
					</select>
					<a href="../assets/movielist.html" class="list"><i class="ion-ios-list-outline "></i></a>
					<a  href="../assets/moviegrid.html" class="grid"><i class="ion-grid active"></i></a>
				</div>
				<div class="flex-wrap-movielist">
				<?php if (!empty($searchs)) : ?>
					<?php foreach ($searchs as $search) : ?>
						<div class="movie-item-style-2 movie-item-style-1">
						<?php echo '<img height="414" width="270" src="data:image/jpeg;base64,' . base64_encode($search->poster) . '"/>'; ?>
							<div class="hvr-inner">
								<a  href="<?php echo site_url('MovieSingleController?id=' . $search->id) ?>"> เพิ่มเติม <i class="ion-android-arrow-dropright"></i> </a>
							</div>
							<div class="mv-item-infor">
								<?php echo '<h6><a href="' . site_url('MovieSingleController?id=' . $search->id) . ' ">' . $search->engname . '</a></h6>' ?>
								<?php foreach ($scores as $score) : ?>
											<?php if ($score['movieid'] == $search->id) : ?>
												<?php echo '<p class="rate"><i class="ion-android-star"></i><span>' . $score['avg'] / 10 . '</span> /10</p>' ?>
											<?php endif; ?>
										<?php endforeach; ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
				<?php if (!empty($advsearchs)) : ?>
				<?php foreach ($advsearchs as $advsearch) : ?>
						<div class="movie-item-style-2 movie-item-style-1">
						<?php echo '<img height="414" width="270" src="data:image/jpeg;base64,' . base64_encode($advsearch->poster) . '"/>'; ?>
							<div class="hvr-inner">
								<a  href="<?php echo site_url('MovieSingleController?id=' . $advsearch->id) ?>"> เพิ่มเติม <i class="ion-android-arrow-dropright"></i> </a>
							</div>
							<div class="mv-item-infor">
								<?php echo '<h6><a href="' . site_url('MovieSingleController?id=' . $advsearch->id) . ' ">' . $advsearch->engname . '</a></h6>' ?>
								<?php foreach ($scores as $score) : ?>
											<?php if ($score['movieid'] == $advsearch->id) : ?>
												<?php echo '<p class="rate"><i class="ion-android-star"></i><span>' . $score['avg'] / 10 . '</span> /10</p>' ?>
											<?php endif; ?>
										<?php endforeach; ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
				</div>		
				<div class="topbar-filter">
					<label>Movies per page:</label>
					<select>
						<option value="range">20 Movies</option>
						<option value="saab">10 Movies</option>
					</select>
					
					<div class="pagination2">
						<span>Page 1 of 2:</span>
						<a class="active" href="#">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">...</a>
						<a href="#">78</a>
						<a href="#">79</a>
						<a href="#"><i class="ion-arrow-right-b"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="searh-form">
						<h4 class="sb-title">Search for movie</h4>
						<form method="get" class="form-style-1" action="SearchController">
							<div class="row">
								<div class="col-md-12 form-it">
									<label>Movie name</label>
									<input type="text" name="name" placeholder="Enter keywords">
								</div>
								<div class="col-md-12 form-it">
									<label>Genres & Subgenres</label>
									<div class="group-ip">
										<select
											name="genre" multiple="" class="ui fluid dropdown">
											<option value="">Enter to filter genres</option>
											<option>แอ็คชัน</option>
											<option>ผจญภัย</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12 form-it">
									<label>Release Year</label>
									<div class="row">
										<div class="col-md-6">
											<select name="from">
											  <option value="">From</option>
											  <option>2017</option>
												<option>2018</option>
											</select>
										</div>
										<div class="col-md-6">
											<select name="to">
												<option value="">To</option>
												<option>2017</option>
												<option>2018</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12 ">
									<input class="submit" type="submit" value="submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>