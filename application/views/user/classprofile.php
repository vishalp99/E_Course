<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:30 GMT -->
<head>
    <title>Ecourse | single class Profile</title>
   <?php include_once("topscript.php") ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
                           <img src="<?php echo base_url('resources/institute/') ?>upload/member-cover.jpg" alt="" class="img-responsive">
                            <div class="lightoverlay overlay"></div>
                            <div class="authorbox">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="clearfix">
                                            <div class="avatar-author">
                                                <a>
                                                    <img alt="" src="<?php echo base_url('resources/shared/instituteimg/insclass/'.$clsinfo[0]->classimage) ?>" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="author-title desc">
                                                <h4><?php echo $clsinfo[0]->title; ?></h4>
                                                    <small><b>free</b></small>
                                        <ul class="list-inline social-small">
                                                    <?php 
                                                    $cnt=0;
                                                    foreach ($sinfo as $k) 
                                                    {
                                                if(isset($_SESSION['stid']))
                                                 {
                                                     if($k->studentid===$_SESSION['stid'])
                                                    {
                                                        $cnt++;

                                                        if($k->status==0)
                                                        {?>
                                                            <li><a class="btn btn-primary" style="cursor:not-allowed;">Already IN
                                                </a></li>
                                                 <li>
                                                        <p id="cpy" hidden><!--<?php echo "http://localhost/E_course/index.php/user/Classes/profilebyclassid/$clid"?>-->
                                                            <?php echo $clsinfo[0]->classlink ?>
                                                        </p>
                                                        <button id="btnsha"><i class="fa fa-share" style="color: blue"></i></button>
                                                        <span class="alert">copied</span>
                                                    </li>
                                                    <?php
                                                        }elseif($k->status== -1)
                                                        {
                                                        ?>
                                                        <li><a class="btn btn-primary" style="cursor:not-allowed;">Waiting 
                                                </a></li>
                                                 <li>
                                                        <p id="cpy" hidden><!--<?php echo "http://localhost/E_course/index.php/user/Classes/profilebyclassid/$clid"?>-->
                                                            <?php echo $clsinfo[0]->classlink ?>
                                                        </p>
                                                        <button id="btnsha"><i class="fa fa-share" style="color: blue"></i></button>
                                                        <span class="alert">copied</span>
                                                    </li>
                                                        <?php
                                                       }
                                                     else
                                                        {

                                                $clid=$clsinfo[0]->classid; 
                                                    if($k->status == 1)
                                                    {  
                                                        ?>
                                                                                                          
                                                    <li><a style="cursor:not-allowed;" class="btn btn-primary">Denied
                                                     </a></li>
                                                    <li>
                                                        <p id="cpy" hidden><!--<?php echo "http://localhost/E_course/index.php/user/Classes/profilebyclassid/$clid"?>-->
                                                            <?php echo $clsinfo[0]->classlink ?>
                                                        </p>
                                                        <button id="btnsha"><i class="fa fa-share" style="color: blue"></i></button>
                                                        <span class="alert">copied</span>
                                                    </li>
                                                        <?php
                                                       }
                                                     }
                                                       }
                                                        
                                                         
                                                    }
                                                        }
                                                           if($cnt == 0)
                                                        {

                                                $clid=$clsinfo[0]->classid;
                                                    ?>
                                                    <li><a href="<?php echo site_url("user/Classes/enrollclass/$clid") ?>" class="btn btn-primary">Enroll now
                                                     </a></li>
                                                    <li>
                                                        <p id="cpy" hidden><!--<?php echo "http://localhost/E_course/index.php/user/Classes/profilebyclassid/$clid"?>-->
                                                            <?php echo $clsinfo[0]->classlink ?>
                                                        </p>
                                                        <button id="btnsha"><i class="fa fa-share" style="color: blue"></i></button>
                                                        <span class="alert">copied</span>
                                                    </li>
                                                    <?php 
                                                    }      
                                                    ?>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end authorbox -->
                        </div><!-- end cover -->
                    </div>

                    <div id="sidebar1" class="col-lg-7 col-lg-offset-1 col-md-12 col-sm-12 custom-form clearfix">
                        <div class="widget clearfix">
                            <div class="member-profile">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>About Class</span>            
                                        </h2>
                                    </div>
                                    <div class="row">
                                                             <?php echo $clsinfo[0]->description; ?>
                                </div>
                                <hr>
                             <div class="single-content comment-wrapper custom-form clearfix">
                            <div class="related-posts">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Class Details</span>
                                    </h2>
                                </div><!-- end big-title -->
                                        <ul>
                                            <li>
                                                <div><label disabled>Institute</label></div>
                                                <div>&nbsp;<?php echo $clsinfo[0]->institutename ?></div>
                                            </li>
                                            <hr>
                                            <li>
                                                <div><label disabled>Instructor</label></div>
                                                <div>
                                                    <?php 
                                                    foreach ($inusr as $k) {
                                                        if($k->level == "2")
                                                        {
                                                    ?>
                                                    <p>&nbsp;<?php echo $k->fullname ?></p>

                                                    <?php
                                                    } 
                                                        }
                                                    ?>
                                                </div>
                                            </li>
                                            <hr>
                                            <li>
                                                <div><label disabled>Class Code</label></div>
                                                <div>
                                                    <p>&nbsp;<?php echo $clsinfo[0]->classcode ?></p>
                                                </div>
                                            </li>
                                            <hr>
                                            <li>
                                                <div><label disabled>Institute Site</label>

                                                    <label disabled style="margin-left:20px;">Location</label>
                                                </div>
                                                <div>
                                                        <ul class="list-inline social-small">
                                                    <li><a href="<?php echo $clsinfo[0]->website ?>" target="_blank"><i class="fa fa-globe" style="color:blue"></i></a></li>
                                                <li style="margin-left:70px;"><a href="<?php echo $clsinfo[0]->googlemapurl ?>" target="_blank"><i class="fa fa-map-marker" style="background-color:white;color:black"></i></a></li>
                                                </ul>
                                                </div>
                                            </li>
                                            <hr>
                                            <li>
                                                <div><label disabled>Followe Institute</label>
                                                    <div>
                                                         <ul class="list-inline social-small">
                                                    <li><a href="<?php echo $clsinfo[0]->fblink ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="<?php echo $clsinfo[0]->twitterlink ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="<?php echo $clsinfo[0]->instalink ?>" target="_blank"><i class="fa fa-instagram" style="background-color:pink"></i></a></li>
                                                    <li><a href="<?php echo $clsinfo[0]->linkedinlink ?>" target="_blank"><i class="fa fa-linkedin" style="background-color:blue"></i></a></li>
                                                    <li><a href="<?php echo $clsinfo[0]->youtubelink ?>" target="_blank"><i class="fa fa-youtube" style="background-color:red"></i></a></li>
                                                </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    <div id="sidebar2" class="col-lg-4 col-lg-offset-0.5 col-md-12 col-sm-12  custom-form clearfix">
                        <div class="widget clearfix">
                            <div class="member-profile">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Class Lectures</span>            
                                        </h2>
                                         <table class="table">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Lesson Title</th>
                                    </tr>
                                </thead>
                               <tbody>
                                        <?php
                                        foreach ($rinfo as $l1) {

                                            if($l1->resourcetype==0)
                                            {
                                               ?>
                                                <tr>
                                                  <td><i class="fa fa-play-circle"></i></td>
                                                  <td ><?php echo $l1->resourcetitle; ?></td>
                                                
                                                </tr>
                                                <?php
                                            }
                                            else if($l1->resourcetype==1)
                                            {
                                               ?>
                                                <tr>
                                                  <td><i class="fa fa-file"></i></td>
                                                  <td><?php echo $l1->resourcetitle; ?></td>
                                                
                                                </tr>
                                                <?php
                                            }
                                    else if($l1->resourcetype==2)
                                            {
                                               ?>
                                                <tr>
                                                  <td><i class="fa fa-file"></i></td>
                                                  <td><?php echo $l1->resourcetitle; ?></a>
                                                </tr>
                                                <?php
                                            }
                                             else if($l1->resourcetype==5)
                                            {
                                               ?>
                                                <tr>
                                                  <td><i class="fa fa-file"></i></td>
                                                  <td><?php echo $l1->resourcetitle; ?></td>
                                                </tr>
                                                <?php
                                            }
                                     else if($l1->resourcetype==6)
                                            {
                                               ?>
                                                <tr>
                                                  <td><i class="fa fa-file"></i></td>
                                                  <td><?php echo $l1->resourcetitle; ?>&nbsp<i class="fa fa-download"></i></td>
                                                </tr>
                                                <?php
                                            }
                                   
                                        }
                                        ?>  
                                    </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            </div>
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
    <script>
     function copy(copyid)
     {
        var $in=$("<input>");
        $("body").append($in);
        $in.val($(""+copyid).text()).select();
        document.execCommand("copy");
        $in.remove();
        $(".alert").fadeIn(500,function(){
            $(".alert").fadeOut();
        });
     }
     $(document).ready(function(){
          $(".alert").fadeOut();  
        $("#btnsha").click(function(){
            copy('#cpy');
        });
     });
    </script>
    <style type="text/css">
        tr{
            height:80px;
        }
        table{
            font-size:20px;
        }
    </style>
    <script src="<?php echo base_url("resources/user/") ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("resources/user/") ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url("resources/user/") ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:31 GMT -->
</html>