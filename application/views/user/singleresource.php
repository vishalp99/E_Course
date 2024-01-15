<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from showwp.com/demos/teachme/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:13:07 GMT -->
<head>

    <title>Ecourse | Single Lecture</title>
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
                    <h2><?php echo $linfo->resourcetitle ?></h2>
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
    
        <section class="section bgw">
            <div class="container">
                <div class="row">
                    <div id="post-content" class="col-md-8 col-sm-12 single-course">
                            <?php 
                            if($linfo->resourcetype==0)
                            {
                            ?>
                        <div class="post-media clearfix">
                        
                            <video class="videoplayer" controls controlsList="nodownload" preload="none" poster="upload/video.jpg" style="background-image: url('<?php echo base_url('resources/institute/') ?>upload/video.jpg'); width: 100%; height: 100%;background-size: cover;">
                                <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
                                <source type="video/mp4" src="<?php echo base_url("resources/shared/institutevideo/$linfo->resourceurl");?>" />
                            </video>
                                                                    </div><!-- end media -->

                            <?php 
                        }
                        else if($linfo->resourcetype==1)
                        {
                            ?>
                            <div class="post-media clearfix">                        
                            <object data="<?php echo base_url("resources/shared/institutepdf/$linfo->resourceurl"); ?>"  id=viewpdf></object>
                    </div>
                           <?php 
                        }
                        else if($linfo->resourcetype==5)
                        {
                            ?>
                         <div class="post-media clearfix">              
                            <p>
                                <?php 
                                            $obj = fopen(base_url("resources/shared/institutetext/$linfo->resourceurl"), "r");
                                            while(!feof($obj))
                                            {
                                                $line = fgets($obj);
                                                echo $line;
                                                echo "<br />";
                                            }
                                
                                ?>
                                </p>
                    </div>
                        <?php 
                    }
                        ?>
                        <hr class="invis">

                  
                                <?php 
                                if($linfo->resourcedescription != "")
                                {
                                ?>
                                  <div class="course-single-desc clearfix">
                            <div class="big-title">
                                <h2 class="related-title">
                                    <span>Lesson Description</span>
                                </h2>
                            </div><!-- end big-title -->
                            <p><?php echo $linfo->resourcedescription; ?>.</p>
                            
                        </div><!-- end post-padding -->
                            <?php 
                        }   
                            ?>
                        <hr class="invis1">
                      <div class="single-content comment-wrapper clearfix">
                            <div class="related-posts">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span> Students Question</span>
                                    </h2>
                                </div><!-- end big-title -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-body comments">
                                                <ul class="media-list">
                                                    <?php 
                                                    foreach ($qinfo as $q) {
                                                        if($q->status==0)
                                                        {
                                                    ?>
                                                    <h4>Question</h4>
                                                    <li class="media">
                                                        <div class="comment">
                                                            <a href="<?php echo site_url("user/Manageprofile/otherstudentprofile/$q->studentid") ?>" class="pull-left">
                                                                <img src="<?php echo base_url("resources/shared/images/$q->profilepic")?>" alt="" class="img-circle" height="100px">
                                                            </a>
                                                            <div class="media-body">
                                                                <strong class="text-success"><?php echo $q->username; ?></strong>
                                                                <span class="text-muted">
                                                                <small class="text-muted"><?php echo $q->createddt ?></small></span>
                                                                <p style="color:blue">
                                                                    <?php 
                                                                    echo $q->question;
                                                                    ?>
                                                                </p>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    
                                                    <h3>Answers</h3>
                                                    <?php 
                                                    foreach ($ansinfo as $a) {
                                                        if($a->questionid==$q->questionid)
                                                        {
                                                    ?>
                                                   <ul class="media-list">
                                                    <li class="media">
                                                        <div class="comment">
                                                            <a href="#" class="pull-left">
                                                                <img src="<?php echo base_url("resources/shared/instituteimg/insuser/$a->profilepic")?>" alt="" class="img-circle" height="100px">
                                                            </a>
                                                            <div class="media-body">
                                                                <strong class="text-success">
                                                                    <?php echo $a->username; ?></strong>
                                                                <span class="text-muted">
                                                                <small class="text-muted"><?php echo $a->createddt ?></small></span>
                                                                <p>
                                                                    <?php 
                                                                    echo $a->answer;
                                                                    ?>
                                                                </p>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </li>
                                                   <?php 
                                                    }
                                                }
                                                   ?>
                                                     <?php 
                                                    foreach ($msg as $m) {
                                                        if($m->questionid==$q->questionid)
                                                        {
                                                            if($m->status=="0")
                                                            {
                                                    ?>
                                                    <li class="media">
                                                        <div class="comment">
                                                            <a href="<?php echo site_url("user/Manageprofile/otherstudentprofile/$m->studentid") ?>" class="pull-left">
                                                                <img src="<?php echo base_url("resources/shared/images/$m->profilepic")?>" alt="" class="img-circle" height="100px">
                                                            </a>
                                                            <div class="media-body">
                                                                <strong class="text-success"><?php echo $m->username ?></strong>
                                                                <span class="text-muted">
                                                                <small class="text-muted"><?php echo $m->createddt ?></small></span>
                                                                <p>
                                                                    <?php 
                                                                    echo $m->message;
                                                                    ?>
                                                                </p>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </li>
                                                    <?php 
                                                }
                                                    }
                                                }
                                                    ?>
                                                       <div class="single-content comment-wrapper">
           <!--                 <div class="fade" id="leave_ans">-->
                            <div class="clearfix">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Leave a answer</span>
                                    </h2>
                                </div><!-- end big-title -->
                                <div class="contact_form">
                                    <form class="row" method="post" action="<?php echo site_url("user/Classes/addmsg/$q->questionid/$linfo->classid/$linfo->resourceid") ?>">
                                        <div class="col-md-12 col-sm-12">
                                            <textarea class="form-control" placeholder="Answer goes here" name="txtans"></textarea>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <input type="submit" value="Send Comment" class="btn btn-primary" />
                                        </div>
                                    </form>
                                </div><!-- end commentform -->
                            </div><!-- end postpager -->
                       <!-- </div>--></ul>
                        <hr>
 
                                                    <?php 
                                                    }
                                                }
                                                    ?>
                               <div class="single-content comment-wrapper">
           <!--                 <div class="fade" id="leave_ans">-->
                            <div class="clearfix">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Leave a Question</span>
                                    </h2>
                                </div><!-- end big-title -->

                                <div class="contact_form">
                                    <form class="row" method="post" action="<?php echo site_url("user/Classes/addquestion/$linfo->classid/$linfo->resourceid"   ) ?>">
                                        <div class="col-md-12 col-sm-12">
                                            <textarea class="form-control" placeholder="Answer goes here" name="txtques"></textarea>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <input type="submit" value="Send Comment" class="btn btn-primary" />
                                        </div>
                                    </form>
                                </div><!-- end commentform -->
                            </div><!-- end postpager -->
                       </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end postpager -->
                        </div><!-- end content -->
                    </div><!-- end col -->
                      <div id="sidebar" class="col-md-4 col-sm-12">
                     <div class="course-table clearfix">
                            <div class="big-title">
                                <h2 class="related-title">
                                    <span>Class Lessons</span>
                                </h2>
                            </div><!-- end big-title -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Lesson Title</th>
                                    </tr>
                                </thead>
                               <tbody>
                                        <?php
                                        foreach ($res as $l1) {

                                            if($l1->resourcetype=="0")
                                            {
                                               ?>
                                                <tr>
                                                  <td><i class="fa fa-play-circle"></i></td>
                                                  <td ><a href="<?php echo site_url("user/Classes/loadsingleresource/$l1->classid/$l1->resourceid") ?>"><?php echo $l1->resourcetitle; ?></a></td>
                                                
                                                </tr>
                                                <?php
                                            }
                                            elseif ($l1->resourcetype == "1" || $l1->resourcetype=="5") {
                                                ?>
                                             <tr>
                                                  <td><i class="fa fa-file"></i></td>
                                                  <td ><a href="<?php echo site_url("user/Classes/loadsingleresource/$l1->classid/$l1->resourceid") ?>"><?php echo $l1->resourcetitle; ?></a></td>
                                                
                                                </tr>
                                                   
                                                <?php
                                            }
                                             else if($l1->resourcetype != "7"){
                                        ?>
                                        <tr>
                                            <td><i class="fa fa-file"></td>
                                            <td>
                                        <a href="<?php echo base_url("resources/shared/instituteother/$l1->resourceurl")?>"><?php echo $l1->resourcetitle ?>
                                            <i class="fa fa-download"></i></a>
                                        </td>
                                        <?php
                                    }
                                   
                                        }
                                        ?>  
                                    </tbody>
                            </table>
                        </div><!-- end course-table -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

      
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
<style type="text/css">
    #viewpdf{

        width:100%;
        height:500px;
    }
</style>
</body>

<!-- Mirrored from showwp.ccom/demos/teachme/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:14:34 GMT -->
</html>




<!--//aa document mate ne badha mate 6 aa use karje display mate --> 
<!-- <object data="pic_trulli.jpg" width="300" height="200"></object> -->