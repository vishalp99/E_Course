<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/page-became-member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 16:13:52 GMT -->
<head>
    <title>Ecourse | Add Faculty</title>
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
                            <a class="navbar-brand" ><b>E</b><span>Course</span>
                            <small>Learning Management System</small>
                            </a>
                        </div>
                    </div><!-- end col -->

              <!-- end col -->
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
                    <h2>Faculty Registration Form</h2>
                </div><!-- /.pull-right -->
                <div class="pull-right hidden-xs">
                    <div class="bread">
                        <ol class="breadcrumb">
                          
                        </ol>
                    </div><!-- end bread -->
                </div><!-- /.pull-right -->
            </div>
        </div><!-- end page-title -->

        <div class="container">
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
                                       <li><a href="<?php echo site_url("institute/Manageprofile/editinsprofile") ?>"> Institute Profile</a></li>
                                       <li><a href="<?php echo site_url("institute/Crtclass/loadallclass") ?>">Classes</a></li>
                                        <li><a href="<?php echo site_url("institute/Crtclass")?>">create class</a></li>
                                        <li class="active"><a href="<?php echo site_url("institute/InsLogin/loadReg/")?>">Register user</a></li>
                                        <li><a href="<?php echo site_url("institute/InsLogin/loadusers/")?>">All users</a></li>
                                        <li><a href="<?php echo site_url("institute/InsLogin/loadstudents/")?>">All Students</a></li>
                                    </ul><!-- end ul -l -->
                                    <hr>
                                </div><!-- end team-desc -->
                            </div><!-- end team-member -->
                        </div>
                    </div>
            <div class="loginform">

                   <!-- <h2 class="text-center" style="color: black;font-family: cursive;font-style: bold;text-decoration: underline; letter-spacing: 10px">User Registration </h2>
                -->
                <div class="section-title col-lg-6 col-lg-offset-2 adiv" style="color: black;">
               

                 <form action="<?php echo site_url('institute/InsLogin/registerUser') ?>"
                    class="row" method="post" enctype="multipart/form-data">
                    <div class="tab-content">
                                    <div class="tab-pane active" id="insregdetail">
                                      <div class="panel panel-primary">
                                        <div class="panel-heading">Register Details</div>
                                          <div class="panel-body">
                          <!--   <select class="form-control" id="month" name="txtInsID" >
                               <option value="-1">Select Institute</option>
                                 <?php
                           
                                     foreach ($institute as $i) {
                                   ?> 
                               <option value="<?php echo $i->instituteid ?>"><?php echo $i->institutename ?></option>
                                  <?php
                                  }
                                  ?>   
                             </select>--> 
                                    <span><small id="result1" style="color:red"></small>
                                    <input type="text" name="txtUname" class="form-control" placeholder="Username" id="txtUname"></span> 
                                    <span><small id="result2" style="color:red"></small>
                                    <input type="Password" name="txtPwd" class="form-control" placeholder="Password" id="txtPwd"></span> 
                                    <span><small id="result3" style="color:red"></small>
                                    <input type="email" name="txtEmail" class="form-control" placeholder="Email" id="txtEmail"></span> 
                                    <span><small id="result4" style="color:red"></small>
                                    <input type="text" name="txtNo" class="form-control" placeholder="Mobile No" id="txtNo"></span>
                                    <span><small id="result5" style="color:red"></small>
                                      <label disabled>Profile picture</label>
                                      <small>Recommended size 996x996</small>
                                    <input type="file" name="fup" class="form-control" id="fup">
                                  </span>
                                    <!--<input type="text" rows="5" name="txtDesc" class="form-control" placeholder="Description">
                                    <input type="text" name="txtName" class="form-control" placeholder="Enter your full name">-->
                                    <div class="col-lg-3">
                                      <span><small id="result6" style="color:red"></small></span>
                                      Assign AS
                                    </div>
                                    <div class="col-lg-4  col-lg-offset-1">
                                      super user<input  style="width:20px" type="radio" name="txtLevel[]" class="form-control" id="txtLevel" value="1" placeholder="Enter your Level"></div>
                                      <div class="col-lg-4s col-lg-offset-1">
                                    faculty user<input style="width:20px" type="radio" name="txtLevel[]" class="form-control" value="2" id="txtLevel" placeholder="Enter your Level"></div>
                                   <!--  <a href="<?php echo site_url('institute/InsLogin/validateLogin') ?>">Already Have an Account?,Login here</a> -->
                                  </span>
                                    <button type="submit" value="SEND" class="button button--wayra btn-block btn-square btn-lg" id="btnreg"> Register Now</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                                </form>
                                </div> 
                            </div>     
                      </div>
  </div><!-- end wrapper -->
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
  <?php include_once("bottombar.php") ?>
