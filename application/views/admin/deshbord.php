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
		
		<!-- BEGIN #left_sidebar -->
        <?php include_once("left_sidebar.php") ?>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">	
		
			<h1 class="page-header">
				All Users
			</h1>		
			<div class="row">
				<!-- BEGIN col-3 -->
				<div class="col-xl-6 col-sm-6">
					<!-- BEGIN widget -->
					<a href="<?php echo site_url("admin/Des/loadAllinstitute") ?>" class="widget-stats bg-gradient-blue text-white m-b-15">
						<div class="widget-stats-info">
							<div class="widget-stats-title" style="font-size: 15px;">TOTAL INSTITUTE</div>
							<div class="widget-stats-value">
								<?php echo $tins; ?>
							   <p align="right"><i class="fa fa-university" style="font-size: 40px"></i></p>									
							</div>
							   <div class="widget-stats-desc" align="right">All Institute Info</div>
						</div>
					</a>
					<!-- END widget -->
				</div>
				<div class="col-xl-6 col-sm-6">
					<!-- BEGIN widget -->
					<a href="<?php echo site_url("admin/Des/loadAllinstituteuser") ?>" class="widget-stats bg-gradient-purple text-white m-b-15">
						<div class="widget-stats-info">
							<div class="widget-stats-title" style="font-size: 15px;">TOTAL INSTITUTE USERS</div>
							<div class="widget-stats-value">
								<?php echo $insu; ?>
							   <p align="right"><i class="fas fa-chalkboard-teacher" style="font-size: 40px"></i></p>
							</div>	
							   <div class="widget-stats-desc" align="right">All Institute User Info</div>
						</div>
					</a>
					<!-- END widget -->
				</div>	
				<div class="col-xl-6 col-sm-6">
					<!-- BEGIN widget -->
					<a href="<?php echo site_url("admin/Des/loadAllstudents") ?>" class="widget-stats bg-gradient-pink text-white m-b-15">
                       <div class="widget-stats-info">
						<div class="widget-stats-title" style="font-size: 15px;">TOTAL STUDENT</div>
							<div class="widget-stats-value">
								<?php echo $stu; ?>
							   <p align="right"><i class="	fas fa-user-graduate" style="font-size: 40px"></i></p>								
							</div>
							<div class="widget-stats-desc" align="right">All Student Info</div>     
                       </div> 
					</a>
				</div>	
				<div class="col-xl-6 col-sm-6">
					<!-- BEGIN widget -->
					<a href="<?php echo site_url("admin/Des/loadAllclass") ?>" class="widget-stats bg-gradient-orange text-white m-b-15">
						<div class="widget-stats-info">
							<div class="widget-stats-title" style="font-size: 15px;">TOTAL CLASSES</div>
							<div class="widget-stats-value">
								<?php echo $cls; ?>
							   <p align="right"><i class="fas fa-laptop" style="font-size: 40px"></i></p>									
							</div>
							<div class="widget-stats-desc" align="right">All Class Info</div>
						</div>
					</a>
					<!-- END widget -->
				</div>
				<div class="col-xl-6 col-sm-6">
					<!-- BEGIN widget -->
					<a href="<?php echo site_url("admin/Des/loadAllcity") ?>" class="widget-stats bg-gradient-yellow-green text-white m-b-15">
						<div class="widget-stats-info">
							<div class="widget-stats-title" style="font-size: 15px;">TOTAL CITY</div>
							<div class="widget-stats-value">
								<?php echo $cty; ?>
							   <p align="right"><i class="fa fa-building" style="font-size: 40px"></i></p>									
							</div>
							<div class="widget-stats-desc" align="right">All City Info</div>
						</div>
					</a>
					<!-- END widget -->
				</div>
				<div class="col-xl-6 col-sm-6">
					<!-- BEGIN widget -->
					<a href="<?php echo site_url("admin/Des/loadAllstate") ?>" class="widget-stats bg-gradient-cyan-purple text-white m-b-15">
						<div class="widget-stats-info">
							<div class="widget-stats-title" style="font-size: 15px;">TOTAL STATE</div>
							<div class="widget-stats-value">
								<?php echo $sta; ?>
							   <p align="right"><i class="fa fa-city" style="font-size: 40px"></i></p>									
							</div>
							<div class="widget-stats-desc" align="right">All State Info</div>
						</div>
					</a>
					<!-- END widget -->
				</div>				
			</div>





		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
	<!-- BEGIN theme-panel -->
	<?php include_once("theme_panel.php"); ?>
	<!-- END theme-panel -->
	
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