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
		<!-- BEGIN btn-scroll-top -->

		<div class="row">
			<!-- BEGIN col-6 -->
			<?php 
			foreach ($ins as $i1)
			{			
		    	?>
				<div class="col-6">
					<!-- BEGIN widget-card -->
					<a href="<?php echo site_url("admin/Institute_Pro/loadInsPro/".$i1->instituteid) ?>" class="widget-card widget-card-inverse dynamic text-center">
						<div class="widget-card-cover" style="background-image: url(<?php echo base_url('resources/shared/instituteimg/'.$i1->coverpic); ?>)">
							<div class="cover-bg"></div>
						</div>
						<div class="widget-card-content p-t-40 p-b-40">
							<h4 class="widget-title widget-title-inverse f-s-20 m-b-5"><?php echo $i1->institutename; ?></h4>
							<div class="widget-desc widget-desc-inverse"><b><?php echo $i1->regdatetime; ?></b><span class="d-none d-md-inline"><br /></span><b><?php echo $i1->cityname; ?></b></div>
						</div>
					</a>
					<!-- END widget-card -->
				</div>
				<?php
			}
			?>
		</div>								    						

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