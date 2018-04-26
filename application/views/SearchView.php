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
					<?php echo '<p>Found <span>' . count($searchs) . ' movies</span> in total</p>' ?>
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
						<form class="form-style-1" action="#">
							<div class="row">
								<div class="col-md-12 form-it">
									<label>Movie name</label>
									<input type="text" placeholder="Enter keywords">
								</div>
								<div class="col-md-12 form-it">
									<label>Genres & Subgenres</label>
									<div class="group-ip">
										<select
											name="skills" multiple="" class="ui fluid dropdown">
											<option value="">Enter to filter genres</option>
											<option value="Action1">Action 1</option>
					                        <option value="Action2">Action 2</option>
					                        <option value="Action3">Action 3</option>
					                        <option value="Action4">Action 4</option>
					                        <option value="Action5">Action 5</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12 form-it">
									<label>Rating Range</label>
									<select>
									  <option value="range">-- Select the rating range below --</option>
									  <option value="saab">-- Select the rating range below --</option>
									</select>
								</div>
								<div class="col-md-12 form-it">
									<label>Release Year</label>
									<div class="row">
										<div class="col-md-6">
											<select>
											  <option value="range">From</option>
											  <option value="number">10</option>
											</select>
										</div>
										<div class="col-md-6">
											<select>
											  <option value="range">To</option>
											  <option value="number">20</option>
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