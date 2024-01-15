		<header id="header" class="app-header">
			<!-- BEGIN navbar-toggle-minify -->
			<button type="button" class="navbar-toggle navbar-toggle-minify" data-click="sidebar-minify">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- END navbar-toggle-minify -->
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="index-2.html" class="navbar-brand">
					E_Course
					<i></i>
					<i class='fas fa-graduation-cap' style="color: rgb(0,150,168);"></i>
				</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN navbar-nav -->
			<ul class="navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" data-display="static" class="nav-link">
						<span class="nav-img online">
							<img src="<?php echo base_url('resources/shared/images/'.$_SESSION['uimg']) ?>" alt="" />
						</span>
						<span class="d-none d-md-block"><?php echo $_SESSION['uname'] ?><b class="caret"></b></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="<?php echo site_url("admin/AdminPro") ?>">My Profile</a>
						<a class="dropdown-item" href="<?php echo site_url("admin/Login/logout") ?>">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- END navbar-nav -->
			<!-- BEGIN navbar-search -->
			<div class="navbar-search">
				<form action="#" method="POST" name="navbar_search_form">
					<div class="form-group">
						<div class="icon"><i class="fa fa-search"></i></div>
						<input type="text" class="form-control" id="header-search" placeholder="Search admetro..." />
						<div class="icon">
							<a href="#" data-dismiss="search-bar" class="right-icon"><i class="fa fa-times"></i></a>
						</div>
					</div>
				</form>
			</div>
			<!-- END navbar-search -->
		</header>