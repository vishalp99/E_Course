<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/admetro/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 08:38:03 GMT -->
<head>
	<meta charset="utf-8" />
	<title>E_Course</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="<?php echo base_url('resources/admin/') ?>assets/css/app.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<script type="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app app-full-height app-without-header">
		<!-- BEGIN login -->
		<div class="login col-xl-12 col-md-12 col-sm-6 col-sm-offset-3">
			<!-- BEGIN login-cover -->
			<div class="login-cover"></div>
			<!-- END login-cover -->
			<!-- BEGIN login-content -->
			<div class="login-content">
				<!-- BEGIN login-brand -->
				<div class="login-brand">
					<i class='fas fa-graduation-cap' style="color: rgb(0,150,168);font-size: 50px;"></i>
				</div>
				<!-- END login-brand -->
				<h3 class="m-b-20"><span>Sign In</span></h3>
				<!-- BEGIN login-desc -->
				<div class="login-desc m-b-30">
					For your protection, please verify your identity.
				</div>
				<!-- END login-desc -->
				<!-- BEGIN login-form -->
				<ul class="nav nav-tabs">
					<li class="nav-item" id="pg_signin">
						<a class="nav-link"></a>
					</li>
					<li class="nav-item" id="pg_otp">
                        <a class="nav-link"></a>  
					</li>
				</ul>
				<div class="tab-pane active" id="p1sign">
					<form action="<?php echo site_url('admin/Login/validateLogin') ?>" method="post" name="login_form">
							<div class="form-group">
								<label>Username<span class="text-danger">*</span><i class="fa fa-user" style="margin-left: 380px;top:59%;position: absolute;font-size: 15px;"></i></label>
								<input type="text" name="txtuname" class="form-control" value="" />
							</div>
							<div class="form-group">
								<label>Password<span class="text-danger">*</span></label>
									<a id="a1">
										<i id="i1" class="fa fa-eye-slash" style="margin-left: 380px;top:78%;position: absolute;font-size: 15px;">
										</i>
									</a>
								<input type="password" id="t1" name="txtupass" class="form-control" value="" />
							</div>
							<?php
							   if(isset($errmsg))
							   { 
							      ?>
									<div class="form-group" style="color: red;">
		                              <?php echo $errmsg; ?>
									</div>
								   <?php
								}
							?>
							<div class="m-b-30">
							</div>
							<div class="d-flex align-items-center">
								<input type="submit" class="btn btn-primary width-150 btn-rounded" value="Sign In">
								<input type="button" id="btnotp" class="btn btn-primary width-150 btn-rounded" style="margin-left: 20px" value="Forgot Password">
							</div>
					</form>
				</div>
			    <div class="tab-pane" id="p2otp">
					<form method="post" action="<?php echo site_url("admin/Login/changepass"); ?>">
							<div class="form-group">
								<label>Email id<span class="text-danger">*</span></label>
								<input type="email" id="email" name="txtemail" class="form-control" value="" />
							</div>				
							<div class="form-group">
								<label>New Password<span class="text-danger">*</span></label>
								<input type="password" id="txtnpass" class="form-control" value="" />
							</div>												
							<div class="form-group">
								<label>Confirm Password<span class="text-danger">*</span></label>
								<input type="password" name="txtcpass" id="cpass" class="form-control" value="" />
							</div>								
							<div class="form-group">
								<span>
									<p id="e1" style="color: red;"></p>
								</span>
							</div>	
							<div class="d-flex align-items-center">
								<input type="button" id="btnotp1" class="btn btn-primary width-150 btn-rounded" value="Send OTP">
							</div>
							<br>	
							<br>
							<br>					
							<div id="o1">				
								<div class="form-group">
									<label id="l1" hidden></label>
									<label>Enter OTP<span class="text-danger">*</span></label>
									<label class="login-desc m-b-30">(Your OTP is Sent To Your Mail)</label>
									<input type="password" name="txtotp" class="form-control" id="txtotp" />
								</div>
								<div class="d-flex align-items-center">
									<button id="btnotp2" type="submit" class="btn btn-primary width-150 btn-rounded">Change Password</button>
								</div>
							</div>			    	
					</form>
				</div>
				<!-- END login-form -->
			</div>
			<!-- END login-content -->
		</div>
		<!-- END login -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('resources/admin/') ?>assets/js/app.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');


      //OTP
	  $(document).ready(function(){
	  $('#p2otp').hide();
	  $('#o1').hide();
			$('#btnotp').click(function(){	
				$('#p2otp').show();
				$('#p1sign').hide();
				$('#pg_signin').removeAttr('href data-toggle');
				$('#p1sign').removeClass('active');
				$('#pg_otp').attr('href','#p2otp');
				$('#pg_otp').attr('data-toggle','tab');
				$('#p2otp').addClass('active in');
			});
			$('#btnotp1').click(function(){
                var n1=$('#txtnpass').val();
                var c1=$('#cpass').val();	
                if(n1!=c1)
                {
                   document.getElementById("e1").innerHTML="Password Is Not Match";
                }
                else
                {
                   document.getElementById("e1").innerHTML="";
                }
                var u1=$('#e1').html();
                if(u1=="")
                {						
				$('#o1').show();                	
				 // return true;	
                 //OTP ajax
				 var otmail=$('#email').val();
				 //alert(otmail);
				 var val=$.ajax({
				                url:"<?php echo site_url("admin/Login/sendotp") ?>",
				                method:"post",
				                data:{otmail:otmail},
							    // async: false,
				                // contentType : false, 
			                    // processData: false,
						      success:function(data){
						        document.getElementById("l1").innerHTML= data;
						      }
						      });

                }
                else
                {
                	return false;
                }
			});

            //OTP Validation
            $('#btnotp2').click(function(){
            	var a1=$('#l1').html();
            	var t1=$('#txtotp').val();
            	if(a1==md5(t1))
            	{
            		return true;
            	}
            	else
            	{
            		return false;
            	}
            });	

            //fa fa-eye
            $('#a1').click(function(){
              var ps=$('#t1');
              var ps1=ps.attr('type');
              if(ps1 == 'password')
              {
              	ps.attr('type','text');
              	$('#i1').removeClass('fa fa-eye-slash');
              	$('#i1').addClass('fa fa-eye');
              }
              else
              {
              	ps.attr('type','password');
              	$('#i1').removeClass('fa fa-eye');
              	$('#i1').addClass('fa fa-eye-slash');
              }

            });	         			
	  });

	</script>
</body>

<!-- Mirrored from seantheme.com/admetro/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 08:38:03 GMT -->
</html>