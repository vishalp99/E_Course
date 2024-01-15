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
					<h4 class="card-header-title" style="font-size: 20px">All Students</h4>
					<label style="margin-right: 10px;margin-top: 5px;font-size: 20px;">Search:-</label>
					<input type="text" id="txt1" name="t1" class="form-control" style="background:transparent;color: white;width: 20%;margin-right: 5%">
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
											<th>STUDENT_ID</th>
											<th>FULL_NAME</th>
											<th>USERNAME</th>
											<th>EMAIL_ID</th>
											<th>MOBILE_NUMBER</th>
											<th>CITY</th>
											<th>PROFILE_PIC</th>
											<th>BIO</th>
											<th>REGISTER_DATE_TIME</th>
											<th>STATUS</th>
											<th>ACCESS</th>
										</tr>
									</thead>
									<tbody id="tbs1">
										<?php
										   foreach ($stuinfo as $i1)
										   {
										      ?>		
													<tr>
														<td><?php echo $i1->studentid; ?></td>
														<td><?php echo $i1->fullname; ?></td>
														<td><?php echo $i1->username; ?></td>
														<td><?php echo $i1->emailid; ?></td>
														<td><?php echo $i1->mobilenumber; ?></td>
														<td><?php echo $i1->cityname; ?></td>
														<td><img src="<?php echo base_url('resources/shared/images/'.$i1->profilepic)?>" width="85px" height="100px"> </td>
														<td><?php echo $i1->bio; ?></td>
														<td><?php echo $i1->regdatetime; ?></td>
														<td><?php echo $i1->status; ?></td>
														<td>
															<?php
															if($i1->status == 0)
	                                                        {
	                                                        	?>
	                                                        	<a href="<?php echo site_url("admin/Des/blockStuStatus/".$i1->studentid) ?>" class="btn btn-red">Block</a>
	                                                        	<?php
	                                                        }
	                                                        else if($i1->status == 1)
	                                                        {
	                                                        	?>
	                                                        	<a href="<?php echo site_url("admin/Des/unblockStuStatus/".$i1->studentid) ?>" class="btn btn-primary">Allow</a>
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

      //Search
      $(document).ready(function(){
        $('#txt1').keyup(function(){
            var s=$(this).val();
            if(s != "")
            {
               loadStudent(s);     
            }
            else
            {
               loadStudent();
            }
        });
        function loadStudent(qry)
        {
           $.ajax({
              url:"<?php echo site_url("admin/Des/loadStudent1") ?>", 
              method:"post",
              data:{qry:qry},
              success:function(data)
              {
              	document.getElementById("tbs1").innerHTML=data;
              } 
           }); 
        };
      });
	</script>
</body>

<!-- Mirrored from seantheme.com/admetro/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 08:36:42 GMT -->
</html>