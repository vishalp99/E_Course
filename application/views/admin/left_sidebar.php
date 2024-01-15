		<sidebar id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- BEGIN nav -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="profile-img">
							<img src="<?php echo base_url('resources/shared/images/'.$_SESSION['uimg']); ?>" />
						</div>
						<div class="profile-info">
							<h4><?php echo $_SESSION['uname'] ?></h4>
							<p>Frontend Developer</p>
						</div>
					</li>
					<li class="nav-divider"></li>
					<li class="nav-header">Navigation</li>
						<li>							
                    		<a href="<?php echo site_url('admin/Des') ?>">
								<span class="nav-icon"><i class="fa fa-chart-pie w3-large bg-gradient-red text-white"></i></span>
								<span class="nav-text">Dashboard</span>
						    </a>									
                        </li>
                        <br>					
						<li>							
 							<a href="<?php echo site_url('admin/Admin') ?>">
								<span class="nav-icon"><i class="fa fa-school w3-large bg-gradient-blue text-white"></i></span>
								<span class="nav-text">Institute</span>
							</a>
						</li>
						<br>
						<li>							
 							<a href="<?php echo site_url('admin/Institute_User') ?>">
								<span class="nav-icon"><i class="fa fa-chalkboard-teacher w3-large bg-gradient-purple text-white"></i></span>
								<span class="nav-text">Institute_User</span>
							</a>
						</li>
						<br>
						<li>							
 							<a href="<?php echo site_url('admin/Student') ?>">
								<span class="nav-icon"><i class="fas fa-user-graduate w3-large bg-gradient-green text-white"></i></span>
								<span class="nav-text">Student</span>
							</a>
						</li>						
					<li class="nav-divider"></li>
					<li class="nav-copyright">&copy; 2020 E_Course All Right Reserved</li>
				</ul>
				<!-- END nav -->
			</div>
			<!-- END scrollbar -->
		</sidebar>