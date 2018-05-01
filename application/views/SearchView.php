<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> ค้นหาภาพยนตร์</h1>
					<ul class="breadcumb">
						<li class="active"><a href="<?php echo site_url('HomeController') ?>">หน้าหลัก</a></li>
						<li> <span class="ion-ios-arrow-right"></span>ค้นหาภาพยนตร์</li>
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
					<?php echo '<p>ผลลัพธ์การค้นหา <span>' . count($searchs) . ' เรื่อง</span></p>' ?>
				<?php elseif (!empty($advsearchs)) : ?>
					<?php echo '<p>ผลลัพธ์การค้นหา <span>' . count($advsearchs) . ' เรื่อง</span></p>' ?>
				<?php else : ?>
					<p>ผลลัพธ์การค้นหา<span> 0 เรื่อง </span></p>
				<?php endif; ?>
					<label>เรียงตาม:</label>
					<select>
						<option value="popularity">วันที่รีวิวล่าสุด มาก-น้อย</option>
						<option value="popularity">วันที่รีวิวล่าสุด น้อย-มาก</option>
						<option value="rating">คะแนนรีวิว มาก-น้อย</option>
						<option value="rating">คะแนนรีวิว น้อย-มาก</option>
						<option value="date">วันที่เข้าฉาย มาก-น้อย</option>
						<option value="date">วันที่เข้าฉาย น้อย-มาก</option>
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
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="searh-form">
						<h4 class="sb-title">Search for movie</h4>
						<form method="get" class="form-style-1" action="SearchController">
							<div class="row">
								<div class="col-md-12 form-it">
									<label>ชื่อภาพยนตร์</label>
									<input type="text" name="name" placeholder="ใส่ชื่อที่ต้องการค้นหา">
								</div>
								<div class="col-md-12 form-it">
									<label>ประเภท</label>
									<div class="group-ip">
										<select
											name="genre" multiple="" class="ui fluid dropdown">
											<option value="">-- ประเภท --</option>
											<option>แอ็คชัน</option>
											<option>ผจญภัย</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12 form-it">
									<label>ปีที่เข้าฉาย</label>
									<div class="row">
										<div class="col-md-6">
											<select name="from">
											  <option value="">-- จาก --</option>
											  <option>2017</option>
												<option>2018</option>
											</select>
										</div>
										<div class="col-md-6">
											<select name="to">
												<option value="">-- ถึง --</option>
												<option>2017</option>
												<option>2018</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12 ">
									<input class="submit" type="submit" value="ค้นหา">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>