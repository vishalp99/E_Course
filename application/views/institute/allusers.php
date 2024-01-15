<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:30 GMT -->
<head>

    <title>Ecourse | All Member User</title>
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

       <section class="section paralbackground banner" style="background-image:url('<?php echo base_url("resources/institute/upload/pagebanner_03.jpg")?>');" data-img-width="2400" data-img-height="907" data-diff="100">
            <div class="overlay"></div>
        </section><!-- end section -->

        <div class="page-title bgg">
            <div class="container clearfix">
                <div class="title-area pull-left">
                    <h2>Faculty Members <small>Listed below our awesome Professors</small></h2>
                </div><!-- /.pull-right -->
                <div class="pull-right hidden-xs">
                </div><!-- /.pull-right -->
            </div>
        </div><!-- end page-title -->
        <section class="section bgw">
            <div class="container">

                <div class="row team-wrapper team-circle">
                    <?php 
                    foreach ($allu as $u) {
                        if($u->instituteuserid != $_SESSION['uid'])
                        {
                    ?>

                       <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member text-center">
                            <div class="post-media entry">
                                <img src="<?php echo base_url("resources/shared/instituteimg/insuser/".$u->profilepic) ?>" class="img-responsive img-circle">
                             
                                <div class="magnifier">
                                    <div class="shop-bottom clearfix">
                                        <a href="<?php echo site_url("institute/Manageprofile/loadotheruserprofile/$u->instituteuserid") ?>" title="profile"><i class="fa fa-user"></i></a>
                                        <?php 
                                     if($u->status=="0")
                                     {
                                        ?>
                                        <a href="<?php echo site_url("institute/Manageprofile/blockuser/$u->instituteuserid") ?>" title="Block"><i class="fa fa-ban"></i></a>

                                        <?php 
                                    }
                                    else{
                                        ?>
                                          <a href="<?php echo site_url("institute/Manageprofile/unblockuser/$u->instituteuserid") ?>" title="Unblock"><i class="fa fa-unlock"></i></a>

                                        <?php
                                    }
                                    ?>
                                    </div><!-- end shop-bottom -->
                                </div><!-- end magnifier -->
                            </div><!-- end post-media -->    
                            <div class="team-desc">
                                <h4><?php echo $u->username ?></h4>
                                <h5><?php if($u->level=="2") echo "Faculty";

                                else
                                    echo "Super User";
                                   ?></h5>
                            </div><!-- end team-desc -->
                        </div><!-- end team-member -->
                    </div><!-- end col -->
                    
                    <?php  
                }
            }
                    ?>
                    
                </div>
            </div>
            </section>        
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