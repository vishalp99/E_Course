<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:46 GMT -->
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
     <div class="logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="site-logo">
                            <a class="navbar-brand">E<span>Course</span>
                            <small>Learning Management System</small>
                            </a>
                        </div>
                    </div><!-- end col -->
                            <!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
        <div class="col-md-6 col-md-offset-3 bdiv">
                                <div class="">
                            <div class="loginbox text-center">
         <!--  <div class="loginbox text-center abc">-->
                                <i class="fa fa-graduation-cap fa-3x"></i>
                                <h2 style="color:white">Login</h2>
                                <p style="color:white">Please login. If no account please <a href="<?php echo site_url("user/Student/reg") ?>">Register</a> here.</p>
                                <form class="form-inline" method="post" action="<?php echo site_url("user/Student/validatelogin") ?>">
                              
                              <div class="input-box">
                                <div style="position:absolute;">
                               <a style="color: white;position:absolute;"><i  class="fa fa-user fa-2x"></i></a>
                                </div>
                                    <input type="text" name="txtuname" placeholder="Username" required class="form-control" size=30/>

                                   </div>
                                    <div class="input-box">
                                        <div style="position:absolute">
                               <a  style="color: white;position:absolute;"><i class="fa fa-key fa-2x"></i></a>
                                </div>
                                <span>
                                    
                               <a id="sh1" style="color: white;position:absolute;left:80%;"><i id="i1" class="fa fa-eye-slash fa-2x"></i></a>
                                </span>
                                    <input type="Password" name="txtpwd" id="txtpwd" placeholder="Password" required class="form-control" size=30 />   
                                
                                </div>
                                       <?php if(isset($loginerr))
                                            {
                                        ?>
                                       <p style="color:red"><?php echo $loginerr ?></p>
                                       
                                        <a href="<?php echo site_url("user/Student/openforgotpass") ?>" class="btn btn-block" style="color:white">forgot password ?</a>
                                      <?php 
                                        } 
                                        ?>
                                        <br>
                                      <button type=submit name="btnlogin" id="btnlogin" class="btn btn-primary btn-radius btn-lg" style="width:100px;margin-left:15%">Login</button>
                                  
                                      <div class="checkbox checkbox-warning">
                                        <input id="checkbox1" type="checkbox" class="styled" checked>
                                        <!--<label for="checkbox1">
                                            <small>Remember me</small>
                                        </label>-->
                                    </div>
                                </form>     
                                </div>
                                </div>    
                        
      </div>
<!--</div>-->

        <?php include_once("bottombar.php") ?>
    <script src="<?php echo base_url("resources/user/")?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("resources/user/")?>js/bootstrap.js"></script>
    <script src="<?php echo base_url("resources/user/")?>js/plugins.js"></script>

    <!--- background-image:url(<?php echo base_url('resources/user/upload/big_blog_03.jpg') ?>);background-repeat:no-repeat;background-size:cover;background-blend-mode:hard-light;" -->
<style type=text/css>
    body{
        font-family:Tahoma , sans-serif;
            color:#000;
            text-align:center;
    }/*
        .bdiv{
            background-color:rgba(77,77,77,1);      
            height:auto;
            margin-top:50px;
            color:#fff; 
       
border-radius: 65px 0px 65px 0px;
-moz-border-radius: 65px 0px 65px 0px;
-webkit-border-radius: 65px 0px 65px 0px;
margin-bottom:50px;
        }*/
        /*.bdiv a:hover{
            color:blue;
        }*/
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
        /*.bdiv input{
            background:transparent;
            margin-bottom: 20px;
            outline:none;
            border-bottom:2px solid white;
            color:#fff;
        }*/
        .bdiv{
        text-align:center;
        margin-bottom:70px; 
        }
        ::placeholder{
            color:white;
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
                 $('#i1').removeClass('fa fa-eye');
                    $('#i1').addClass('fa fa-eye-slash');     
            }
        });
    });
</script>
</body>

<!-- Mirrored from showwp.com/demos/teachme/member-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:46 GMT -->
</html>