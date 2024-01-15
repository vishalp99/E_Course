<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/page-became-member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 16:13:52 GMT -->
<head>

    <title>Ecourse | Institute Sign up</title>
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
    <!--<div id="wrapper">-->
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
                <div class="section-title text-center">
                    
                    <h2 style="color:black;font-family: cursive;font-style: bold;text-decoration: underline; letter-spacing: 10px">Institute Registration</h2>
                </div><!-- end section-title -->


            <div class="container col-lg-4 col-lg-offset-4 col-md-12">
                            <div class="loginform">
                                <form action="<?php echo site_url('institute/Institutereg/addins') ?>" class="row" method="post" enctype="multipart/form-data">
                                  <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                      <a class="nav-link active_tab1" id="ins_reg" style="border:1px solid #ccc;">Institute Details</a>
                                    </li>

                                    <li class="nav-item"  id="suser_reg" style="border:1px solid #ccc;">
                                      <a class="nav-link inactive_tab1">Super-user</a>
                                    </li>

                                    <li class="nav-item"  id="suser_otp" style="border:1px solid #ccc;">
                                      <a class="nav-link inactive_tab1">Verification</a>
                                    </li>
                                  </ul>

                                  <div class="tab-content">
                                    <div class="tab-pane active" id="insregdetail">
                                      <div class="panel panel-primary">
                                        <div class="panel-heading">Register Details</div>
                                          <div class="panel-body">
                                            <div class="form-group">
                                    <span><small id="result1" style="color:red"></small>
                                    <input type="text" name="txtiname" class="form-control" placeholder="institute name" id="txtiname">
                                    </span> 
                                    <span><small id="result2" style="color:red"></small>
                                    <input type="email" name="txtmail" class="form-control" placeholder="Email ID" id="txtmail">
                                    </span> 
                                    <!--<input type="text" name="txtdesc" class="form-control" placeholder="description">-->
                                    <span><small id="result3" style="color:red"></small>
                                    <label>Cover picture</label>
                                    <input type="file" name="fup" class="form-control" id=fup> 
                                    </span>
                                    <span><small id="result4" style="color:red"></small>
                                    <input type="text" name="txtmno" class="form-control" placeholder="contact number" id="txtmno">
                                  </span>
                                    <select class="form-control" id="" name="state" onchange="loadcity(this.value)">
                                        <option value="-1">select State</option>
                                                        <?php
                                           foreach ($states as $s) {
                                         ?>
                                         <option value="<?php echo $s->stateid ?>"><?php echo $s->statename ?></option>
                                         <?php  
                                          }  
                                        ?>
                                    </select>
                                    <select class="form-control" id="city" name="txtcity">
                                        </select>
                                    <input type="textarea" rows="5" name="txtaddr" class="form-control" placeholder="Enter address">
                                    <button type="button" name="btn_ins_detail" id="btn_ins_detail" class="btn btn-info btn-lg">Next</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                                <div class="tab-panel fade" id="userdetail">
                                      <div class="panel panel-primary">
                                        <div class="panel-heading">Super User Details</div>
                                          <div class="panel-body">
                                            <div class="form-group">
                                              <span><small id="result11" style="color:red"></small>
                                     <input type="text" name="txtuname" class="form-control" placeholder="default user name" id="txtuname">
                                     </span>
                                     <span><small id="result12" style="color:red"></small> 
                                    <input type="email" name="txtumail" class="form-control" placeholder="Email ID" id="txtumail">
                                  </span>
                                  <span><small id="result13" style="color:red"></small>
                                    <input type="password" name="txtpwd" class="form-control" placeholder="password" id="txtpwd">
                                    </span>      
                                    <span><small id="result14" style="color:red"></small>
                                    <input type="text" name="txtcno" class="form-control" placeholder="contact no" id="txtcno">
                                  </span>
                                  <!--  <input type="text" name="txtudesc" class="form-control" placeholder="description">-->
                                    <button type="button" name="btn_user_detail" id="btn_user_detail" class="btn btn-info btn-lg">Previous</button>&nbsp<button type="button" name="btn_otp_detail" id="btn_otp_detail" class="btn btn-info btn-lg">Next</button>
                                    <br><br>
                               </div>
                              </div>
                            </div>
                          </div>
                 <div class="tab-panel fade" id="otpdetail">
                   <div class="panel panel-primary">
                       <div class="panel-heading">Enter OTP</div>
                            <div class="panel-body">
                               <div class="form-group">
                                  <label>OTP is send to your email</label>
                                <label id="ot" hidden></label>
                               <input type="text" name="txtotp" class="form-control" placeholder="Enter OTP" id="txtotp">
                                 
                                              <br><br>
                                    <button type="submit" value="SEND" class="button button--wayra btn-block btn-square btn-lg" id="btnreg"> Register Now</button>
                                </div>
                              </div>
                            </div>
                          </div>
                         </div>
                       </form> 
                       </div>
                     </div>
  <!--  </div>--><!-- end wrapper -->
    <?php include_once("bottombar.php") ?>
    <style type="text/css">
      body{
        color:black;
        text-align:center;
      }
      .row input{
        border:3px solid;
      }
      .row select{
        border:3px solid black;
      }
      .active_tab1{
        background-color:#fff;
        color:#333;
        font-weight:600;
      }
      .inactive_tab1{
        background-color:#f5f5f5;
        color:#333;
        cursor:not-allowed;
      }
    </style>
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

