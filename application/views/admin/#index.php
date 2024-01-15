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
					<h4 class="card-header-title" style="font-size: 20px">Institute Table</h4>
					<div class="card-header-btn">
						<a href="#" data-toggle="card-expand" class="btn btn-success"><i class="fa fa-expand"></i></a>
						<a href="#" data-toggle="card-refresh" class="btn btn-warning"><i class="fa fa-redo"></i></a>
					</div>
				</div>
						<div class="card-body">
							<div class="table-responsive">								
								<table class="table table-striped m-b-0">
									<thead>
											<tr>
												<th>INSTITUTE PROFILE</th>
												<th>INSTITUTE ID</th>
												<th>EMAIL</th>
												<th>INSTITUTE NAME</th>
												<th>WEBSITE</th>
												<th>DESCRIPTION</th>
												<th>COVERPIC</th>
												<th>GOOGLE MAP URL</th>
												<th>FACEBOOK LINK</th>
												<th>INSTAGRAM LINK</th>
												<th>TWITTER LINK</th>
												<tH>LINKEDIN LINK</tH>
												<tH>YOUTUBE LINK</tH>
												<tH>CITY ID</tH>
												<tH>ADDRESS</tH>
												<tH>CONTEACT NUMBER</tH>
												<tH>STATUS</tH>
												<th>REGISTER DATE TIME</th>
											</tr>
									</thead>
									<tbody>
										<?php
										   foreach ($ins as $i1)
										   {
										      ?>										
												<tr>
													<td align="center">
														<a href="<?php echo site_url("admin/Institute_Pro/loadInsPro/".$i1->instituteid) ?>" class="btn btn-primary"><i class="fa fa-user" style="font-size: 20px;"></i></a>
													</td>
													<td><?php echo $i1->instituteid; ?></td>
													<td><?php echo $i1->email; ?></td>
													<td><?php echo $i1->institutename; ?></td>
													<td><a href=""><?php echo $i1->website; ?></a></td>
													<td><?php echo $i1->description; ?></td>
													<td><img src="<?php echo base_url('resources/shared/instituteimg/'.$i1->coverpic)?>"  height="85px"> </td>
													<td><a href=""><?php echo $i1->googlemapurl; ?></a></td>
													<td><a href=""><?php echo $i1->fblink; ?></a></td>
													<td><a href=""><?php echo $i1->instalink; ?></a></td>
													<td><a href=""><?php echo $i1->twitterlink; ?></a></td>
													<td><a href=""><?php echo $i1->linkedinlink; ?></a></td>
													<td><a href=""><?php echo $i1->youtubelink; ?></a></td>
													<td><?php echo $i1->cityid; ?></td>
													<td><?php echo $i1->address; ?></td>
													<td><?php echo $i1->contactnumber; ?></td>
													<td><?php echo $i1->status; ?></td>
													<td><?php echo $i1->regdatetime; ?></td>
													<!-- <?php // echo site_url('admin/Admin/loadAllStudetnByInsId/'.$i1->instituteid)?> -->
												</tr>
											   <?php
										    }
										?>		
									</tbody>
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