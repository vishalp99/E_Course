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
	<script type="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>	
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
					<h4 class="card-header-title" style="font-size: 20px">All Institute</h4>
					<label style="margin-right: 10px;margin-top: 5px;font-size: 20px;">Search:-</label>
					<input type="text" id="s1" name="s1" class="form-control" style="background:transparent;color: white;width: 20%;margin-right: 5%">
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
												<th>INSTITUTE_ID</th>
												<th>EMAIL</th>
												<th>INSTITUTE_NAME</th>
												<th>WEBSITE</th>
												<!--<th>DESCRIPTION</th> -->
												<th>COVERPIC</th>
												<th>GOOGLE_MAP_URL</th>
												<th>FACEBOOK_LINK</th>
												<th>INSTAGRAM_LINK</th>
												<th>TWITTER_LINK</th>
												<tH>LINKEDIN_LINK</tH>
												<tH>YOUTUBE_LINK</tH>
												<tH>CITY</tH>
												<tH>ADDRESS</tH>
												<tH>CONTEACT_NUMBER</tH>
												<tH>STATUS</tH>
												<th>REGISTER_DATE_TIME</th>
												<th>ACCESS</th>
											</tr>
									</thead>
									<tbody id="tb1">
										<?php
										   foreach ($insinfo as $i1)
										   {
										      ?>										
												<tr>
													<td><?php echo $i1->instituteid; ?></td>
													<td><?php echo $i1->email; ?></td>
													<td><?php echo $i1->institutename; ?></td>
													<td><a href="<?php echo $i1->website; ?>"><i class="fas fa-globe fa-2x" style="margin-top: 10px;"></i></td>
													<!--<td><?php echo $i1->description; ?></td>-->
													<td><img src="<?php echo base_url('resources/shared/instituteimg/'.$i1->coverpic)?>"  height="85px"> </td>
													<td align="center"><a href="<?php echo $i1->googlemapurl; ?>"><i class="fas fa-map-marker-alt fa-2x" style="margin-top: 10px;"></i></a></td>
													<td align="center"><a href="<?php echo $i1->fblink; ?>"><i class="fab fa-facebook-square fa-2x" style="color: #bf00ff;margin-top: 10px;"></i></a></td>
													<td align="center"><a href="<?php echo $i1->instalink; ?>"><i class="fab fa-instagram fa-2x" style="color:#ff1a1a;margin-top: 10px;"></i></a></td>
													<td align="center"><a href="<?php echo $i1->twitterlink; ?>"><a href=""><i class="fab fa-twitter-square fa-2x" style="margin-top: 10px;"></i></a></td>
													<td align="center"><a href="<?php echo $i1->linkedinlink; ?>"><i class="fab fa-linkedin fa-2x" style="margin-top: 10px;"></i></a></td>
													<td align="center"><a href="<?php echo $i1->youtubelink; ?>"><i class="fab fa-youtube fa-2x" style="color:red;margin-top: 10px;"></i></a></td>
													<td><?php echo $i1->cityname; ?></td>
													<td><?php echo $i1->address; ?></td>
													<td><?php echo $i1->contactnumber; ?></td>
													<td><?php echo $i1->status; ?></td>
													<td><?php echo $i1->regdatetime; ?></td>
													<td>
														<?php
														if($i1->status == 0)
                                                        {
                                                        	?>
                                                        	<a href="<?php echo site_url("admin/Des/blockInsStatus/".$i1->instituteid) ?>" class="btn btn-red">Block</a>
                                                        	<?php
                                                        }
                                                        else if($i1->status == 1)
                                                        {
                                                        	?>
                                                        	<a href="<?php echo site_url("admin/Des/unblockInsStatus/".$i1->instituteid) ?>" class="btn btn-primary">Allow</a>
                                                        	<?php
                                                        }
														?>
													</td>
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

      //search
      $(document).ready(function(){
      	$('#s1').keyup(function(){
      		var a=$(this).val();
      		if(a != "")
      		{
      			loadData(a);
      		}
      		else
      		{
      			loadData();
      		}
      	});
      	function loadData(qry)
      	{
			 $.ajax({
	            url:"<?php echo site_url("admin/Des/loadData1") ?>",
	            method:"post",
	            data:{qry:qry},
		        success:function(data){
		        document.getElementById("tb1").innerHTML= data;
		        }
		      });
		};
      });
	</script>
</body>

<!-- Mirrored from seantheme.com/admetro/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 08:36:42 GMT -->
</html>