<script>
  $(document).ready(function(){
    $('#userdetail').hide();
    $('#otpdetail').hide();

     function load_data2(query)
  {
     $.ajax({
      url:"<?php echo site_url("institute/Institutereg/checkmail") ?>",
      method:"post",
      data:{query:query},
      success:function(data){
        document.getElementById("result2").innerHTML=data;
      }
      });
  }
  $('#txtmail').keyup(function(){
   var search=$(this).val();
   if(search != '')
   {
    load_data2(search);
   }
   else
   {
    load_data2();
   }
  });
  
  function load_data3(query)
  {
     $.ajax({
      url:"<?php echo site_url("institute/Institutereg/checkmno") ?>",
      method:"post",
      data:{query:query},
      success:function(data){
        document.getElementById("result4").innerHTML=data;
      }
      });
  }
  $('#txtmno').keyup(function(){
   var search=$(this).val();
   if(search != '')
   {
    load_data3(search);
   }
   else
   {
    load_data3();
   }

  });  


//superuser validation

function load_sudata(query)
  {
     $.ajax({
      url:"<?php echo site_url("institute/Institutereg/checksuperusername") ?>",
      method:"post",
      data:{query:query},
      success:function(data){
        document.getElementById("result11").innerHTML=data;
      }
      });
  }
  $('#txtuname').keyup(function(){
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
      url:"<?php echo site_url("institute/Institutereg/checksupermail") ?>",
      method:"post",
      data:{query:query},
      success:function(data){
        document.getElementById("result12").innerHTML=data;
      }
      });
  }
  $('#txtumail').keyup(function(){
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
      url:"<?php echo site_url("institute/Institutereg/checksupermno") ?>",
      method:"post",
      data:{query:query},
      success:function(data){
        document.getElementById("result14").innerHTML=data;
      }
      });
  }
  $('#txtcno').keyup(function(){
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


//button click events
    $('#btn_ins_detail').click(function(){
var r1=$('#txtiname').val();
var r2=$('#txtmail').val();
var r3=$('#txtmno').val();
var r4=$('#fup').val();

if(r1=="")
{
  document.getElementById("result1").innerHTML="*";
}
else{
  document.getElementById("result1").innerHTML="";  
}
if(r2=="")
{
  document.getElementById("result2").innerHTML="*";
}
if(r3=="")
{
  document.getElementById("result4").innerHTML="*";
}
if(r4=="")
{
  document.getElementById("result3").innerHTML="*";
}
else{
    document.getElementById("result3").innerHTML="";
}

var u1=$('#result2').html();
var u2=$('#result4').html();
var u3=$('#result1').html();
var u4=$('#result3').html();

if(u1 == "" && u2 == "" && u3 == "" && u4 == "")
{

      $('#userdetail').show();
      $('#ins_reg').removeClass('active active_tab1');
      $('#ins_reg').removeAttr('href data-toggle');
      $('#insregdetail').removeClass('active');
      $('#ins_reg').addClass('inactive_tab1');
      $('#suser_reg').removeClass('inactive_tab1');
      $('#suser_reg').addClass('active_tab1 active');
      $('#suser_reg').attr('href','#userdetail');
      $('#suser_reg').attr('data-toggle','tab');
      $('#userdetail').addClass('active in');
}
else{
  return false;
}

    });


   $('#btn_otp_detail').click(function(){
var r11=$('#txtuname').val();
var r12=$('#txtumail').val();
var r13=$('#txtpwd').val();
var r14=$('#txtcno').val();

if(r11=="")
{
  document.getElementById("result11").innerHTML="*";
}
if(r12=="")
{
  document.getElementById("result12").innerHTML="*";
}
if(r13=="")
{
  document.getElementById("result13").innerHTML="*";
}
else{
  document.getElementById("result13").innerHTML="";  
}
if(r14=="")
{
  document.getElementById("result14").innerHTML="*";
}

var u11=$('#result11').html();
var u12=$('#result12').html();
var u13=$('#result13').html();
var u14=$('#result14').html();

if(u11 == "" && u12 == "" && u13 == "" && u14 == "")
{
     $('#userdetail').hide();
     $('#insregdetail').hide();
     $('#otpdetail').show();
      $('#suser_reg').removeClass('active active_tab1');
      $('#suser_reg').removeAttr('href data-toggle');
      $('#userdetail').removeClass('active in');
      $('#suser_reg').addClass('inactive_tab1');
      $('#suser_otp').removeClass('inactive_tab1');
      $('#suser_otp').addClass('active_tab1 active');
      $('#suser_otp').attr('href','#otpdetail');
      $('#suser_otp').attr('data-toggle','tab');
      $('#otpdetail').addClass('active in');
    
      var otmail=$('#txtumail').val();
    $.ajax({
      url:"<?php echo site_url("institute/Institutereg/sendotp") ?>",
      method:"post",
      data:{otmail:otmail},
      success:function(data){
        document.getElementById("ot").innerHTML= data;
      }
      });   
}
else{
  return false;
}

  });
   $('#btnreg').click(function(){
    var a1=$('#ot').html();
    var a2=$('#txtotp').val();

    if(a1 == md5(a2))
    {
      return true;
    }
    else{
      return false;
    }

   });

    $('#btn_user_detail').click(function(){
        $('#userdetail').hide();
      $('#suser_reg').removeClass('active active_tab1');
      $('#suser_reg').removeAttr('href data-toggle');
      $('#userdetail').removeClass('active in');
      $('#suser_reg').addClass('inactive_tab1');
      $('#ins_reg').removeClass('inactive_tab1');
      $('#ins_reg').addClass('active_tab1 active');
      $('#ins_reg').attr('href','#insregdetail');
      $('#ins_reg').attr('data-toggle','tab');
      $('#insregdetail').addClass('active in');
    
    });
 });
</script>
    <script src="<?php echo base_url('resources/institute/') ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url('resources/institute/') ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url('resources/institute/') ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/page-became-member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 16:13:52 GMT -->
</html>