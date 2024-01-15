<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/LoginM","lm");        
	}
    public function index()
    {
    	$this->load->view("admin/Login");
    }
    public function validateLogin()
    {
    	$data=array(
                    "username"=>$this->input->post("txtuname"),
                    "password"=>$this->input->post("txtupass")
    	            );
        $ldata=$this->lm->selectLoginAdmin($data);
        if(count($ldata)>0)
        {
        	$_SESSION['aid']=$ldata[0]->adminid;
        	$_SESSION['uname']=$ldata[0]->username;
        	$_SESSION['uimg']=$ldata[0]->profilepic;
            $_SESSION['eid']=$ldata[0]->emailid;
            $_SESSION['contact']=$ldata[0]->contact;    
        	redirect("admin/Des");
        }
        else
        {
        	$tmp=array("errmsg"=>"*Invalid User");
        	$this->load->view("admin/Login",$tmp);
        }
    }
    public function sendotp()
    {
       $mail=$this->input->post('otmail');
       $r1=rand("100000","999999");
       $this->load->library('email');
       $con=array('protocol'=>'smtp',
                  'smtp_host'=>'ssl://smtp.gmail.com',
                  'smtp_port'=>465,
                  'smtp_user'=>'ecourselearning99@gmail.com',
                  'smtp_pass'=>'Vishal12345',
                   );
       $this->email->initialize($con);
       $this->email->from('ecourselearning99@gmail.com','E_Course');
       $this->email->to($mail);
       $this->email->subject("Forgot Password OTP");
       $this->email->message($r1);
       $this->email->set_newline("\r\n");
       $this->email->send();
       echo md5($r1);
    }
    public function changepass()
    {
       $data=array('password'=>$this->input->post("txtcpass"));
       $where=array('emailid'=>$this->input->post('txtemail'));  
       $this->lm->updateAdminPass($data,$where);
       redirect("admin/Login");        
    }
    public function logout()
    {
    	session_destroy();
        redirect("admin/Login");    	
    }
}
?>