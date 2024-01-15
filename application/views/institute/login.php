<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 16:12:03 GMT -->
<head>

    <title>Ecourse | Login</title>
    <?php include_once("topscript.php") ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body class="login">

	<!-- PRELOADER -->
        <div id="loader">
			<div class="loader-container">
				<img src="images/load.gif" alt="" class="loader-site spinner">
			</div>
		</div>
	<!-- END PRELOADER -->

    <!-- START SITE -->

    <!-- START SITE -->
    <div id="wrapper"><div class="logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="site-logo">
                            <a class="navbar-brand"><b>E</b><span>Course</span>
                            <small>Learning Management System</small>
                            </a>
                        </div>
                    </div><!-- end col -->

              <!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end logo-wrapper -->

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 maindiv">
                        <div class="">
                            <div class="loginbox text-center">
                                <h3>User Login</h3>
                                <p>Please login account in below.<!--  If no account please  --><!-- <a href="#">create new one</a> here.</p> -->
                                <form class="form-inline" method="post" action="<?php echo site_url('institute/InsLogin/validateLogin') ?>">
                                   

                              <div class="input-box">
                                <div style="position:absolute;">
                               <a style="color: white;position:absolute;"><i  class="fa fa-user fa-2x"></i></a>
                                </div>
                                    <input type="text" placeholder="Username" required class="form-control" name="txtUname" />
                                   </div>

                                     <div class="input-box">
                                        <div style="position:absolute">
                               <a  style="color: white;position:absolute;"><i class="fa fa-key fa-2x"></i></a>
                                </div>
                                <span>                                 
                               <a id="sh1" style="color: white;position:absolute;left:80%;"><i id="i1" class="fa fa-eye-slash fa-2x"></i></a>
                                </span>
                                    <input type="Password" placeholder="Password" required class="form-control" name="txtPwd" id="txtpwd"/ width="90px;">
                                </div>
                                <br>
                                    <?php
                                       if(isset($loginErr))
                                       {
                                       ?>
                                       <p style="color: red"><?php echo $loginErr ?> </p>
                                       
                                    <a href="<?php echo site_url("institute/InsLogin/openforgotpass") ?>" class="btn btn-block" style="color:white">forgot password ?</a>
                                       <?php
                                        }
                                       ?>
                                       <br>
                                    <button class="btn btn-primary btn-block">Login</button>
                                    <div class="checkbox checkbox-warning">
                                        <!-- <input id="checkbox1" type="checkbox" class="styled">
                                        <label for="checkbox1">
                                            <small>New User? Register Here.</small>
                                        </label> -->
                                        <!--<a href="<?php echo site_url('institute/InsLogin/loadReg') ?>">New User? Register Here.</a>-->
                                    </div>
                                </form>         
                            </div><!-- end newsletter -->
                        </div><!-- end widget -->
                    </div>
                </div>
            </div>
      
    </div><!-- end wrapper -->
<?php include_once("bottombar.php") ?>
<style type="text/css">
    .maindiv{
        margin-top:70px;
        margin-bottom:20px;
    }
    .input-box{
            margin:0px auto;
            width:80%;
            border-bottom:1px solid #fff;
            padding-top:5px;
            padding-bottom:2px;
        }
        .input-box input{
            width:90%;
            border:none;
            outline:none;
            background:transparent;
            color:#fff;
        }
</style>
<script>
    $(document).ready(function(){
        $('#sh1').click(function(){
            var pf=$('#txtpwd');
            var pft=pf.attr('type');
            if(pft == 'password')
            {
                pf.attr('type','text');

                    $('#i1').removeClass('fa fa-eye-slash');
               $('#i1').addClass('fa fa-eye');
            }
            else{
                 pf.attr('type','password');
                 $('i1').removeClass('fa fa-eye');
                    $('#i1').addClass('fa fa-eye-slash'); 

                
            }
        });
    });
</script>

    <div class="dmtop">Scroll to Top</div>
    <!-- END SITE -->

    <script src="<?php echo base_url('resources/institute/') ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url('resources/institute/') ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url('resources/institute/') ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/member-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 16:12:03 GMT -->
</html>