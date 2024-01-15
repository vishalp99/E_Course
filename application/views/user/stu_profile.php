<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:30 GMT -->
<head>

    <title>Ecourse | My Profile</title>
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
                            <!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end logo-wrapper -->
            <?php include_once("header.php") ?>
        <section class="section litpadtop bgw">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 nopad">
                        <div class="member-cover">
                            <img src="<?php echo base_url('resources/user/') ?>upload/member-cover.jpg" alt="" class="img-responsive">
                            <div class="lightoverlay overlay"></div>
                            <div class="authorbox">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="clearfix">
                                            <div class="avatar-author">
                                                <a>
                                                    <img alt="" src="<?php echo base_url('resources/shared/images/'.$stuinfo->profilepic) ?>" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="author-title desc">
                                                <h4><?php echo $stuinfo->username ?></h4>
                                                <ul class="list-inline social-small">
                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end authorbox -->
                        </div><!-- end cover -->
                    </div>
                </div><!-- end row -->
            </div>

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

                                        <li class="active"><a href="<?php echo site_url("user/Manageprofile/loadmyprofile") ?>">Profile</a></li>
                                        <li><a href="<?php echo site_url("user/Manageprofile/loadeditpro") ?>">Edit Profile</a></li>
                                        <li><a href="<?php echo site_url("user/Manageprofile/myclasses") ?>">Enrolled Classes</a></li>
                                </div><!-- end team-desc -->
                            </div><!-- end team-member -->
                        </div>
                    </div><!-- end right -->

                    <div id="sidebar1" class="col-md-8 col-sm-12">
                        <div class="widget clearfix">
                            <div class="member-profile">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Personal Information</span>            
                                        </h2>
                                        <br>
                                        <ul>
                                            <li>
                                                <div><label disabled>Username</label></div>
                                                <div>&nbsp;<?php echo $stuinfo->username ?></div>
                                            </li>
                                            <hr>
                                            <li>
                                                <div><label disabled>Mail ID</label></div>
                                                <div>
                                                &nbsp;<?php echo $stuinfo->emailid ?></div>
                                            </li>
                                            <hr>
                                            <li>
                                                <div><label disabled>Bio</label></div>
                                                <div><p>&nbsp;<?php echo $stuinfo->bio ?></p></div>
                                            </li>
                                            <hr>
                                            <li>
                                                
                                                <div><label disabled>Delete Account </label></div>
                                                <div><a href="<?php echo site_url('user/Manageprofile/delprofile') ?>" class="btn btn-primary">Delete</a></div>
                                            </li>
                                        </ul>
                                </div><!-- end big-title -->

                        
                            </div><!-- end team-member -->
                        </div>
                    </div><!-- end right -->

                    <div id="sidebar2" class="col-md-3 col-sm-12 mob30">
                        <div class="widget clearfix">
                            <div class="member-profile">
                                
                            </div><!-- end team-member -->
                        </div>
                    </div><!-- end right -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

<?php include_once("footer.php") ?>
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
        </div><!-- end logo-wrapper -->


     <?php include_once("bottombar.php") ?><!-- end topbar -->
    </div><!-- end wrapper -->

    <div class="dmtop">Scroll to Top</div>
    <!-- END SITE -->

    <script src="<?php echo base_url("resources/user/") ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("resources/user/") ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url("resources/user/") ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:31 GMT -->
</html>