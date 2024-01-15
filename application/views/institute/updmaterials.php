 <!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:13:07 GMT -->
<head>

    <title>Ecourse | Update Lecture</title>
    <?php include_once("topscript.php") ?>
</head>
<body>

    <!-- PRELOADER -->
    <!--    <div id="loader">
            <div class="loader-container">
                <img src="<?php echo base_url("resources/user/") ?>images/load.gif" alt="" class="loader-site spinner">
            </div>
        </div>-->
    <!-- END PRELOADER -->

    <!-- START SITE -->
    <div id="wrapper">
        <div class="logo-wrapper">
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

         <?php include_once("header.php") ?>
         <section class="section paralbackground banner" style="background-image:url('<?php echo base_url("resources/institute/upload/pagebanner_02.jpg")?>');" data-img-width="2400" data-img-height="907" data-diff="100">
            <div class="overlay"></div>
        </section><!-- end section -->

        <div class="page-title bgg">
            <div class="container clearfix">
                <div class="title-area pull-left">
                    <h2> Update lecture Form</h2>
                </div><!-- /.pull-right -->
                <div class="pull-right hidden-xs">
                    <div class="bread">
                        <ol class="breadcrumb">
                          
                        </ol>
                    </div><!-- end bread -->
                </div><!-- /.pull-right -->
            </div>
        </div>
        <!-- SLIDER -->
        <br>
          <div class="container">
                    <div class="col-md-12 col-sm-12 custom-form clearfix">
                        <div class="big-title">
                            <h2 class="related-title">
                                <span>UPDATE MATERIAL</span>
                            </h2> 

                        </div><!-- end big-title -->
                        <div class="contact_form">
                            <form method="post" action="<?php echo site_url("institute/Resources/updResourceinf/$linfo->resourceid/$classid"); ?>" enctype="multipart/form-data"  id="contactform" 
                                class="row">
                                <div class="col-md-12">

                                <input type="text" name="rtitle" id="name" value="<?php echo $linfo->resourcetitle ?>" class="form-control" placeholder="Resources Title">        
                                <textarea class="form-control" name="rdes" id="comments" rows="6" placeholder="Resources description" value="<?php echo $linfo->resourcedescription ?>"></textarea>
                                
                                <button type="submit" value="SEND" id="submit" class="btn btn-primary"> Apply changes</button>
                                <br>
                                </div>
                            </form> 
                            <br>
                                <form method="post" action="<?php echo site_url("institute/Resources/updResourceurl/$linfo->resourceid/$classid"); ?>" enctype="multipart/form-data"  id="contactform" 
                                class="row">
                                <div class="col-md-12">

                                <b>update Resource</b>
                                <br>
                                <br>

                                <b>Choose Resource Type</b>&nbsp;:=&nbsp;
                                Video &nbsp;&nbsp;<input type="radio" name="type" value="0" <?php if ($linfo->resourcetype == 0) echo 'checked="checked"'; ?> >
                                &nbsp;&nbsp;
                                Pdf &nbsp;&nbsp;<input type="radio" name="type" id="name" value="1" <?php if ($linfo->resourcetype == 1) echo 'checked="checked"'; ?>>
                                &nbsp;&nbsp;
                                document &nbsp;&nbsp;<input type="radio" name="type" id="name" value="2" <?php if ($linfo->resourcetype == 2) echo 'checked="checked"'; ?>>
                                &nbsp;&nbsp;
                                excel &nbsp;&nbsp;<input type="radio" name="type" id="name" value="3" <?php if ($linfo->resourcetype == 3) echo 'checked="checked"'; ?>>
                                &nbsp;&nbsp;
                                text &nbsp;&nbsp;<input type="radio" name="type" id="name" value="5" <?php if ($linfo->resourcetype == 5) echo 'checked="checked"'; ?>>
                                &nbsp;&nbsp;
                                other &nbsp;&nbsp;<input type="radio" name="type" id="name" value="6" <?php if ($linfo->resourcetype == 6) echo 'checked="checked"'; ?>>
                                &nbsp;&nbsp;
                                Announcement &nbsp;&nbsp;<input type="radio" name="type" id="name" value="7" <?php if ($linfo->resourcetype == 7) echo 'checked="checked"'; ?>>
                                &nbsp;&nbsp;    
                                <input type="file" name="rimg" class="form-control">
                                <button type="submit" value="SEND" id="submit" class="btn btn-primary"> Apply changes</button>
                                </div>
                            </form> 
                        </div>
                    </div>
          </div>
    </div>
<?php include_once("footer.php") ?>
        <div class="logo-wrapper background-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="site-logo">
                            <a class="navbar-brand"><b>E</b><span>Course</span>
                            <small>Learning Management System</small>
                            </a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-8 text-right hidden-xs">
                        <div class="postpager">
                            <ul class="pager row-fluid">
                                <li class="col-md-4 col-sm-4 col-xs-12">
                                    
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-12">
                                      
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-12">
                                  
                                </li>
                            </ul>   
                        </div><!-- end postpager -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end logo-wrapper -->
    <?php include_once("bottombar.php") ?><!-- end topbar -->
    </div><!-- end wrapper -->

    <div class="dmtop">Scroll to Top</div>
    <!-- END SITE -->
<?php include_once("bottomscript.php") ?>
</body>

<!-- Mirrored from showwp.com/demos/teachme/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:14:34 GMT -->
</html>