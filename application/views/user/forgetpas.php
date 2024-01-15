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
            <?php include_once("header.php") ?>
        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-3 bdiv">
        <br>
        <br><br>
        <br><br>
         <!--  <div class="loginbox text-center abc">-->
                                <i class="fa fa-graduation-cap fa-3x"></i>
                                <h2 style="color:white">Change Password</h2>
                                <p style="color:white"></p>
                                <form class="form-inline" method="post" action="<?php echo site_url("user/Student/changepass") ?>">
                                     <ul class="nav nav-tabs">
                                    <li class="nav-item" id="st_mail">
                                      <a class="nav-link"></a>
                                    </li>

                                    <li class="nav-item"  id="st_otp">
                                      <a class="nav-link"></a>
                                    </li>
                                  </ul>

                                   <div class="tab-pane active" id="edet">
                                    <input type="text" name="txtemail" id="txtemail" placeholder="Enter Email" required class="form-control" size=30/>
                                    <br>
                                    <input type="Password" name="txtnpas" id="txtnpas" placeholder="Enter new Password" required class="form-control" size=30 />

                                    <input type="Password" name="txtcpas" id="txtcpas" placeholder="Re-Enter Password" required class="form-control" size=30 />
                                       <p id="result1" style="color:red"></p>
                                    <input type="button" name="btn_otp" class="btn btn-primary btn-block" id="btn_otp" value="send otp"> 
                                </div>
                                         <div class="tab-pane fade" id="otpdet">
                                            <label id="lb1" hidden></label>
                                             <input type="text" placeholder="enter OTP" required class="form-control" name="txtotp" id="txtotp"/>
                                             <input type="submit" class="btn btn-primary btn-block" name="btnlog" id="btnlog">
                                        </div>
                                </form>         
                        
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
    }
        .bdiv{
            background-color:rgba(76,76,76,1);      
            height:auto;
            margin-top:40px;
            color:#fff; 
       
border-radius: 65px 0px 65px 0px;
-moz-border-radius: 65px 0px 65px 0px;
-webkit-border-radius: 65px 0px 65px 0px;
margin-bottom:50px;
        }
        .bdiv a:hover{
            color:blue;
        }
        .bdiv input{
            background:transparent;
            margin-bottom: 20px;
            outline:none;
            border-bottom:2px solid white;
            color:#fff;
        }
        .bdiv{
        text-align:center; 
        }
        ::placeholder{
            color:white;
        }
</style> 
<script>
    $(document).ready(function(){
        $('#otpdet').hide();
        $('#btn_otp').click(function(){
            var v1=$('#txtnpas').val();
            var v2=$('#txtcpas').val();
                if(v1 != v2)
                {
                document.getElementById("result1").innerHTML="Password not match";
                }
                else{
                    document.getElementById("result1").innerHTML="";    
                }
                var u2=$('#result1').html();

                if(u2 == "")
                {
                     $('#otpdet').show();
                     $('#edet').hide();
                     $('#st_mail').removeAttr('href data-toggle');
                     $('#edet').removeClass('active');
                     $('#st_otp').attr('href','#otpdet');
                     $('#st_otp').attr('data-toggle','tab');
                     $('#otpdet').addClass('active in');

                      var otmail=$('#txtemail').val();
                        $.ajax({
                          url:"<?php echo site_url("user/Student/sendpassotp") ?>",
                          method:"post",
                          data:{otmail:otmail},
                          success:function(data){
                            document.getElementById("lbl1").innerHTML= data;
                          }
                          });   

               }else{
                    return false;
                }
        });

         $('#btnlog').click(function(){
            var a1=$('#lbl1').html();
            var a2=$('#txtotp').val();

            if(a1 == md5(a2))
            {
                return true;
            }
            else{
                return false;
            }
         });
    });
</script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/member-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:46 GMT -->
</html>