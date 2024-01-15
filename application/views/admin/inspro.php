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
				<?php
				  foreach ($insinfo as $i1)
				   { 	
				       ?>					
						<div class="profile-header-img">
							<img src="<?php echo base_url('resources/shared/instituteimg/'.$i1->coverpic) ?>" height="100px" />
						</div>
					<!-- END profile-header-img -->
					<!-- BEGIN profile-header-info -->
					<div class="profile-header-info">
						<h4><?php echo $i1->institutename; ?></h4>
					</div>
						<?php
					}
					?>					
					<!-- END profile-header-info -->
				</div>
				<!-- END profile-header-content -->
				<!-- BEGIN profile-header-tab -->
				<ul class="profile-header-tab nav nav-tabs">
					<li class="nav-item"><a href="#profile-friends" class="nav-link active" data-toggle="tab">INTITUTE USERS</a></li>
					<li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">CLASSES</a></li>				
					<li class="nav-item"><a href="#profile-about" class="nav-link" data-toggle="tab">STUDENTS</a></li>											
				</ul>
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
                          <div class="tab-pane fade show active" id="profile-friends">	
									<div class="m-b-10"><b>Institute's User List</b></div>
									<!-- BEGIN friend-list -->
										<ul class="friend-list clearfix">
											<?php
											    foreach ($insuinfo as $i1)
											    {
													?>
													<li>
														<a href="<?php echo site_url("admin/Institute_Pro/loadInsUser/".$i1->instituteuserid) ?>">
															<div class="friend-img"><img src="<?php echo base_url('resources/shared/instituteimg/insuser/'.$i1->profilepic) ?>" height="50px" width="50px"/></div>
															<div class="friend-info">
																<h4><?php echo $i1->username; ?></h4>
																<p><?php echo $i1->email; ?></p>
															</div>
														</a>
													</li>
													<?php
												}
											?>
										</ul> 
						  </div>	
						  <div class="tab-pane fade" id="profile-photos">
								<div class="m-b-10"><b>Classes</b></div>
									<div class="row">
										<!-- BEGIN col-6 -->
										<?php 
										foreach ($clsinfo as $c1)
										{			
									    	?>
											<div class="col-6">
												<!-- BEGIN widget-card -->
												<a href="<?php echo site_url("admin/Institute_Pro/loadClass/".$c1->classid) ?>" class="widget-card widget-card-inverse dynamic text-center">
													<div class="widget-card-cover" style="background-image: url(<?php echo base_url('resources/shared/instituteimg/insclass/'.$c1->classimage); ?>)">
														<div class="cover-bg"></div>
													</div>
													<div class="widget-card-content p-t-40 p-b-40">
														<h4 class="widget-title widget-title-inverse f-s-20 m-b-5"><?php echo $c1->title; ?></h4>
														<div class="widget-desc widget-desc-inverse"><b><?php echo $c1->createddt; ?></b><span class="d-none d-md-inline"><br /></span><b><?php echo $c1->classcode; ?></b></div>
													</div>
												</a>
												<!-- END widget-card -->
											</div>
											<?php
										}
										?>
									</div>								    						
						  </div>	
						  <div class="tab-pane fade" id="profile-about">
						   	<div class="m-b-10"><b>Students</b></div>	
								<ul class="friend-list clearfix">
									<?php
									    foreach ($stuinfo as $i1)
									    {
											?>
											<li>
												<a href="<?php echo site_url("admin/Institute_Pro/loadStudent/".$i1->studentid) ?>">
													<div class="friend-img"><img src="<?php echo base_url('resources/shared/images/'.$i1->profilepic) ?>" height="50px" width="50px"/></div>
													<div class="friend-info">
														<h4><?php echo $i1->fullname; ?></h4>
														<p><?php echo $i1->emailid; ?></p>
													</div>
												</a>
											</li>
											<?php
										}
									?>
								</ul> 						   	
						  </div>				  					  
						</div>
						<!-- END tab-content -->
					</div>
					<!-- END col-8 -->
					<!-- BEGIN col-4 -->
					<div class="col-xl-4">
						<!-- BEGIN profile-info-list -->
						<ul class="profile-info-list d-none d-xl-block">
							<li class="title">PERSONAL INFORMATION OF INSTITUTE</li>
	                        <?php
                                foreach ($insinfo as $i1)
                                 {
			                        ?>  
									<li>
										<div class="field">Id</div>
										<div class="value"><?php echo $i1->instituteid; ?></div>
									</li>
									<li>
										<div class="field">Name</div>
										<div class="value"><?php echo $i1->institutename; ?></div>
									</li>
									<li>
										<div class="field">Email_Id</div>
										<div class="value"><?php echo $i1->email; ?></div>
									</li>
									<li>
										<div class="field">Description</div>
										<div class="value"><?php echo $i1->description; ?></div>
									</li>
									<li>
										<div class="field">City</div>
										<div class="value"><?php echo $i1->cityname; ?></div>
									</li>		
									<li>
										<div class="field">State</div>
										<div class="value"><?php echo $i1->statename; ?></div>
									</li>	
									<li>
										<div class="field">Contact_NO</div>
										<div class="value">+91&nbsp;<?php echo $i1->contactnumber; ?></div>
									</li>			
									<li>
										<div class="field">Website</div>
										<div class="value"><a href="<?php echo $i1->website; ?>"><i class="fas fa-globe" style="font-size: 25px;"></i></a></div>
									</li>	
									<li>
										<div class="field">Google Map</div>
										<?php
										    if($i1->googlemapurl==null)
										    {
											    ?>										
										        <div class="value"><a href=""><i class="fas fa-map-marker-alt" style="font-size: 25px;"></i></a></div>
									      	    <?php
									      	}
									      	else
									      	{
									      		?>
										        <div class="value"><a href="<?php echo $i1->googlemapurl;?>"><i class="fas fa-map-marker-alt" style="font-size: 25px;"></i></a></div>  		
									      		<?php
									      	}
										?>
									</li>	
									<li>
										<div class="field">Facebook</div>
										<?php
										    if($i1->fblink==null)
										    {
											    ?>
										        <div class="value"><a href=""><i class="fab fa-facebook-square" style="font-size: 30px;color: indigo"></i></a></div>
										        <?php
										    }
										    else
										    {
										    	?>
										          <div class="value"><a href="<?php echo $i1->fblink;?>"><i class="fab fa-facebook-square" style="font-size: 30px;color: indigo"></i></a></div>	
										    	<?php
										    }
										?>
									</li>	
									<li>
										<div class="field">Instagram</div>
										<?php
										    if($i1->instalink==null)
										    {
											    ?>										
										        <div class="value"><a href=""><i class="fab fa-instagram" style="font-size: 30px;color:#ff1a1a;"></i></a></div>	
										        <?php
										    }
										    else
										    {
										        ?>
										        <div class="value"><a href="<?php echo $i1->instalink;?>"><i class="fab fa-instagram" style="font-size: 30px;color:#ff1a1a;"></i></a></div>       
										        <?php	
										    }
										?>
									</li>	
									<li>
										<div class="field">Twitter</div>
										<?php
										    if($i1->twitterlink==null)
										    {
											    ?>										
										         <div class="value"><a href=""><i class="fab fa-twitter-square" style="font-size: 30px;"></i></a></div>
										         <?php
										    }
                                            else
                                            {
                                            	?>
										         <div class="value"><a href="<?php echo $i1->twitterlink;?>"><i class="fab fa-twitter-square" style="font-size: 30px;"></i></a></div>   	
                                            	<?php
                                            }
										?>         
 									</li>										 
									<li>
										<div class="field">Linked In</div>
										<?php
										    if($i1->linkedinlink==null)
										    {
											    ?>
												<div class="value"><a href="<?php echo $i1->linkedinlink;?>"><i class="fab fa-linkedin" style="font-size: 30px;"></i></a></div>
												<?php
									    	}
									    	else
									    	{
									    		?>
												<div class="value"><a href=""><i class="fab fa-linkedin" style="font-size: 30px;"></i></a></div>		
									    		<?php
									    	}
										?>
									</li>
																				
									<li>
										<div class="field">Youtube</div>
										<?php
										    if($i1->youtubelink==null)
										    {
											    ?>										
										        <div class="value"><a href=""><i class="fab fa-youtube" style="font-size: 30px;color:red;"></i></a></div>
										        <?php
                                            }
                                            else
                                            {
                                                ?>
										        <div class="value"><a href="<?php  echo $i1->youtubelink;?>"><i class="fab fa-youtube" style="font-size: 30px;color:red;"></i></a></div>      
                                                <?php  	
                                            }
										?>        
									</li>
									<?php
								}
							?>		
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