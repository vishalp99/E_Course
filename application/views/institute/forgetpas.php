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
                        <div class="widget contentwidget">
                            <div class="loginbox text-center">
                                <h3>Change password</h3>
                                <p>Enter valid email account.<!--  If no account please  --><!-- <a href="#">create new one</a> here.</p> -->
                                <form class="form-inline" method="post" action="<?php echo site_url('institute/InsLogin/changepass') ?>">
                                    <ul class="nav nav-tabs">
                                    <li class="nav-item" id="st_mail">
                                      <a class="nav-link"></a>
                                    </li>

                                    <li class="nav-item"  id="st_otp">
                                      <a class="nav-link"></a>
                                    </li>
                                  </ul>
                                   <div class="tab-pane active" id="edet">
                                    <input type="text" placeholder="enter email" required class="form-control" name="txtemail" id="txtemail"/>
                                    <input type="Password" placeholder="Enter new Password" required class="form-control" name="txtnpas" id="txtnpas" />
                                    <input type="Password" placeholder="Re-enter Password" required class="form-control" name="txtcpas" id="txtcpas" />
                                   <p id="result1" style="color:red"></p>
                                    <input type="button" name="btn_otp" class="btn btn-primary btn-block" id="btn_otp" value="send otp"> 
                                    </div>
                                        <div class="tab-pane fade" id="otpdet">
                                            <label id="lb1" hidden></label>
                                             <input type="text" placeholder="enter OTP" required class="form-control" name="txtotp" id="txtotp"/>
                                             <input type="submit" class="btn btn-primary btn-block" name="btnlog" id="btnlog">
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
        margin-bottom:70px;
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
                          url:"<?php echo site_url("institute/InsLogin/sendotp") ?>",
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
    <div class="dmtop">Scroll to Top</div>
    <!-- END SITE -->

    <script src="<?php echo base_url('resources/institute/') ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url('resources/institute/') ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url('resources/institute/') ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/member-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 16:12:03 GMT -->
</html>