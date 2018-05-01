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
  <link rel="stylesheet" href="../assets/css/plugins.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<!-- preloading -->
<div id="preloader">
	<img class="logo" src="../assets/images/logo1.png" alt="" width="119" height="58">
	<div id="status">
		<span></span>
		<span></span>
	</div>
</div><!--end of preloading-->

<!--login form popup-->
<div class="login-wrapper" id="login-content">
	<div class="login-content">
		<a href="#" class="close">x</a>
		<h3>Login</h3>
		<form method="post" action="LoginController">
			<div class="row">
				<label for=""> ชื่อผู้ใช้งาน:
					<input type="text" name="username-l" id="username-l" required="required" />
				</label>
			</div>
			<div class="row">
				<label for=""> รหัสผ่าน:
					<input type="password" name="password-l" id="password-l" required="required" />
				</label>
			</div>
			<div class="row">
				<button type="submit">เข้าสู่ระบบ</button>
			</div>
		</form>
		<div class="row">
			<p>หรือเข้าสู่ระบบด้วย..</p>
			<div class="social-btn-2">
				<a class="fb" href="#">
					<i class="ion-social-facebook"></i>Facebook</a>
			</div>
		</div>
	</div>
</div> <!--end of login form popup-->

<!--signup form popup-->
<div class="login-wrapper" id="signup-content">
	<div class="login-content">
		<a href="#" class="close">x</a>
		<h3>สมัครสมาชิก</h3>
		<form method="post" action="SignUpController" enctype="multipart/form-data">
			<div class="row">
				<label for=""> ชื่อผู้ใช้งาน:
					<input type="text" name="username" id="username"/>
				</label>
			</div>
			<div class="row">
				<label for=""> รหัสผ่าน:
					<input type="password" name="password" id="password" placeholder=""/>
				</label>
			</div>
			<div class="row">
				<label for=""> ชื่อที่ใช้แสดง:
					<input type="text" name="name" id="name" placeholder=""/>
				</label>
			</div>
			<div class="row">
				<label for="">
					รูปภาพ:
					<input type="file" name="picture" id="picture" accept="image/*" required="required"/>
				</label>
			</div>
			<div class="row">
				<button type="submit">สมัครสมาชิก</button>
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
				<a href="<?php echo site_url('HomeController') ?>">
					<img class="logo" src="../assets/images/logo1.png" alt="" width="119" height="58">
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav flex-child-menu menu-left">
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li class="dropdown first">
						<a href="<?php echo site_url('HomeController') ?>" class="btn btn-default lv1">
							หน้าหลัก
						</a>
					</li>
					<li class="dropdown first">
						<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							ภาพยนตร์
							<i class="fa fa-angle-down" aria-hidden="true"></i>
						</a>
						<ul class="dropdown-menu level1">
							<li>
								<a href="<?php echo site_url('SearchController?search=') ?>">ทุกหมวด</a>
							</li>
							<li>
								<a href="<?php echo site_url('SearchController?search=แอ็คชัน') ?>">แอ็คชัน</a>
							</li>
							<li>
								<a href="<?php echo site_url('SearchController?search=ผจญภัย') ?>">ผจญภัย</a>
							</li>
						</ul>
					</li>
				</ul> 	

				<!-- top search form -->
				<div class="top-search">
					<form action="SearchController" method="get">
						<input type="text" name="search" placeholder="ค้นหาทันที"/>
					</form> 
				</div>

				<?php if (!isset($_SESSION['userinfo'])) : ?>
				<ul class="nav navbar-nav flex-child-menu menu-right">
					<li class="loginLink">
						<a href="#">เข้าสู่ระบบ</a>
					</li>
					<li class="btn signupLink">
						<a href="#">สมัครสมาชิก</a>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
			<?php else : ?>
			<ul class="nav navbar-nav flex-child-menu menu-right">
				<li class="">
					<?php echo '<a href="#">' . $_SESSION['userinfo']['name'] . ' </a>' ?>
				</li>
				<li class="btn">
					<a href="LogOutController" class="redbtn">ออกจากระบบ</a>
				</li>
			</ul>
			<?php endif; ?>
		</nav>
	</div>
</header>
<!-- END | Header -->