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
						<a href="<?php echo site_url("admin/AdminPro/loadEditPro"); ?>" class="btn btn-xs btn-rounded btn-primary width-100">Edit Profile</a>
					</div>
					<!-- END profile-header-info -->
				</div>
				<!-- END profile-header-content -->
				<!-- BEGIN profile-header-tab -->
				<ul class="profile-header-tab nav nav-tabs">
					<li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab"></a></li>
				</ul>
				<!-- END profile-header-tab -->
			</div>
			<!-- END profile-header -->
			<!-- BEGIN profile-container -->
			<div class="profile-container">
				<!-- BEGIN row -->
				<div class="row row-space-20">
					<!-- BEGIN col-8 -->

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