<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/page-became-member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 16:13:52 GMT -->
<head>

    <title>Ecourse | Create Class</title>
    <?php include_once("topscript.php") ?>
</head>
<body>

	<!-- PRELOADER -->
        <div id="loader">
			<div class="loader-container">
				<img src="images/load.gif" alt="" class="loader-site spinner">
			</div>
		</div>
	<!-- END PRELOADER -->

    <!-- START SITE -->
    <div id="wrapper">
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
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end logo-wrapper -->
        

       <?php include_once("header.php") ?><!-- end header -->
 <section class="section paralbackground banner" style="background-image:url('<?php echo base_url("resources/institute/upload/pagebanner_02.jpg")?>');" data-img-width="2400" data-img-height="907" data-diff="100">
            <div class="overlay"></div>
        </section><!-- end section -->

        <div class="page-title bgg">
            <div class="container clearfix">
                <div class="title-area pull-left">
                    <h2> Class Form</h2>
                </div><!-- /.pull-right -->
                <div class="pull-right hidden-xs">
                    <div class="bread">
                        <ol class="breadcrumb">
                          
                        </ol>
                    </div><!-- end bread -->
                </div><!-- /.pull-right -->
            </div>
        </div><!-- end page-title -->
        <br>
       <div class="container">
                <div class="row">
                    <div id="sidebar" class="col-md-3 col-sm-12 page-left-sidebar">
                        <div class="widget clearfix">
                            <div class="member-profile">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Activity</span>
                                    </h2>
                                </div><!-- end big-title -->
                                <div class="member-desc clearfix">
                                   <ul>
                                       <li><a href="<?php echo site_url("institute/Manageprofile/loadinstituteprofile") ?>"> Institute Profile</a></li>
                                       <li><a href="<?php echo site_url("institute/Crtclass/loadallclass") ?>">Classes</a></li>
                                        <li class="active"><a href="<?php echo site_url("institute/Crtclass")?>">create class</a></li>
                                        <li><a href="<?php echo site_url("institute/InsLogin/loadReg/")?>">Register user</a></li>
                                        <li><a href="<?php echo site_url("institute/InsLogin/loadusers/")?>">All users</a></li>
                                        <li><a href="<?php echo site_url("institute/InsLogin/loadstudents/")?>">All Students</a></li>
                                    </ul><!-- end ul -l -->
                                    <hr>
                                </div><!-- end team-desc -->
                            </div><!-- end team-member -->
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-md-offset-1">
                        <div class="custom-form clearfix">
                            <div class="big-title">
                                <h2 class="related-title">
                                    <span>Create Class</span>
                                </h2>
                            </div><!-- end big-title -->
                            <div class="loginform">
                              <form action="<?php echo site_url('institute/Crtclass/createclass') ?>" class="row" method="post" enctype="multipart/form-data">
                                    <div class="col-md-12">
                                    <div class="row">
                      
                                      </div>
                                    <input type="text" name="txttitle" class="form-control" placeholder="title name"> 
                                    <textarea class="form-control" name="txtdesc" rows="6" placeholder="description"></textarea>
                                    <br>
                                    <label>class image</label>
                                    <input type="file" name="fup" class="form-control">
                                    <p style="margin-bottom:5px">give permission to users:-</p><br>
                                    <div class="col-lg-3 custom-form clearfix" style="max-height:300px;">
                                    <?php 
                                    foreach ($users as $au) {
                                      
                                     if($au->level == 2)
                                     {
                                     ?>

                                     <input style="margin-left:10px" type="checkbox" name="txtuser[]" value="<?php echo $au->instituteuserid ?>"> <?php 
                                     echo $au->username ?>
                                     <br>
                                     <?php 
                                    }
                                  }
                                    ?>
                                  </div>
                                    <br>
                                    <br>
                                    <button type="submit" value="SEND" class="button button--wayra btn-block btn-square btn-lg"> Create Now</button>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
        </div>
    </div>
        <div class="logo-wrapper background-color">
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
     <?php include_once("bottombar.php") ?><!-- end footer -->



       
           

        
    </div><!-- end wrapper -->
<script type="text/javascript">
  function loadcity(sid)
  {
       if(sid!=-1){
           $.ajax({
              url:"<?php echo site_url('institute/Institutereg/loadcitybystate/') ?>"+sid,
              success:function(result)
              {
                  document.getElementById('city').innerHTML=result;
              }
             });
      }
  }
   </script> 

    <script src="<?php echo base_url('resources/institute/') ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url('resources/institute/') ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url('resources/institute/') ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/page-became-member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 16:13:52 GMT -->
</html>