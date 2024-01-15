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
			<div class="card m-b-15">
				<div class="card-header card-header-inverse">
					<h4 class="card-header-title" style="font-size: 20px">All Classes</h4>
					<div class="card-header-btn">
						<a href="#" data-toggle="card-expand" class="btn btn-success"><i class="fa fa-expand"></i></a>
						<a href="#" data-toggle="card-refresh" class="btn btn-warning"><i class="fa fa-redo"></i></a>
					</div>
				</div>
						<div class="card-body">
							<div class="table-responsive">								
								<table class="table table-dark m-b-15">
									<thead>
										<tr>
											<th>CLASS ID</th>
											<th>INSTITUTE</th>
											<th>CLASS TITLE</th>
											<th>CLASS STATUS</th>
											<th>CLASS CREATED DATE & TIME</th>
											<!--<th>CLASS DESCRIPTION</th>-->
											<th>CLASS IMAGE</th>
											<th>CLASS LINK</th>
											<th>CLASS CODE</th>
										</tr>
									</thead>
									<?php
									   foreach ($clsinfo as $i1)
									   {
									      ?>
											<tbody>
												<tr>
													<td><?php echo $i1->classid; ?></td>
													<td><?php echo $i1->institutename; ?></td>
													<td><?php echo $i1->title; ?></td>
													<td><?php echo $i1->status; ?></td>
													<td><?php echo $i1->createddt; ?></td>
													<!--<td><?php echo $i1->description; ?></td>-->
													<td><img src="<?php echo base_url('resources/shared/instituteimg/insclass/'.$i1->classimage)?>" width="150px" height="80px"> </td>
													<td><?php echo $i1->classlink; ?></td>
													<td><?php echo $i1->classcode; ?></td>
												</tr>
											</tbody>
										   <?php
									    }
									?>									
								</table>								
						    </div>
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