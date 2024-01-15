<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/page-became-member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 16:13:52 GMT -->
<head>

    <title>Ecourse | All Memeber Students</title>
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
                    <h2> All Memeber Students</h2>
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

                                       <!--<li><a href="<?php echo site_url("institute/Manageprofile/loadmyprofile") ?>">Profile</a></li>
                                        <li><a href="<?php echo site_url("institute/Manageprofile/loadeditmypro") ?>">Edit Profile</a></li>-->
                                       <li><a href="<?php echo site_url("institute/Manageprofile/loadinstituteprofile") ?>"> Institute Profile</a></li>
                                       <li><a href="<?php echo site_url("institute/Crtclass/loadallclass") ?>">Classes</a></li>
                                        <li><a href="<?php echo site_url("institute/Crtclass")?>">create class</a></li>
                                        <li><a href="<?php echo site_url("institute/InsLogin/loadReg/")?>">Register user</a></li>
                                        <li><a href="<?php echo site_url("institute/InsLogin/loadusers/")?>">All users</a></li>
                                        <li><a href="<?php echo site_url("institute/InsLogin/loadstudents/")?>">All Students</a></li>
                                    </ul><!-- end ul -l -->
                                    <hr>
                                </div><!-- end team-desc -->
                            </div><!-- end team-member -->
                        </div>
                    </div>
                  
                     <div id="sidebar1" class="col-md-9 col-sm-12">
                  <div class="forumwrapper">
                            <div class="forumwrapper-padding">
                                <div id="bbpress-forums">
                                    <div class="table-responsive">
                                        <ul class="bbp-forums">
                                            <li class="bbp-header">
                                                <ul class="forum-titles">
                                                    <li class="bbp-forum-info">Resource view</li>

                                                    <li class="bbp-forum-topic-count hidden-xs">Class</li>
                                                    <li class="bbp-forum-topic-count hidden-xs">resource</li>
                                                    <li></li>
                                                    <li></li>
                                                    <li class="bbp-forum-topic-count hidden-xs">Time</li>
                                                </ul>
                                            </li><!-- .bbp-header -->
                                            <marquee direction="up" height=600px onmouseover="this.stop()" onmouseout="this.start()">
                                            <?php
                                            foreach ($views as $s) {
                                             
                                            ?>
                                             <li class="bbp-body">       
                                                <ul class="forum type-forum status-publish hentry loop-item-0 odd bbp-forum-status-open bbp-forum-visibility-publish">
                                                    <li class="bbp-forum-info">
                                                        <img src="<?php echo base_url("resources/shared/images/$s->profilepic") ?>" alt="" class="alignleft">
                                                        <a class="bbp-forum-title" href="<?php echo site_url("institute/Manageprofile/loadstudentprofile/$s->studentid") ?>" title="General"><?php echo $s->username ?></a>
                                                   
                                                    </li>

                                                    <li class="bbp-forum-topic-count">
                                                        <?php echo $s->title ?>
                                                    </li>

                                                    <li class="bbp-forum-topic-count">
                                                        
                                                        <?php echo $s->resourcetitle ?>
                                                    </li>
                                                            
                                                    <li>
                                                        <?php echo $s->datetime ?>
                                                    </li>
                                                </ul><!-- end bbp forums -->
                                             </li>
                                              <?php
                                                    }
                                           
                                             ?>
                                         </marquee>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
        
</div>
        </div>
    </div>
    <hr class="invis">
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

    <script src="<?php echo base_url('resources/institute/') ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url('resources/institute/') ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url('resources/institute/') ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/page-became-member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 16:13:52 GMT -->
</html>