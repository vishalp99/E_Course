<!DOCTYPE html>

<html lang="en">


<head>
	<meta charset="utf-8" />
	<title>E_Course</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="<?php echo base_url('resources/admin/'); ?>assets/css/app.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
        <?php include_once("header.php"); ?>
		<!-- END #header -->
		<div id="content" class="app-content p-0">
			<!-- BEGIN profile-header -->	
			<div class="profile-header">
				<!-- BEGIN profile-header-cover -->
				<div class="profile-header-cover"></div>
				<!-- END profile-header-cover -->
				<!-- BEGIN profile-header-content -->
				<div class="profile-header-content">
					<!-- BEGIN profile-header-img -->
					<div class="profile-header-img">
						<img src="<?php echo base_url('resources/shared/images/'.$_SESSION['uimg']) ?>" alt="" />
					</div>
					<!-- END profile-header-img -->
					<!-- BEGIN profile-header-info -->
					<div class="profile-header-info">
						<h4><?php echo $_SESSION['uname']; ?></h4>
						<p>Frontend Developer</p>
						<a href="#" class="btn btn-xs btn-rounded btn-primary width-100">Edit Profile</a>
					</div>
					<!-- END profile-header-info -->
				</div>
				<!-- END profile-header-content -->
				<!-- BEGIN profile-header-tab -->
				<!-- END profile-header-tab -->
			</div>
			<!-- END profile-header -->
			<!-- BEGIN profile-container -->
			<div class="profile-container">
				<!-- BEGIN row -->
				<div class="row row-space-20">
					<!-- BEGIN col-8 -->
					<div class="col-xl-8">
						<!-- BEGIN tab-content -->
						<div class="tab-content p-0">
							<div class="card-header card-header-inverse">
								<h3 class="card-header-title">Edit Form</h3>
							</div>
							<div class="card-body">
								<h5 class="card-header-title">Basic Information</h5>
								<br>
								<form method="post" enctype="multipart/form-data" 
								      action="<?php echo site_url('admin/AdminPro/editBasicInfo') ?>">
									<?php
									   foreach($ainf as $a1)
									   {
											?>
											<div class="form-group">
												<label>Admin Name<span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="txtaname" value="<?php echo $a1->username; ?>"/>
											</div>
											<div class="form-group">
												<label>Email<span class="text-danger">*</span></label>
												<input type="email" class="form-control" name="txtaemail" value="<?php echo $a1->emailid; ?>"/>
											</div>
											<br>
											<br>	
											<div class="form-group">
												<input type="submit" name="btns" class="btn btn-primary btn-block" value="Save Basic Information">
											</div>										
								</form>
							</div>
							<div class="card-body">
								<h5 class="card-header-title">Password Information</h5>
								<br>
								<form method="post" enctype="multipart/form-data" 
								      action="<?php echo site_url('admin/AdminPro/editPassInfo') ?>">
											<div class="form-group">
												<label>Old Password <span class="text-danger">*</span></label>
												<input type="password" class="form-control" required name="txtopass"/>		
											</div>											
										    <div class="form-group">
												<label>New Password <span class="text-danger">*</span></label>
												<input type="password" class="form-control" required name="txtnpass"/>
											</div>	
											<div class="form-group">
												<label>Confirm Password <span class="text-danger">*</span></label>
												<input type="password" class="form-control" required name="txtcpass"/>
											</div>	
											<?php
											     if(isset($err))
											     {
											     	?>
											     	  <div class="form-group">
											     	  	<p style="color: red;"><?php echo $err; ?></p>
											     	  </div>
											     	<?php
											     }
											?>	
											<?php
											     if(isset($err1))
											     {
											     	?>
											     	  <div class="form-group">
											     	  	<p style="color: green;font-size: 20px"><?php echo $err1; ?></p>
											     	  </div>
											     	<?php
											     }
											?>									
											<br>
											<br>	
											<div class="form-group">
												<input type="submit" name="btns" class="btn btn-primary btn-block" value="Save Password">
											</div>					
								</form>
							</div>
							<div class="card-body">
								<h5 class="card-header-title">Image & Contact Information</h5>
								<br>
								<form method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/AdminPro/editImgInfo') ?>">
											<div class="form-group">
												<label>Contact<span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="txtacon" value="<?php echo $a1->contact; ?>"/>
											</div>				
											<div class="form-group">
												<label>Choose Profile Pic<span class="text-danger">*</span></label>
												<input type="file" class="form-control" name="txtaimg"/>
											</div>

											<br>
											<br>	
											<div class="form-group">
												<input type="submit" name="btns" class="btn btn-primary btn-block" value="Save Image & Contact Information">
											</div>										
								</form>
							</div>
									<!-- END card-body -->
							<!-- END tab-pane -->
						</div>
		       							<?php
									    }
									?>	
						<!-- END tab-content -->
					</div>
					<!-- END col-8 -->
					<!-- BEGIN col-4 -->
					<div class="col-xl-4">
						<!-- BEGIN profile-info-list -->
						<ul class="profile-info-list d-none d-xl-block">
							<li class="title">PERSONAL INFORMATION OF ADMIN</li>
							<li>
								<div class="field">Id</div>
								<div class="value"><?php echo $_SESSION['aid']; ?></div>
							</li>
							<li>
								<div class="field">Name</div>
								<div class="value"><?php echo $_SESSION['uname']; ?></div>
							</li>
							<li>
								<div class="field">Email_Id</div>
								<div class="value"><?php echo $_SESSION['eid']; ?></div>
							</li>
							<li>
								<div class="field">Contact_NO</div>
								<div class="value">+91&nbsp;<?php echo $_SESSION['contact']; ?></div>
							</li>	
						</ul>
						<!-- END profile-info-list -->
					</div>
					<!-- END col-4 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END profile-container -->
		</div>		
		
		<!-- BEGIN #left_sidebar -->
        <?php include_once("left_sidebar.php") ?>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		 
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('resources/admin/'); ?>assets/js/app.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url('resources/admin/'); ?>assets/js/demo/dashboard.demo.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>

<!-- Mirrored from seantheme.com/admetro/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 08:36:42 GMT -->
</html>

