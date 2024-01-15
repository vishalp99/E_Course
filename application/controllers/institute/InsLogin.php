<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsLogin extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("institute/InsLoginM","il");

 		$this->load->model("institute/HomeM","hm");

		$this->load->model("institute/InstituteregM","im");
	}
	public function login()
	{
		$this->load->view("institute/login.php");
	}

	public function validateLogin()
	{
		$data=array(
               "username"=>$this->input->post('txtUname'),
               "password"=>$this->input->post('txtPwd')
		);
		$loggedData=$this->il->selectLoginData($data);

		if(count($loggedData)>0)
		{
         if($loggedData[0]->st=="0")
         {
            $_SESSION['uid']=$loggedData[0]->instituteuserid;
            $_SESSION['suid']=$loggedData[0]->instituteid;
            $_SESSION['uname']=$loggedData[0]->username;
            $_SESSION['level']=$loggedData[0]->level;

            if($loggedData[0]->level==="1")
  			{

  				redirect("institute/Home/home1");
			   }else{

  				redirect("institute/Home/home2");	
			   }
       }
       else{
        $this->load->view("institute/blockins");
       }

		}
		else
		{ 
			$temp=array(
                    "loginErr"=>"Invalid Username or Password"
			);
			$this->load->view("institute/login.php",$temp);
		}
	}
	 public function index()
	{
		if(isset($_SESSION['uid']) && isset($_SESSION['suid']) && isset($_SESSION['uname']) && isset($_SESSION['level']) )
		{


 		$data=array("c1.instituteid"=>$_SESSION['suid']);

// 		$t=array("allcl"=>$this->hm->totcls($data));

 	//	$tm=null;

// 			foreach ($t['allcl'] as $k) {
 //				$d2=array("classid"=>$k->classid);

// 				$temp2=count($this->hm->totstu($d2));

 //				$tm=$tm+$temp2;
 	//		}

 		$temp=array("totcl"=>count($this->hm->totcls($data)),
 			"totuser"=>count($this->hm->totus($data)),
 			"totst"=>count($this->hm->totstu($data))
 		); 
		$this->load->view("institute/home",$temp);
	}
	else
	{
		redirect('user/Home');
	}
	}
	public function loadReg()
	{
		//$temp=array(
         //      "institute"=>$this->il->selectAllInstituteName()
		//);
		if($_SESSION['uid'])
		{
		$this->load->view("institute/reg");
		}
		else{
			redirect("user/Home");
		}

	}

	public function registerUser()
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/instituteimg/insuser/".$img) or die("cannot upload image");
		$lvl=$this->input->post('txtLevel');
		foreach($lvl as $l)
		{
			$data=array(
             //"instituteid"=>$this->input->post('txtInsID'),
				"instituteid"=>$_SESSION['suid'],
             "username"=>$this->input->post('txtUname'),
             "password"=>$this->input->post('txtPwd'),
             "email"=>$this->input->post('txtEmail'),
             "mobilenumber"=>$this->input->post('txtNo'),
             "profilepic"=>$img,
            // "description"=>$this->input->post('txtDesc'),
            // "fullname"=>$this->input->post('txtName'),
				"level"=>$l
			);
		}
		$this->il->insertUser($data);

  				redirect("institute/Home/home1");
  			}
	public function logout()
	{
		session_destroy();
		redirect("user/Home");
	}
	public function loadusers()
	{
    if(isset($_SESSION['uid']))
    {
		$temp=array("allu"=>$this->il->loadalluser());

		$this->load->view("institute/allusers",$temp);
  }
  else{
    redirect("user/Home");
  }

	}
	public function loadstudents()
	{
    if(isset($_SESSION['uid']))
    {

 		$data=array("c1.instituteid"=>$_SESSION['suid']);

 		$temp=array("stuinfo"=>$this->hm->totstu($data)
 		); 
 				$this->load->view("institute/allstudents",$temp);
        }
  else{
    redirect("user/Home");
  }
	}
  public function loadpandingreq()
  {
    if(isset($_SESSION['uid']))
    {
      $where=array("cr1.status"=>-1);
    $data=$this->hm->pndreq($where);



    $data2=array("c1.instituteid"=>$_SESSION['suid']);

    $cls=$this->hm->totcls($data2);
    
    $temp=array("rinfo"=>$data,
      "cinfo"=>$cls
    );
        $this->load->view("institute/pandingreq",$temp);
      }     
 else{
    redirect("user/Home");
    }
  }
 //  public function loadpandingr()
 //  { 
 //    if(isset($_SESSION['uid']))
 //    {
 //    $data=array("c1.instituteid"=>$_SESSION['suid']);

 //    $cls=$this->hm->totcls($data);

 //    $d3=array();

 //        $d2=array();
  
 //      foreach ($cls as $k) {
 //        $where=array("c1.classid"=>$k->classid);
 //         $d2["rinfo"]=$this->hm->pndreq($where);         
 //            // $cnt++;
 //            // if($cnt==2)
 //            // {
 //            //   print_r($d2);
 //            //   die();
 //            // }

 //           $d3+=$d2;

 //            }
 //           // print_r($d3);
 //           //  die();
 //            print_r($d3);
 //            die();
 //        $this->load->view("institute/pandingreq",$d3);
 //      }     
 // else{
 //    redirect("user/Home");
 //    }
  

 //  }
  public function loadstview()
  {
  if(isset($_SESSION['uid']))
    {
    $data=array("c1.instituteid"=>$_SESSION['suid']);

   // $cls=$this->hm->totcls($data);

      // $d2=array();
      // foreach ($cls as $k) {
      //   $where=array("c1.classid"=>$k->classid);
  
      //    $d2["rid"]=$this->hm->getresid($where); 
          
      // }
        //$d3=array("views"=>$this->hm->getviews($ddd));
      
     // $d2=array("rid"=>$this->hm->getresid($data));
       // print_r($d2);
        //die();
    //   $tm=time();
      // echo date('yy-m-d',$tm);
      // die();
            //    "datetime"=>date('yy-m-d',$tm)
 
      // foreach ($d2 as $k) {
      //   $where2=array("resourceid"=>$k->resourceid);
      //   $d3=array("views"=>$this->hm->getviews($where2));
      // }

        $d3=array("views"=>$this->hm->getviews($data));
      
      $this->load->view("institute/studentview",$d3);
  
    }
  else{
    redirect("user/Home");
  }    
  }
	 public function checkusername()
        {
            $query='';

            if($this->input->post('query'))
            {
            $query=$this->input->post('query');
            }
            $data=$this->im->fetch_sudata();

            foreach ($data as $k) {
            if($k->username === $query)
            {
                ?>
                *Already taken
                <?php
            }
            }
        
        }
        public function checkmail()
        {

            $query='';

            if($this->input->post('query'))
            {
            $query=$this->input->post('query');
            }
            $data=$this->im->fetch_sudata();

            foreach ($data as $k) {
            if($k->email === $query)
            {
                ?>
                *Already taken
                <?php
            }
            }
            if(filter_var($query, FILTER_VALIDATE_EMAIL)==false)
            {
                ?>
                Enter valid email
                <?php
            }    
        }
        public function checkmno()
        {

            $query='';

            if($this->input->post('query'))
            {
            $query=$this->input->post('query');
            }
            $data=$this->im->fetch_sudata();

            foreach ($data as $k) {
            if($k->mobilenumber === $query)
            {
                ?>
                *Already taken
                <?php
            }
            
            }
            if(!preg_match("/^[6-9]\d{9}$/",$query))
            {
                ?>
                *Not valid number
                <?php
            }    
        }
        public function openforgotpass()
        {
         $this->load->view("institute/forgetpas");   
        }

         public function sendotp()
        {

            $ma=$this->input->post('otmail');
                $ab=rand("10000","99999");
                 $this->load->library('email');
        $config=array(
            'protocol'=>'smtp',
            'smtp_host'=>'ssl://smtp.gmail.com',
            'smtp_port'=>465,
            'smtp_user'=>'ecourselearning99@gmail.com',
            'smtp_pass'=>'Vishal12345'
        );
        $this->email->initialize($config);
      $this->email->from('ecourselearning99@gmail.com', 'Ecourse');
      $this->email->to($ma);
      $this->email->subject("Change password OTP");
      $this->email->message($ab
      );
      $this->email->set_newline("\r\n");
     $this->email->send();

        echo md5($ab);
        }
        public function changepass()
        {
            $data=array("password"=>$this->input->post("txtcpas"));

            $where = array("email"=>$this->input->post("txtemail"));

            $this->il->chgpass($data,$where);
            redirect("institute/InsLogin/login");
        }

}
?>