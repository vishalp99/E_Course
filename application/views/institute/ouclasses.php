<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:30 GMT -->
<head>

    <title>Ecourse | Other User Classes</title>
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
                            <a class="navbar-brand" >E<span>Course</span>
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
                                                <a href="author.html">
                                                    <img alt="" src="<?php echo base_url('resources/shared/instituteimg/insuser/'.$uinfo->profilepic) ?>" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="author-title desc">
                                                <h4><?php echo $uinfo->username ?></h4>
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

                                       <li ><a href="<?php echo site_url("institute/Manageprofile/loadotheruserprofile/$uinfo->instituteuserid") ?>">Profile</a></li>
                                       <?php
                                       if($uinfo->status == 0)
                                       { 
                                       ?>
                                        <li class="active"><a href="<?php echo site_url("institute/Manageprofile/loadouclass/$uinfo->instituteuserid") ?>">Classes</a></li>
                                        <?php 
                                    }
                                        ?>
                                    </ul><!-- end ul -->
                                </div><!-- end team-desc -->
                            </div><!-- end team-member -->
                        </div>
                    </div><!-- end right -->

                    <div id="sidebar1" class="col-md-8 col-sm-12 col-xs-12 wow fadeIn">
                        <div class="widget clearfix">
                            <div class="member-profile">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Class</span>      
                                        </h2>
                                        <hr>
                                       <?php 
                    foreach ($cinfo as $c) {
                        if($c->status==0)
                        {
                    ?>
                    <div class="shop-item course-v2">
                            <div class="post-media entry">
                                <div class="ribbon-wrapper-green"><div class="ribbon-green">Featured</div></div><img src="<?php echo base_url("resources/shared/instituteimg/insclass/".$c->classimage) ?>"class="img-responsive" style="max-height:500px;">
                                <div class="magnifier">
                                    <div class="shop-bottom clearfix">
    <a href="<?php echo site_url("institute/Resources/loadAllLec/".$c->classid) ?>" title="More Info"><i class=" fa fa-info-circle "></i></a>
                                        
                                    </div><!-- end shop-bottom -->

                                    <div class="large-post-meta">
                                        <span class="avatar"><a href="member-profile.html"><img src="upload/avatar_02.png" alt="" class="img-circle"></a></span>
                                        <small>&#124;</small>
                                        <span><a href="course-single.html"><i class="fa fa-clock-o"></i><?php echo $c->createddt?></a></span>
                                        <small class="hidden-xs">&#124;</small>
                                        <span class="hidden-xs"><a href="course-single.html"><i class="fa fa-graduation-cap"></i> 12 Students</a></span>
                                    </div><!-- end meta -->
                                </div><!-- end magnifier -->
                            </div><!-- end post-media -->
                            <div class="shop-desc">
                                <div class="shop-price clearfix">
                                    <div class="pull-left">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- end rating -->
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <small></small>
                                    </div><!-- end right -->
                                </div>
                                <h3><a href="course-single.html" title=""><?php echo $c->title ?></a></h3>
                            </div>
                       </div><!-- end shop-item -->
                    <?php
                    }  
                }
                    ?>
                                        <br>
                                </div><!-- end big-title -->

                        
                            </div><!-- end team-member -->
                        </div>
                    </div><!-- end right -->
<!-- end right -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

<?php include_once("footer.php") ?>
        <div class="logo-wrapper background-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="site-logo">
                            <a class="navbar-brand" >E<span>Course</span>
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

    <script src="<?php echo base_url("resources/institute/") ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("resources/institute/") ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url("resources/institute/") ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:31 GMT -->
</html>