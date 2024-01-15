<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:13:07 GMT -->
<head>
    <title>Ecourse | Single class overview</title>
    <?php include_once("topscript.php") ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
                    <div class="col-md-12 col-sm-12">
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

<?php 
include_once("header.php");
?>
            <section class="section paralbackground banner" style="background-image:url('<?php echo base_url("resources/institute/upload/pagebanner_02.jpg")?>');" data-img-width="2400" data-img-height="907" data-diff="100">

            <div class="overlay"></div>
        </section><!-- end section -->

        <div class="page-title bgg">
            <div class="container clearfix">
                <div class="title-area pull-left">
                    <h2> Single Class</h2>
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
   <!--     <div class="sidebar">
            <header>Navtigation</header>
                <a href="">Overview</a>
                <a href="">Lectures</a>
            </ul>
        </div>-->
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
                                         <li  class="active"><a href="<?php echo site_url("user/Classes/loadoverview/$classid") ?>">Overview</a></li>
                                        <li><a href="" style="cursor:not-allowed;">Lectures List</a></li>
                                        <?php 
                                            foreach ($res as $r) {
                                      if($r->resourcetype == "0" || $r->resourcetype=="1" || $r->resourcetype == "5")
                                                {
                                        ?>
                                         <li><a href="<?php echo site_url("user/Classes/loadsingleresource/$r->classid/$r->resourceid") ?>"><?php echo $r->resourcetitle ?></a></li>
                                        
                                        <?php  
                                    }
                                    elseif($r->resourcetype != "7"){
                                        ?>
                                        <li><a href="<?php echo base_url("resources/shared/instituteother/$r->resourceurl")?>"><?php echo $r->resourcetitle ?>
                                            <i class="fa fa-download"></i></a></li>
                                        <?php
                                    }
                                        }
                                        ?>
                                    </ul><!-- end ul -->
                                    <hr>
                                </div><!-- end team-desc -->
                            </div><!-- end team-member -->
                        </div>
                    </div><!-- end right -->
                    <div class="col-md-9">
                    <div class="course-table clearfix">
                            <div class="big-title">
                                <h2 class="related-title">
                                    <span>Class Overview</span>
                                </h2>
                            </div><!-- end big-title -->
                                
                                        <?php
                                        foreach ($res as $l1)
                                        {
                                            if($l1->resourcetype==0)
                                            {
                                               ?>
                                               <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Lesson Title</th>
                                            <th class="hidden-xs">Preview</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <tr>
                                                  <td><i class="fa fa-play-circle"></i></td>
                                                  <td ><a href="<?php echo site_url("user/Classes/loadsingleresource/$l1->classid/$l1->resourceid") ?>"><?php echo $l1->resourcetitle; ?></a></td>
                                                  <td  class="hidden-xs">
                                                    <video  width="300px" style="line-height:200px" controls>
                                                      <source src="<?php echo base_url("resources/shared/institutevideo/$l1->resourceurl");?>" type="video/mp4">
                                                    </video>
                                                  </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                                <?php
                                            }
                                            else if($l1->resourcetype==1)
                                            {
                                               ?>
                                               <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Lesson Title</th>
                                            <th class="hidden-xs">Preview</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <tr>
                                                  <td><i class="fa fa-file"></i></td>
                                                  <td><a href="<?php echo site_url("user/Classes/loadsingleresource/$l1->classid/$l1->resourceid") ?>"><?php echo $l1->resourcetitle; ?></a></td>
                                                  <td><embed src="<?php echo base_url("resources/shared/institutepdf/$l1->resourceurl"); ?>"  type="application/pdf"width="300px" style="line-height:200px" controls/></td>

                                                </tr>
                                            </tbody>
                                        </table>
                                                <?php
                                            }
                                    else if($l1->resourcetype==2)
                                            {
                                               ?>
                                               <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Lesson Title</th>
                                            <th>Taks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <tr>
                                                  <td><i class="fa fa-file"></i></td>
                                                  <td><a href="<?php echo base_url("resources/shared/institutedocument/$l1->resourceurl")?>"><?php echo $l1->resourcetitle; ?></a></td>
                                                  </td>
                                                  <td>
                                                      
                                                   <label><p> <input type="radio" name="" checked>Reading</p></label>

                                                  </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                   <label><p> <input type="radio" name="" checked>Download</p></label>
                                                  </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                                <?php
                                            }

                                              else if($l1->resourcetype==5)
                                            {
                                               ?>
                                               <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Lesson Title</th>
                                            <th>Task</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <tr>
                                                  <td><i class="fa fa-file"></i></td>
                                                  <td><a href="<?php echo site_url("user/Classes/loadsingleresource/$l1->classid/$l1->resourceid") ?>"><?php echo $l1->resourcetitle; ?></a></td>
                                                  <td>
                                                    <label><p> <input type="radio" name="" checked>Reading </p></label>
                                                  </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                                <?php
                                            }
                                  else if($l1->resourcetype==6)
                                            {
                                               ?>
                                               <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Lesson Title</th>
                                            <th>Taks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <tr>
                                                  <td><i class="fa fa-file"></i></td>
                                                  <td><a href="<?php echo base_url("resources/shared/instituteother/$l1->resourceurl")?>"><?php echo $l1->resourcetitle; ?></a></td>
                                                  </td>
                                                  <td>
                                                      
                                                   <label><p> <input type="radio" name="" checked>download</p></label>

                                                  </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                   <label><p> <input type="radio" name="" checked>Reading</p></label>
                                                  </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                                <?php
                                            }
                                    
                                              else if($l1->resourcetype==7)
                                            {
                                               ?>
                                               <table class="table">
                                    <thead>
                                        <th>Announcement</th>
                                    </thead>
                                    <tbody>
                                                <tr>
                                                    <td>
                                  <marquee behavior="scroll" direction="up" onmouseover="this.start();" onmouseout="this.stop();">
                                          <p style="height:250px">
                                <?php 
                                            $obj = fopen(base_url("resources/shared/instituteannouncement/$l1->resourceurl"), "r");
                                            while(!feof($obj))
                                            {
                                                $line = fgets($obj);
                                                echo $line;
                                                echo "<br />";
                                            }
                                
                                ?>
                                </p>
                              </marquee>
                                                    </td>
 
                                            </tr>
                                        </tbody>
                                    </table>
                                                    <?php 
                                                }
                                                    else if($l1->resourcetype==3)
                                            {
                                               ?>
                                               <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Lesson Title</th>
                                            <th>Task</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <tr>
                                                  <td><i class="fa fa-file"></i></td>
                                                  <td><a href="<?php echo base_url("resources/shared/instituteother/$l1->resourceurl")?>"><?php echo $l1->resourcetitle; ?></td>
                                                  <td>
                                                   <label><p> <input type="radio" name="" checked>Reading </p></label>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td></td>
                                                  <td></td>
                                                  <td> <label><p> <input type="radio" name="" checked>Download </p></label>
                                                  </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                                <?php
                                            }
                                        }
                                        ?> 
                        </div><!-- end course-table -->
                    </div>
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
    </style>
 
<?php include_once("bottomscript.php") ?>
<!--<style type="text/css">
    
    .sidebar{
        position:absolute;
        width:240px;height:auto;
        background:white;
    }
    .sidebar header{
        color:black;
        font-size:28px;
        line-height:50px;
        text-align:center;
        background:grey;
        user-select:none;
        font-family:'Monserrat',sans-serif;
    }
    .sidebar a{
        display:block;
        color:black;
        height:65px;
        width:100%;
        line-height:65px;
        padding-left:30px;
        border-bottom:1px solid black;
        border-top:1px solid black;
        border-left:5px solid blue;
        box-sizing:border-box;
        font-family:'open Sans',sans-serif; 
    }
</style>
-->
</body>

<!-- Mirrored from showwp.com/demos/teachme/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:14:34 GMT -->
</html>




<!--//aa document mate ne badha mate 6 aa use karje display mate --> 
<!-- <object data="pic_trulli.jpg" width="300" height="200"></object> -->