<style type="text/css">
  
  body{
  }
  .adiv input{
    border:3px solid;
  }
  .adiv select{
    border:3px solid;
    
  }
</style>
    <script>
        $(document).ready(function(){
      function load_sudata(query)
  {
     $.ajax({
      url:"<?php echo site_url("institute/InsLogin/checkusername") ?>",
      method:"post",
      data:{query:query},
      success:function(data){
        document.getElementById("result1").innerHTML=data;
      }
      });
  }
  $('#txtUname').keyup(function(){
   var search=$(this).val();
   if(search != '')
   {
    load_sudata(search);
   }
   else
   {
    load_sudata();
   }

  });

  function load_sudata2(query)
  {
     $.ajax({
      url:"<?php echo site_url("institute/InsLogin/checkmail") ?>",
      method:"post",
      data:{query:query},
      success:function(data){
        document.getElementById("result3").innerHTML=data;
      }
      });
  }
  $('#txtEmail').keyup(function(){
   var search=$(this).val();
   if(search != '')
   {
    load_sudata2(search);
   }
   else
   {
    load_sudata2();
   }
  });
  function load_sudata3(query)
  {
     $.ajax({
      url:"<?php echo site_url("institute/InsLogin/checkmno") ?>",
      method:"post",
      data:{query:query},
      success:function(data){
        document.getElementById("result4").innerHTML=data;
      }
      });
  }
  $('#txtNo').keyup(function(){
   var search=$(this).val();
   if(search != '')
   {
    load_sudata3(search);
   }
   else
   {
    load_sudata3();
   }

  });  

 $('#btnreg').click(function(){
var r1=$('#txtUname').val();
var r2=$('#txtPwd').val();
var r3=$('#txtEmail').val();
var r4=$('#txtNo').val();
var r5=$('#txtLevel').val();
var r6=$('#fup').val();

if(r1=="")
{
  document.getElementById("result1").innerHTML="*";
}
if(r2=="")
{
  document.getElementById("result2").innerHTML="*";
}
else{
  document.getElementById("result2").innerHTML="";  
}
if(r3=="")
{
  document.getElementById("result3").innerHTML="*";
}
if(r4=="")
{
  document.getElementById("result4").innerHTML="*";
}
if(r5=="")
{
  document.getElementById("result6").innerHTML="*";
}
else{
  document.getElementById("result6").innerHTML="";  
}
if(r6=="")
{
  document.getElementById("result5").innerHTML="*";
}else{
  document.getElementById("result5").innerHTML="";

}

var u11=$('#result1').html();
var u12=$('#result2').html();
var u13=$('#result3').html();
var u14=$('#result4').html();
var u15=$('#result5').html();
var u16=$('#result6').html();

if(u11 == "" && u12 == "" && u13 == "" && u14 == "" && u15 == "" && u16 == "")
{
  return true;      
}
else{
  return false;
}

    });


});
    </script>

    <script src="<?php echo base_url('resources/institute/') ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url('resources/institute/') ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url('resources/institute/') ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/page-became-member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 16:13:52 GMT -->
</html>